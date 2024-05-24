<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfeb1966f76701e83282dc325b6d49e09
{
    public static $files = array (
        '48f9c58f5262369602b335de84fbb673' => __DIR__ . '/../..' . '/app/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\models\\' => 11,
            'app\\classes\\' => 12,
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'app\\classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/classes',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\classes\\Routes' => __DIR__ . '/../..' . '/app/classes/Routes.php',
        'app\\classes\\Uri' => __DIR__ . '/../..' . '/app/classes/Uri.php',
        'app\\models\\Connection' => __DIR__ . '/../..' . '/app/models/Connection.php',
        'app\\models\\Models' => __DIR__ . '/../..' . '/app/models/Models.php',
        'app\\models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfeb1966f76701e83282dc325b6d49e09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfeb1966f76701e83282dc325b6d49e09::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfeb1966f76701e83282dc325b6d49e09::$classMap;

        }, null, ClassLoader::class);
    }
}
