<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35ed0ab4dca22a8195ba56bb63ee44c3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Akill\\Apriori\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Akill\\Apriori\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35ed0ab4dca22a8195ba56bb63ee44c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35ed0ab4dca22a8195ba56bb63ee44c3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
