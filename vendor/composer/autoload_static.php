<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25a6abbf08174fdb47bb94a5af779c4b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phpml\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phpml\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-ai/php-ml/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25a6abbf08174fdb47bb94a5af779c4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25a6abbf08174fdb47bb94a5af779c4b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit25a6abbf08174fdb47bb94a5af779c4b::$classMap;

        }, null, ClassLoader::class);
    }
}
