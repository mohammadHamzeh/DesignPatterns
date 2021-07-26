<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit668831be93eaa12ac5e1633668fe94df
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
            0 => __DIR__ . '/../..',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit668831be93eaa12ac5e1633668fe94df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit668831be93eaa12ac5e1633668fe94df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit668831be93eaa12ac5e1633668fe94df::$classMap;

        }, null, ClassLoader::class);
    }
}
