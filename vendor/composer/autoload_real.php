<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite6cd6b423967468f8b9ae3adaab169e6
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

        spl_autoload_register(array('ComposerAutoloaderInite6cd6b423967468f8b9ae3adaab169e6', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite6cd6b423967468f8b9ae3adaab169e6', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite6cd6b423967468f8b9ae3adaab169e6::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
