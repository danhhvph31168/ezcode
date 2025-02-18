<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2491422999e753f1bda02a0e3e173473
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'D' => 
        array (
            'Dell\\Codephp\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'Dell\\Codephp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2491422999e753f1bda02a0e3e173473::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2491422999e753f1bda02a0e3e173473::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2491422999e753f1bda02a0e3e173473::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2491422999e753f1bda02a0e3e173473::$classMap;

        }, null, ClassLoader::class);
    }
}
