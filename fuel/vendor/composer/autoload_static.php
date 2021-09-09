<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e27e4f8484837b96346594e91a8e704
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'F' => 
        array (
            'Fuel\\Upload\\' => 12,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Fuel\\Upload\\' => 
        array (
            0 => __DIR__ . '/..' . '/fuelphp/upload/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e27e4f8484837b96346594e91a8e704::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e27e4f8484837b96346594e91a8e704::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7e27e4f8484837b96346594e91a8e704::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7e27e4f8484837b96346594e91a8e704::$classMap;

        }, null, ClassLoader::class);
    }
}
