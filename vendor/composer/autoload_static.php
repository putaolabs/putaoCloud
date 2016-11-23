<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82fbb7d704f4843d86a950c1a42c48fa
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PutaoCloud\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PutaoCloud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/PutaoCloud/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82fbb7d704f4843d86a950c1a42c48fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82fbb7d704f4843d86a950c1a42c48fa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
