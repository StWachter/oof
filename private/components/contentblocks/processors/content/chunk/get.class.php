<?php

if (class_exists(\MODX\Revolution\Processors\Element\Chunk\Get::class)) {
    class_alias(\MODX\Revolution\Processors\Element\Chunk\Get::class, modElementGetProcessor::class);
}
else {
    require_once MODX_CORE_PATH . 'model/modx/processors/element/get.class.php';
}

/**
 * Gets a chunk.
 *
 * @param integer $id The ID of the chunk.
 *
 * @package modx
 * @subpackage processors.element.chunk
 */
class ContentBlocksChunkGetProcessor extends modElementGetProcessor {
    public $classKey = 'modChunk';
    public $languageTopics = ['chunk','category'];
    public $permission = 'view_chunk';
    public $objectType = 'chunk';

    public function beforeOutput() {
        parent::beforeOutput();
        $this->object->set('preview', $this->generatePreview());
    }

    public function generatePreview()
    {
        $corePath = $this->modx->getOption('contentblocks.core_path',null,$this->modx->getOption('core_path').'components/contentblocks/');
        /** @var ContentBlocks $contentBlocks */
        $contentBlocks = $this->modx->getService('contentblocks', ContentBlocks::class, $corePath . 'model/contentblocks/');
        $contentBlocks->loadInputs();

        $field = $this->modx->getObject(cbField::class, (int)$this->getProperty('field'));
        if ($field instanceof cbField && array_key_exists($field->get('input'), $contentBlocks->inputs)) {
            /** @var cbBaseInput $input */
            $input = $contentBlocks->inputs[$field->get('input')];
            $data = $this->getProperty('data');

            // Parse the input type first
            $content = $contentBlocks->generateFieldHtml($data, $field);

            // Try to fetch the resource to parse it further
            $resource = $this->modx->getObject(modResource::class, (int)$this->getProperty('resource'));
            if ($resource instanceof modResource || $resource instanceof \MODX\Revolution\modResource) {
                // This will set a bunch of resource vars both for contentblocks and MODX
                $contentBlocks->setResource($resource);
                // This makes sure the right context is loaded
                $this->modx->switchContext($resource->get('context_key'));


                // Then, parse the resulting content through the MDOX parser.
                $this->modx->parser->processElementTags('', $content, false, false);
                $this->modx->parser->processElementTags('', $content, true, true);
            }
            return $content;
        }

        return 'Could not generate preview :(';
    }

}
return ContentBlocksChunkGetProcessor::class;