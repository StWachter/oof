<?php
/**
 * Gets a list of cbCategory objects.
 */
class cbCategoryGetListProcessor extends modObjectGetListProcessor {
    public $classKey = 'cbCategory';
    public $defaultSortField = 'sortorder';
    public $defaultSortDirection = 'ASC';

    /**
     * {@inheritDoc}
     * @return boolean
     */
    public function initialize() {
        $showNone = $this->getProperty('showNone');
        $this->setProperty('showNone', $showNone !== 'false');
        if ($this->getProperty('combo') && !$this->getProperty('limit')) {
            $this->setProperty('limit', 0);
        }
        return parent::initialize();
    }

    public function beforeIteration(array $list) {
        if ($this->getProperty('showNone')) {
            $list[] = array(
              'id' => 0,
              'name' => '('.$this->modx->lexicon('none').')',
              'description' => '',
            );
        }
        return $list;
    }
}
return 'cbCategoryGetListProcessor';
