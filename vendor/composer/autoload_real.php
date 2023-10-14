<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita68e4e2946d60aaf205fcd9b7e02581e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita68e4e2946d60aaf205fcd9b7e02581e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita68e4e2946d60aaf205fcd9b7e02581e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita68e4e2946d60aaf205fcd9b7e02581e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}