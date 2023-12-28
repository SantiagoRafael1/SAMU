<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5890bae92dcecdc71547207f9e468312
{
    public static $files = array (
        '2a6c393c42b39875f48178b72bab9cc8' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5890bae92dcecdc71547207f9e468312::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5890bae92dcecdc71547207f9e468312::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5890bae92dcecdc71547207f9e468312::$classMap;

        }, null, ClassLoader::class);
    }
}
