<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6390db5670a4fcd974d7cd2809814523
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Braian\\BCourse\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Braian\\BCourse\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6390db5670a4fcd974d7cd2809814523::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6390db5670a4fcd974d7cd2809814523::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6390db5670a4fcd974d7cd2809814523::$classMap;

        }, null, ClassLoader::class);
    }
}
