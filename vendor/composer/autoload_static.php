<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita020581b557064692603b93050cc6713
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Engine\\DI\\' => 10,
            'Engine\\' => 7,
        ),
        'C' => 
        array (
            'Cms\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Engine\\DI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine/DI',
        ),
        'Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
        'Cms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cms',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita020581b557064692603b93050cc6713::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita020581b557064692603b93050cc6713::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}