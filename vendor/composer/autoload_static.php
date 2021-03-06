<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69eda8a5fc834f65d2a50e0e23364291
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hosein\\Toaster\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hosein\\Toaster\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/Hosein/Toaster/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit69eda8a5fc834f65d2a50e0e23364291::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69eda8a5fc834f65d2a50e0e23364291::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit69eda8a5fc834f65d2a50e0e23364291::$classMap;

        }, null, ClassLoader::class);
    }
}
