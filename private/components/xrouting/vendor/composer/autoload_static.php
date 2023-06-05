<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6ad685a385e8e3aff904ed2cbabdef1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SEDAdigital\\XRouting\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SEDAdigital\\XRouting\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SEDAdigital\\XRouting\\Plugins\\Events\\OnContextRemove' => __DIR__ . '/../..' . '/src/Plugins/Events/OnContextRemove.php',
        'SEDAdigital\\XRouting\\Plugins\\Events\\OnContextSave' => __DIR__ . '/../..' . '/src/Plugins/Events/OnContextSave.php',
        'SEDAdigital\\XRouting\\Plugins\\Events\\OnHandleRequest' => __DIR__ . '/../..' . '/src/Plugins/Events/OnHandleRequest.php',
        'SEDAdigital\\XRouting\\Plugins\\Events\\OnSiteRefresh' => __DIR__ . '/../..' . '/src/Plugins/Events/OnSiteRefresh.php',
        'SEDAdigital\\XRouting\\Plugins\\Plugin' => __DIR__ . '/../..' . '/src/Plugins/Plugin.php',
        'SEDAdigital\\XRouting\\XRouting' => __DIR__ . '/../..' . '/src/XRouting.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6ad685a385e8e3aff904ed2cbabdef1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6ad685a385e8e3aff904ed2cbabdef1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6ad685a385e8e3aff904ed2cbabdef1::$classMap;

        }, null, ClassLoader::class);
    }
}
