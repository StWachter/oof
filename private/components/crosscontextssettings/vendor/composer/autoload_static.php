<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e41c7ce6703a7c9f307c1195229e87d
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TreehillStudio\\CrossContextsSettings\\' => 37,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TreehillStudio\\CrossContextsSettings\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TreehillStudio\\CrossContextsSettings\\CrossContextsSettings' => __DIR__ . '/../..' . '/src/CrossContextsSettings.php',
        'TreehillStudio\\CrossContextsSettings\\Processors\\ObjectCreateProcessor' => __DIR__ . '/../..' . '/src/Processors/ObjectCreateProcessor.php',
        'TreehillStudio\\CrossContextsSettings\\Processors\\ObjectGetListProcessor' => __DIR__ . '/../..' . '/src/Processors/ObjectGetListProcessor.php',
        'TreehillStudio\\CrossContextsSettings\\Processors\\ObjectGetProcessor' => __DIR__ . '/../..' . '/src/Processors/ObjectGetProcessor.php',
        'TreehillStudio\\CrossContextsSettings\\Processors\\ObjectProcessor' => __DIR__ . '/../..' . '/src/Processors/ObjectProcessor.php',
        'TreehillStudio\\CrossContextsSettings\\Processors\\ObjectRemoveProcessor' => __DIR__ . '/../..' . '/src/Processors/ObjectRemoveProcessor.php',
        'TreehillStudio\\CrossContextsSettings\\Processors\\ObjectUpdateProcessor' => __DIR__ . '/../..' . '/src/Processors/ObjectUpdateProcessor.php',
        'TreehillStudio\\CrossContextsSettings\\Processors\\Processor' => __DIR__ . '/../..' . '/src/Processors/Processor.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e41c7ce6703a7c9f307c1195229e87d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e41c7ce6703a7c9f307c1195229e87d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e41c7ce6703a7c9f307c1195229e87d::$classMap;

        }, null, ClassLoader::class);
    }
}
