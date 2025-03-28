<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit342bee2767cacefc36b2099751d19d17
{
    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'ysx\\recipe\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ysx\\recipe\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit342bee2767cacefc36b2099751d19d17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit342bee2767cacefc36b2099751d19d17::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit342bee2767cacefc36b2099751d19d17::$classMap;

        }, null, ClassLoader::class);
    }
}
