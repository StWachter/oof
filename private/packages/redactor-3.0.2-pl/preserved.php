<?php return array (
  '29846de3dc37dbec178e43635568ba7e' => 
  array (
    'criteria' => 
    array (
      'name' => 'redactor',
    ),
    'object' => 
    array (
      'name' => 'redactor',
      'path' => '{core_path}components/redactor/',
      'assets_path' => '{assets_path}components/redactor/',
    ),
  ),
  'e08b1327ee1f183ecb86f216d6afd29c' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.configuration_set',
    ),
    'object' => 
    array (
      'key' => 'redactor.configuration_set',
      'value' => '4',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'configuration',
      'editedon' => '2020-01-16 16:50:37',
    ),
  ),
  '88f14f147c3fdea94d0b344e5eb50dcc' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.introtext',
    ),
    'object' => 
    array (
      'key' => 'redactor.introtext',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'configuration',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fca18c22da0d6c3ca33724fe32c2d8d7' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.introtext.configuration_set',
    ),
    'object' => 
    array (
      'key' => 'redactor.introtext.configuration_set',
      'value' => '1',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'configuration',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fee04ba8083113b232159aa0c04237fd' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.css',
    ),
    'object' => 
    array (
      'key' => 'redactor.css',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '2ccee6b182d536112e808bab4e5fd147' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.js',
    ),
    'object' => 
    array (
      'key' => 'redactor.js',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'configuration',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c956775d4c9e1cf2c0a237512fe4e6ca' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.sanitizePattern',
    ),
    'object' => 
    array (
      'key' => 'redactor.sanitizePattern',
      'value' => '/([[:alnum:]_\\.-]*)/',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0c7bd13e4d25aa86ed30d75a02f7bf7a' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.sanitizeReplace',
    ),
    'object' => 
    array (
      'key' => 'redactor.sanitizeReplace',
      'value' => '_',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '6d27e29777fc15e8797c5137912319f6' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.translit',
    ),
    'object' => 
    array (
      'key' => 'redactor.translit',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c68f80ab5a479c616e531186151ab19e' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.translit_class',
    ),
    'object' => 
    array (
      'key' => 'redactor.translit_class',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'cf159a0f7ac883ceded23a861d8e992a' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.translit_class_path',
    ),
    'object' => 
    array (
      'key' => 'redactor.translit_class_path',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4481bd0fe4ad2e61049a6c525d008326' => 
  array (
    'criteria' => 
    array (
      'text' => 'redactor.configuration',
    ),
    'object' => 
    array (
      'text' => 'redactor.configuration',
      'parent' => 'components',
      'action' => 'configuration',
      'description' => 'redactor.configuration.menu_desc',
      'icon' => '',
      'menuindex' => 5,
      'params' => '',
      'handler' => '',
      'permissions' => 'redactor_configurator',
      'namespace' => 'redactor',
    ),
  ),
  '20867305fd773c9baabb59ae68c2206e' => 
  array (
    'criteria' => 
    array (
      'name' => 'RedactorTemplate',
    ),
    'object' => 
    array (
      'id' => 10,
      'template_group' => 1,
      'name' => 'RedactorTemplate',
      'description' => 'Policy Template for access to the Redactor configurator.',
      'lexicon' => 'redactor:permissions',
    ),
  ),
  '38282d7794b622ef293dde154b2eebbb' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_configurator',
    ),
    'object' => 
    array (
      'id' => 260,
      'template' => 10,
      'name' => 'redactor_configurator',
      'description' => 'redactor.permission.configurator',
      'value' => 1,
    ),
  ),
  '4c3e88343ab93048eaf55d4d1eb002cc' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_sets_view',
    ),
    'object' => 
    array (
      'id' => 261,
      'template' => 10,
      'name' => 'redactor_sets_view',
      'description' => 'redactor.permission.sets_view',
      'value' => 1,
    ),
  ),
  '08039d8cbe11cb54edf9e3f9af5be869' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_sets_create',
    ),
    'object' => 
    array (
      'id' => 262,
      'template' => 10,
      'name' => 'redactor_sets_create',
      'description' => 'redactor.permission.sets_create',
      'value' => 1,
    ),
  ),
  '712138805718d1637a719acca8f80bd0' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_sets_save',
    ),
    'object' => 
    array (
      'id' => 263,
      'template' => 10,
      'name' => 'redactor_sets_save',
      'description' => 'redactor.permission.sets_save',
      'value' => 1,
    ),
  ),
  '4ec6c357e8c71fee80b82daac53107ac' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_sets_export',
    ),
    'object' => 
    array (
      'id' => 264,
      'template' => 10,
      'name' => 'redactor_sets_export',
      'description' => 'redactor.permission.sets_export',
      'value' => 1,
    ),
  ),
  '5cc18b8462363cf43fd3811fcc86a369' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_sets_import',
    ),
    'object' => 
    array (
      'id' => 265,
      'template' => 10,
      'name' => 'redactor_sets_import',
      'description' => 'redactor.permission.sets_import',
      'value' => 1,
    ),
  ),
  '2f9bbe425edd4523f64494bd7678365b' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_sets_delete',
    ),
    'object' => 
    array (
      'id' => 266,
      'template' => 10,
      'name' => 'redactor_sets_delete',
      'description' => 'redactor.permission.sets_delete',
      'value' => 1,
    ),
  ),
  '72a9fb7a0844e3b237a69730697c6a3f' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'Redactor Full Access',
    ),
    'object' => 
    array (
      'id' => 16,
      'name' => 'Redactor Full Access',
      'description' => 'Access Policy for Redactor that gives full access to the configurator. Overwritten on upgrade.',
      'parent' => 0,
      'template' => 10,
      'class' => '',
      'data' => '{"redactor_configurator":true,"redactor_sets_view":true,"redactor_sets_create":true,"redactor_sets_save":true,"redactor_sets_export":true,"redactor_sets_import":true,"redactor_sets_delete":true}',
      'lexicon' => 'redactor:permissions',
    ),
  ),
  'bba376effdfa5b0706ff25205238d937' => 
  array (
    'criteria' => 
    array (
      'name' => 'Redactor',
    ),
    'object' => 
    array (
      'id' => 10,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Redactor',
      'description' => 'Redactor WYSIWYG editor plugin for MODX Revolution',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * Redactor WYSIWYG Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnRichTextBrowserInit, OnDocFormPrerender
 *
 * @author JP DeVries <mail@devries.jp>
 *
 * @package redactor
 */

$corePath = $modx->getOption(\'redactor.core_path\', null, $modx->getOption(\'core_path\').\'components/redactor/\');

switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tvs/input/\');
        break;

    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tvs/inputoptions/\');
        break;

    case \'OnRichTextEditorRegister\':
        $modx->event->output(\'Redactor\');
        break;

    case \'OnFileManagerFileRename\':
        /**
         * @var string $path
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }
        $redactor->renames[] = $path;

        break;

    case \'OnRichTextEditorInit\':
        /**
         * @var string $editor
         * @var array $elements
         *
         * Only load up the editor if the editor is Redactor, and use_editor is enabled.
         */
        $rte = isset($editor) ? $editor : $modx->getOption(\'which_editor\', null, \'\');
        if ($rte !== \'Redactor\' || !$modx->getOption(\'use_editor\', null, true)) {
            return;
        }

        /**
         * Attempt to load the Redactor service class. Log error and halt processing if it fails.
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }

        if (isset($resource) && $resource instanceof modResource) {
            $redactor->setResource($resource);
        }
        elseif ($modx->resource && $modx->resource instanceof modResource) {
            $redactor->setResource($modx->resource);
        }
        elseif ($modx->controller && isset($modx->controller->resource) && $modx->controller->resource instanceof modResource) {
            $redactor->setResource($modx->controller->resource);
        }

        // Make sure global assets are loaded
        $redactor->initialize();

        $set = (int)$redactor->getOption(\'redactor.configuration_set\', null, 1, true);
        if (isset($resource)
            && ($resource instanceof modResource)
            && ($template = $resource->getOne(\'Template\'))
            && ($template instanceof modTemplate)
        ) {
            $props = $template->getProperties();
            $templateSet = array_key_exists(\'redactor.configuration_set\', $props) ? (int)$props[\'redactor.configuration_set\'] : 0;
            if ($templateSet > 0) {
                $set = $templateSet;
            }
        }

        $major = (int)$modx->getVersionData()[\'version\'];
        $html = <<<HTML
<script type="text/javascript">
document.documentElement.className += \' redactor-modx{$major}\';
var RedactorConfigurationSet = $set;
</script>
HTML;

        $modx->event->output($html);
        break;

    case \'ContentBlocks_RegisterInputs\':
        /**
         * @var modX $modx
         * @var ContentBlocks $contentBlocks
         * @var array $scriptProperties
         */
        if (class_exists(\'cbBaseInput\')) {
            require_once($corePath . \'elements/inputs/redactor_input.class.php\');
            $modx->event->output([
                \'redactor\' => new RedactorInput($contentBlocks)
            ]);
        }
        break;

    case \'FredBeforeRender\':
        /**
         * @var string $path
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }

        $assetsUrl = $redactor->config[\'assetsUrl\'];

        $version = \'?v=\' . $this->redactor->version;
        $css = <<<HTML
<link rel="stylesheet" href="{$assetsUrl}vendor/imperavi/redactor/redactor.min.css{$version}">
<link rel="stylesheet" href="{$assetsUrl}vendor/codemirror/codemirror.css{$version}">
<link rel="stylesheet" href="{$assetsUrl}dist/modxredactor.min.css{$version}">
HTML;
        if ($customCss = $redactor->getOption(\'redactor.css\')) {
            $customCss = array_filter(array_map(\'trim\', explode(\',\', $customCss)));
            foreach ($customCss as $url) {
                $css .= \'<link rel="stylesheet" href="\' . $url . $version . \'">\';
            }
        }

        $js = <<<HTML
<script type="text/javascript" src="{$assetsUrl}dist/imperavi/redactor.min.js{$version}"></script>
<script type="text/javascript" src="{$assetsUrl}dist/plugins.min.js{$version}"></script>
<script type="text/javascript" src="{$assetsUrl}dist/codemirror.min.js{$version}"></script>
<script type="text/javascript" src="{$assetsUrl}js/fredactor.js{$version}"></script>
HTML;
        if ($customJs = $redactor->getOption(\'redactor.js\')) {
            $customJs = array_filter(array_map(\'trim\', explode(\',\', $customJs)));
            foreach ($customJs as $url) {
                $js .= \'<script type="text/javascript" src="\' . $url . $version . \'"></script>\';
            }
        }
        // Primary redactor scripts and the generated configuration sets
        $js .= \'<script type="text/javascript" src="\' . $assetsUrl . \'dist/modxredactor.min.js\' . $version . \'"></script>\';
        $js .= $redactor->getGeneratedConfigurationSets([Redactor::OPT_IS_FRED => true]);

        // Make the resource/wctx available
        if (isset($modx->resource) && $modx->resource instanceof modResource) {
            $redactor->setResource($modx->resource);
        }

        // Get the default configuration set to use from template or setting. This can be overriden with a Fred RTE Config.
        $set = (int)$redactor->getOption(\'redactor.configuration_set\', null, 1, true);
        if (isset($modx->resource)
            && ($modx->resource instanceof modResource)
            && ($template = $modx->resource->getOne(\'Template\'))
            && ($template instanceof modTemplate)
        ) {
            $props = $template->getProperties();
            $templateSet = array_key_exists(\'redactor.configuration_set\', $props) ? (int)$props[\'redactor.configuration_set\'] : 0;
            if ($templateSet > 0) {
                $set = $templateSet;
            }
        }
        $js .= \'<script type="text/javascript">var RedactorConfigurationSet = \' . $set . \';</script>\';

        // Instruct Fred that we offer a "Fredactor" function as "Redactor" RTE.
        $beforeRender = \'
    this.registerRTE("Redactor", Fredactor);
\';
        // Output it all. Woof.
        $modx->event->_output = [
            \'includes\' => $css.$js,
            \'beforeRender\' => $beforeRender,
            \'lexicons\' => [\'redactor:default\']
        ];
        return true;
}

return;',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Redactor WYSIWYG Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnRichTextBrowserInit, OnDocFormPrerender
 *
 * @author JP DeVries <mail@devries.jp>
 *
 * @package redactor
 */

$corePath = $modx->getOption(\'redactor.core_path\', null, $modx->getOption(\'core_path\').\'components/redactor/\');

switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tvs/input/\');
        break;

    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tvs/inputoptions/\');
        break;

    case \'OnRichTextEditorRegister\':
        $modx->event->output(\'Redactor\');
        break;

    case \'OnFileManagerFileRename\':
        /**
         * @var string $path
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }
        $redactor->renames[] = $path;

        break;

    case \'OnRichTextEditorInit\':
        /**
         * @var string $editor
         * @var array $elements
         *
         * Only load up the editor if the editor is Redactor, and use_editor is enabled.
         */
        $rte = isset($editor) ? $editor : $modx->getOption(\'which_editor\', null, \'\');
        if ($rte !== \'Redactor\' || !$modx->getOption(\'use_editor\', null, true)) {
            return;
        }

        /**
         * Attempt to load the Redactor service class. Log error and halt processing if it fails.
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }

        if (isset($resource) && $resource instanceof modResource) {
            $redactor->setResource($resource);
        }
        elseif ($modx->resource && $modx->resource instanceof modResource) {
            $redactor->setResource($modx->resource);
        }
        elseif ($modx->controller && isset($modx->controller->resource) && $modx->controller->resource instanceof modResource) {
            $redactor->setResource($modx->controller->resource);
        }

        // Make sure global assets are loaded
        $redactor->initialize();

        $set = (int)$redactor->getOption(\'redactor.configuration_set\', null, 1, true);
        if (isset($resource)
            && ($resource instanceof modResource)
            && ($template = $resource->getOne(\'Template\'))
            && ($template instanceof modTemplate)
        ) {
            $props = $template->getProperties();
            $templateSet = array_key_exists(\'redactor.configuration_set\', $props) ? (int)$props[\'redactor.configuration_set\'] : 0;
            if ($templateSet > 0) {
                $set = $templateSet;
            }
        }

        $major = (int)$modx->getVersionData()[\'version\'];
        $html = <<<HTML
<script type="text/javascript">
document.documentElement.className += \' redactor-modx{$major}\';
var RedactorConfigurationSet = $set;
</script>
HTML;

        $modx->event->output($html);
        break;

    case \'ContentBlocks_RegisterInputs\':
        /**
         * @var modX $modx
         * @var ContentBlocks $contentBlocks
         * @var array $scriptProperties
         */
        if (class_exists(\'cbBaseInput\')) {
            require_once($corePath . \'elements/inputs/redactor_input.class.php\');
            $modx->event->output([
                \'redactor\' => new RedactorInput($contentBlocks)
            ]);
        }
        break;

    case \'FredBeforeRender\':
        /**
         * @var string $path
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }

        $assetsUrl = $redactor->config[\'assetsUrl\'];

        $version = \'?v=\' . $this->redactor->version;
        $css = <<<HTML
<link rel="stylesheet" href="{$assetsUrl}vendor/imperavi/redactor/redactor.min.css{$version}">
<link rel="stylesheet" href="{$assetsUrl}vendor/codemirror/codemirror.css{$version}">
<link rel="stylesheet" href="{$assetsUrl}dist/modxredactor.min.css{$version}">
HTML;
        if ($customCss = $redactor->getOption(\'redactor.css\')) {
            $customCss = array_filter(array_map(\'trim\', explode(\',\', $customCss)));
            foreach ($customCss as $url) {
                $css .= \'<link rel="stylesheet" href="\' . $url . $version . \'">\';
            }
        }

        $js = <<<HTML
<script type="text/javascript" src="{$assetsUrl}dist/imperavi/redactor.min.js{$version}"></script>
<script type="text/javascript" src="{$assetsUrl}dist/plugins.min.js{$version}"></script>
<script type="text/javascript" src="{$assetsUrl}dist/codemirror.min.js{$version}"></script>
<script type="text/javascript" src="{$assetsUrl}js/fredactor.js{$version}"></script>
HTML;
        if ($customJs = $redactor->getOption(\'redactor.js\')) {
            $customJs = array_filter(array_map(\'trim\', explode(\',\', $customJs)));
            foreach ($customJs as $url) {
                $js .= \'<script type="text/javascript" src="\' . $url . $version . \'"></script>\';
            }
        }
        // Primary redactor scripts and the generated configuration sets
        $js .= \'<script type="text/javascript" src="\' . $assetsUrl . \'dist/modxredactor.min.js\' . $version . \'"></script>\';
        $js .= $redactor->getGeneratedConfigurationSets([Redactor::OPT_IS_FRED => true]);

        // Make the resource/wctx available
        if (isset($modx->resource) && $modx->resource instanceof modResource) {
            $redactor->setResource($modx->resource);
        }

        // Get the default configuration set to use from template or setting. This can be overriden with a Fred RTE Config.
        $set = (int)$redactor->getOption(\'redactor.configuration_set\', null, 1, true);
        if (isset($modx->resource)
            && ($modx->resource instanceof modResource)
            && ($template = $modx->resource->getOne(\'Template\'))
            && ($template instanceof modTemplate)
        ) {
            $props = $template->getProperties();
            $templateSet = array_key_exists(\'redactor.configuration_set\', $props) ? (int)$props[\'redactor.configuration_set\'] : 0;
            if ($templateSet > 0) {
                $set = $templateSet;
            }
        }
        $js .= \'<script type="text/javascript">var RedactorConfigurationSet = \' . $set . \';</script>\';

        // Instruct Fred that we offer a "Fredactor" function as "Redactor" RTE.
        $beforeRender = \'
    this.registerRTE("Redactor", Fredactor);
\';
        // Output it all. Woof.
        $modx->event->_output = [
            \'includes\' => $css.$js,
            \'beforeRender\' => $beforeRender,
            \'lexicons\' => [\'redactor:default\']
        ];
        return true;
}

return;',
    ),
  ),
  'e4bec26d599257413a0ad44de6357bd2' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextEditorRegister',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextEditorRegister',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'ee8f05959e55da0669862b0a058dc1b5' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVInputRenderList',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVInputRenderList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '8c6dfdabe751c2bb2b6897cf621b6275' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVInputPropertiesList',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVInputPropertiesList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'df2565ca0de14ac63961bc9c274ce449' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextEditorInit',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextEditorInit',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'b73bcc4c173801717be54e417f39d996' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnFileManagerFileRename',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnFileManagerFileRename',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '023d5db9cd6facae2cf5a6c00439aa71' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'ContentBlocks_RegisterInputs',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'ContentBlocks_RegisterInputs',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '5e04504eeadc2ec52c7b4e530c82f856' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'FredBeforeRender',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'FredBeforeRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);