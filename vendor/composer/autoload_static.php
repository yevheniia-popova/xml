<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a9d11be846c38574cd3f6096b0eb479
{
    public static $prefixLengthsPsr4 = array(
        'P' =>
            array(
                'Parse\\' => 6,
            ),
        'G' =>
            array(
                'Generate\\' => 9,
            ),
    );

    public static $prefixDirsPsr4 = array(
        'Parse\\' =>
            array(
                0 => __DIR__ . '/../..' . '/src/EvgeniiaPopova/Parse',
            ),
        'Generate\\' =>
            array(
                0 => __DIR__ . '/../..' . '/src/EvgeniiaPopova/Generate',
            ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PFBC' => 
            array (
                0 => __DIR__ . '/..' . '/pfbc/pfbc',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a9d11be846c38574cd3f6096b0eb479::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a9d11be846c38574cd3f6096b0eb479::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6a9d11be846c38574cd3f6096b0eb479::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
