<?php
/**
 * Class ImageInput
 *
 * @author Mark Hamstra
 * @package contentblocks
 */
class ImageInput extends cbBaseInput {
    public $defaultIcon = 'heading';
    public $defaultTpl = '<img src="[[+url]]" width="[[+width]]" height="[[+height]]" alt="">';

    public const PATH_PROPERTY_KEYS = ['directory', 'crop_directory'];

    /**
     * @return array
     */
    public function getTemplates()
    {
        $tpls = array();
        $tpls[] = $this->contentBlocks->getCoreInputTpl('image');
        $tpls[] = $this->contentBlocks->getCoreTpl('inputs/partials/image_crop', 'contentblocks-field-image-crop');
        $tpls[] = $this->contentBlocks->getCoreTpl('inputs/modals/image_cropper', 'contentblocks-field-image-cropper');
        $tpls[] = $this->contentBlocks->getCoreTpl('inputs/modals/image_cropper_configuration', 'contentblocks-field-image-cropper-configuration');
        return $tpls;
    }

    /**
     * Return an array of field properties. Properties are used in the component for defining
     * additional templates or other settings the site admin can define for the field.
     *
     * @return array
     */
    public function getFieldProperties()
    {
        return array(
            array(
                'key' => 'source',
                'fieldLabel' => $this->modx->lexicon('contentblocks.image.source'),
                'xtype' => 'contentblocks-combo-mediasource',
                'default' => 0,
                'description' => $this->modx->lexicon('contentblocks.image.source.description')
            ),
            array(
                'key' => 'directory',
                'fieldLabel' => $this->modx->lexicon('contentblocks.directory'),
                'xtype' => 'textfield',
                'default' => $this->contentBlocks->getOption('contentblocks.image.upload_path', null, 'assets/uploads/images/'),
                'description' => $this->modx->lexicon('contentblocks.directory.description')
            ),
            array(
                'key' => 'crop_directory',
                'fieldLabel' => $this->modx->lexicon('contentblocks.crop_directory'),
                'xtype' => 'textfield',
                'default' => $this->contentBlocks->getOption('contentblocks.image.crop_path', null, 'assets/crops/'),
                'description' => $this->modx->lexicon('contentblocks.crop_directory.description')
            ),
            array(
                'key' => 'crops',
                'fieldLabel' => $this->modx->lexicon('contentblocks.crops'),
                'xtype' => 'textfield',
                'default' => '',
                'description' => $this->modx->lexicon('contentblocks.crops.description')
            ),
            array(
                'key' => 'open_crops_automatically',
                'fieldLabel' => $this->modx->lexicon('contentblocks.open_crops_automatically'),
                'xtype' => 'contentblocks-combo-boolean',
                'default' => false,
                'description' => $this->modx->lexicon('contentblocks.open_crops_automatically.description')
            ),
            array(
                'key' => 'file_types',
                'fieldLabel' => $this->modx->lexicon('contentblocks.file_types'),
                'xtype' => 'textfield',
                'default' => 'png,gif,jpg,jpeg,svg',
                'description' => $this->modx->lexicon('contentblocks.file_types.description')
            ),
            array(
                'key' => 'thumbnail_size',
                'fieldLabel' => $this->modx->lexicon('contentblocks.image.thumbnail_size'),
                'xtype' => 'textfield',
                'default' => '0',
                'description' => $this->modx->lexicon('contentblocks.image.thumbnail_size.description'),
            ),
            array(
                'key' => 'thumbnail_crop',
                'fieldLabel' => $this->modx->lexicon('contentblocks.image.thumbnail_crop'),
                'xtype' => 'textfield',
                'default' => '',
                'description' => $this->modx->lexicon('contentblocks.image.thumbnail_crop.description'),
            ),
        );
    }

    /**
     * Process this field based on its template and the received data. For the image input, we also look at the image to
     * grab the width/height.
     *
     * @param cbField $field
     * @param array $data
     * @return mixed
     */
    public function process(cbField $field, array $data = array())
    {
        if (!isset($data['width']) || $data['width'] < 1) {
            $size = false;

            if (file_exists($data['url']) && is_readable($data['url'])) {
                $size = getimagesize($data['url']);
            }

            if (!$size) {
                // Try it with a normalised path
                $normalisedPath = str_replace(MODX_BASE_URL.MODX_BASE_URL, MODX_BASE_URL, MODX_BASE_PATH . $data['url']);
                if (file_exists($normalisedPath) && is_readable($normalisedPath)) {
                    $size = getimagesize($normalisedPath);
                }
            }

            if (!empty($size)) {
                $data['width'] = $size[0];
                $data['height'] = $size[1];
            }
        }
        return parent::process($field, $data);
    }

    /**
     * Parse placeholders in any properties that hold paths
     * @param array $properties
     * @param array $options
     * @return array
     */
    public function parsePathProperties(array $properties, array $options = []): array
    {
        $createDirectories = $this->modx->getOption('contentblocks.image.create_directories', null, false);
        if (!empty($properties)) {
            $mediaSourceId = !empty($properties['source'])
                ? $properties['source']
                : $this->modx->getOption(
                    'contentblocks.image.source',
                    null,
                    $this->modx->getOption('default_media_source'),
                    true
                );

            foreach ($properties as $k => $v) {
                if (in_array($k, self::PATH_PROPERTY_KEYS, true)) {
                    $path = $this->contentBlocks->parsePathVariables($v);
                    $properties[$k] = $path;

                    // Do nothing if parsing didn't change the path
                    if (!$createDirectories || $path === $v) {
                        continue;
                    }

                    $properties[$k] = $this->createDirectory($path, $mediaSourceId);
                }
            }
        }

        return $properties;
    }

    /**
     * Creates a directory if it doesn't already exist from a given path
     * @param string $path
     * @param string $mediaSourceId
     * @return string
     */
    protected function createDirectory(string $path, string $mediaSourceId): string
    {
        $this->modx->loadClass('sources.modMediaSource');
        $mediaSource = modMediaSource::getDefaultSource($this->modx, $mediaSourceId);
        if (!$mediaSource) {
            return $path;
        }

        $mediaSource->getWorkingContext();
        $mediaSource->initialize();
        $mediaSource->createContainer($path, DIRECTORY_SEPARATOR);

        return $path;
    }
}
