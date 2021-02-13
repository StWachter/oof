<?php return array (
  '19b8808544d065d63fe6140b0b630636' => 
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
  '071f46d3e150e81d8bfdb1c6f06d956f' => 
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
  '14e28b424b1eaf8392977484a6f42694' => 
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
  '8c21624279f4c2be3ac1026c3145b265' => 
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
  'c9d38fab44e15ddc01d3a3c3dfaa1e46' => 
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
  'c943e506fe13f9f760da5e71000f314a' => 
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
  'c17a3414ba799d8466a65c8070ff7d87' => 
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
  'e700ff2bcddf86beab12fa0bd19612d7' => 
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
  '6625ef9e7fa5c754f694fd23d69de4ce' => 
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
  'eeed7830322abe84b2497cccf97de003' => 
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
  '7b39c0806ebbc668c16d9f7ef2aceb40' => 
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
  '2537742b7f37a6e00ca979abd8713b67' => 
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
  '334bf856fb8c10eff9223ddf9a15fa91' => 
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
  'a53f415bbd6dc0457d3da7841fc77838' => 
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
  '76f245cede7637e301b4d6ce20955e2e' => 
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
  '794b0ac028a714af04e42a7760b1493d' => 
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
  'c208e9f36598c8bb4043b11d2fdbe892' => 
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
  '2e23a76e859d1e0da06c56be5431921a' => 
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
  '8df691cb4190b93ae6c36767c2d27bb1' => 
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
  'f48c1f7850af0ca6716cd08afae77817' => 
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
  '6fe6438baf333028e6729ba8f011ee55' => 
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
  '2a686c4371be6e661f7f12bea902848c' => 
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
  '631d59f7af71f1b842e22b77693d99c3' => 
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
  '1ab10484c0ee8613ce53687d6a21d13a' => 
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
  '4824be47c1651dd327179e41def7b2ef' => 
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
  '033dddb847ff5c3f900399bdf8c7abf8' => 
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
  '2e9c11ca81db3ac27fed6d671fec2601' => 
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
  '0e3da39acb65822270663eba348a542d' => 
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
  '853b3a884b8180154913afe914139167' => 
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