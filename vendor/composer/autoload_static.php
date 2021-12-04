<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c26f2da36fba09741f3c7696f7ca9bb
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c26f2da36fba09741f3c7696f7ca9bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c26f2da36fba09741f3c7696f7ca9bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c26f2da36fba09741f3c7696f7ca9bb::$classMap;

        }, null, ClassLoader::class);
    }
}
