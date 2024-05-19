<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98f12b7d2c7f2cf81459ac479fbdef13
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98f12b7d2c7f2cf81459ac479fbdef13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98f12b7d2c7f2cf81459ac479fbdef13::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98f12b7d2c7f2cf81459ac479fbdef13::$classMap;

        }, null, ClassLoader::class);
    }
}
