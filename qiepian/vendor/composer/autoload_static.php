<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd800852fdf49010c53c3d01de2910906
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Overtrue\\Pinyin\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Overtrue\\Pinyin\\' => 
        array (
            0 => __DIR__ . '/..' . '/overtrue/pinyin/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd800852fdf49010c53c3d01de2910906::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd800852fdf49010c53c3d01de2910906::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
