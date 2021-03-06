<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3296adf327a38f1bc6fef14e92c9d443
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3296adf327a38f1bc6fef14e92c9d443::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3296adf327a38f1bc6fef14e92c9d443::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3296adf327a38f1bc6fef14e92c9d443::$classMap;

        }, null, ClassLoader::class);
    }
}
