<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc3f3bb8ff5ae7517b28981a56c8ca9e
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

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc3f3bb8ff5ae7517b28981a56c8ca9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc3f3bb8ff5ae7517b28981a56c8ca9e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcc3f3bb8ff5ae7517b28981a56c8ca9e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
