<?php
/**
 * Class MultiSelectInput
 *
 * Adds a multi-select input type.
 *
 * @author Mark Hamstra
 * @package contentblocks
 */
class MultiSelectInput extends DropdownInput {

    public $defaultWrapperTpl = '[[+values]]';

    public function process(cbField $field, array $data = []): string
    {
        $tpl = $field->get('template');
        $wrapperTpl = $field->get('wrapper_template') ?? $this->defaultWrapperTpl;

        $output = [];
        foreach ($data as $k => $datum) {
            if ($k === 'value') {
                foreach ($datum as $value) {
                    $output[] = $this->contentBlocks->parse($tpl, ['value' => $value]);
                }
            }
        }
        $output = implode((string)$field->get('separator'), $output);
        $data['values'] = $output;

        return $this->contentBlocks->parse($wrapperTpl, $data);
    }

    /**
     * Return an array of field properties. Properties are used in the component for defining
     * additional templates or other settings the site admin can define for the field.
     *
     * @return array
     */
    public function getFieldProperties(): array
    {
        return [
            [
                'key' => 'wrapper_template',
                'fieldLabel' => $this->modx->lexicon('contentblocks.wrapper_template'),
                'xtype' => 'code',
                'default' => $this->defaultWrapperTpl,
                'description' => $this->modx->lexicon('contentblocks.multiselect.wrapper_template.description')
            ],
            [
                'key' => 'options',
                'fieldLabel' => $this->modx->lexicon('contentblocks.dropdown.options'),
                'xtype' => 'textarea',
                'default' => '',
                'description' => $this->modx->lexicon('contentblocks.dropdown.options.description')
            ],
            [
                'key' => 'default_value',
                'fieldLabel' => $this->modx->lexicon('contentblocks.dropdown.default_value'),
                'xtype' => 'textfield',
                'default' => '',
                'description' => $this->modx->lexicon('contentblocks.dropdown.default_value.description')
            ],
            [
                'key' => 'separator',
                'fieldLabel' => $this->modx->lexicon('contentblocks.multiselect.output_separator'),
                'xtype' => 'textfield',
                'default' => '',
                'description' => $this->modx->lexicon('contentblocks.multiselect.output_separator.description')
            ]
        ];
    }

    /**
     * @return array
     */
    public function getJavaScripts(): array
    {
        if ($this->contentBlocks->debug) {
            return [
                $this->contentBlocks->config['assetsUrl'] . 'node_modules/select2/dist/js/select2.min.js',
                $this->contentBlocks->config['assetsUrl'] . 'js/inputs/multi-select.js',
            ];
        }
        return [];
    }

    /**
     * @return array
     */
    public function getTemplates(): array
    {
        $tpls = [];
        $tpls[] = $this->contentBlocks->getCoreInputTpl('multi_select');
        return $tpls;
    }

}
