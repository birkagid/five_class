<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69abd158b1cda090cda1c46f6a9ee79d
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Birka\\First\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Birka\\First\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Birka\\First\\Car' => __DIR__ . '/../..' . '/src/Car.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit69abd158b1cda090cda1c46f6a9ee79d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69abd158b1cda090cda1c46f6a9ee79d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit69abd158b1cda090cda1c46f6a9ee79d::$classMap;

        }, null, ClassLoader::class);
    }
}
