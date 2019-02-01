<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f15c77e1ca5c39306c01fdb45974d59
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'D' => 
        array (
            'DIMA\\WSPACE\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'DIMA\\WSPACE\\' => 
        array (
            0 => __DIR__ . '/../..' . '/private',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f15c77e1ca5c39306c01fdb45974d59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f15c77e1ca5c39306c01fdb45974d59::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
