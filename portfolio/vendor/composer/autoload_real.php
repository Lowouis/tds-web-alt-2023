<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita9d08e95b034e9c1519c1ae6c90f9bd5
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInita9d08e95b034e9c1519c1ae6c90f9bd5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita9d08e95b034e9c1519c1ae6c90f9bd5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita9d08e95b034e9c1519c1ae6c90f9bd5::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
