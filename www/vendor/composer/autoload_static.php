<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit790e89dd3f5738b2ac3ed5e1e6ff0d33
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit790e89dd3f5738b2ac3ed5e1e6ff0d33::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit790e89dd3f5738b2ac3ed5e1e6ff0d33::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
