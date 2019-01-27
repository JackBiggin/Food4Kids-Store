<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec83acd3be8c2216eecc11a02f7bf0d3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec83acd3be8c2216eecc11a02f7bf0d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec83acd3be8c2216eecc11a02f7bf0d3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
