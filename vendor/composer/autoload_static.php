<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9c48147e281d343369f00bfef662b65
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita9c48147e281d343369f00bfef662b65::$classMap;

        }, null, ClassLoader::class);
    }
}