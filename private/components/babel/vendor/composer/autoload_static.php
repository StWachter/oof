<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a56eb65fc175630c37b93b11e40b8d9
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mikrobi\\Babel\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mikrobi\\Babel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'mikrobi\\Babel\\Babel' => __DIR__ . '/../..' . '/src/Babel.php',
        'mikrobi\\Babel\\Helper\\Parse' => __DIR__ . '/../..' . '/src/Helper/Parse.php',
        'mikrobi\\Babel\\LanguageSubtagRegistry\\LanguageSubtagRegistry' => __DIR__ . '/../..' . '/src/LanguageSubtagRegistry/LanguageSubtagRegistry.php',
        'mikrobi\\Babel\\Plugins\\Events\\OnContextRemove' => __DIR__ . '/../..' . '/src/Plugins/Events/OnContextRemove.php',
        'mikrobi\\Babel\\Plugins\\Events\\OnDocFormPrerender' => __DIR__ . '/../..' . '/src/Plugins/Events/OnDocFormPrerender.php',
        'mikrobi\\Babel\\Plugins\\Events\\OnDocFormSave' => __DIR__ . '/../..' . '/src/Plugins/Events/OnDocFormSave.php',
        'mikrobi\\Babel\\Plugins\\Events\\OnEmptyTrash' => __DIR__ . '/../..' . '/src/Plugins/Events/OnEmptyTrash.php',
        'mikrobi\\Babel\\Plugins\\Events\\OnResourceDuplicate' => __DIR__ . '/../..' . '/src/Plugins/Events/OnResourceDuplicate.php',
        'mikrobi\\Babel\\Plugins\\Events\\OnResourceSort' => __DIR__ . '/../..' . '/src/Plugins/Events/OnResourceSort.php',
        'mikrobi\\Babel\\Plugins\\Events\\OnSiteRefresh' => __DIR__ . '/../..' . '/src/Plugins/Events/OnSiteRefresh.php',
        'mikrobi\\Babel\\Plugins\\Plugin' => __DIR__ . '/../..' . '/src/Plugins/Plugin.php',
        'mikrobi\\Babel\\Processors\\ObjectCreateProcessor' => __DIR__ . '/../..' . '/src/Processors/ObjectCreateProcessor.php',
        'mikrobi\\Babel\\Processors\\ObjectGetListProcessor' => __DIR__ . '/../..' . '/src/Processors/ObjectGetListProcessor.php',
        'mikrobi\\Babel\\Processors\\ObjectProcessor' => __DIR__ . '/../..' . '/src/Processors/ObjectProcessor.php',
        'mikrobi\\Babel\\Processors\\ObjectRemoveProcessor' => __DIR__ . '/../..' . '/src/Processors/ObjectRemoveProcessor.php',
        'mikrobi\\Babel\\Processors\\ObjectSortindexProcessor' => __DIR__ . '/../..' . '/src/Processors/ObjectSortindexProcessor.php',
        'mikrobi\\Babel\\Processors\\ObjectUpdateProcessor' => __DIR__ . '/../..' . '/src/Processors/ObjectUpdateProcessor.php',
        'mikrobi\\Babel\\Processors\\Processor' => __DIR__ . '/../..' . '/src/Processors/Processor.php',
        'mikrobi\\Babel\\Snippets\\BabelLinks' => __DIR__ . '/../..' . '/src/Snippets/BabelLinks.php',
        'mikrobi\\Babel\\Snippets\\BabelTranslation' => __DIR__ . '/../..' . '/src/Snippets/BabelTranslation.php',
        'mikrobi\\Babel\\Snippets\\Snippet' => __DIR__ . '/../..' . '/src/Snippets/Snippet.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a56eb65fc175630c37b93b11e40b8d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a56eb65fc175630c37b93b11e40b8d9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a56eb65fc175630c37b93b11e40b8d9::$classMap;

        }, null, ClassLoader::class);
    }
}