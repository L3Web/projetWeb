<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bb8bee27b120bf877b6b7e73dda69f2
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bb8bee27b120bf877b6b7e73dda69f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bb8bee27b120bf877b6b7e73dda69f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2bb8bee27b120bf877b6b7e73dda69f2::$classMap;

        }, null, ClassLoader::class);
    }
}