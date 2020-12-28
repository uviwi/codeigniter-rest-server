<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee86561807037403bc98c32d616aab54
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chriskacerguis\\RestServer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chriskacerguis\\RestServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee86561807037403bc98c32d616aab54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee86561807037403bc98c32d616aab54::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
