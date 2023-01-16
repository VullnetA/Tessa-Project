<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitebc35a31a1dc8c5d4a4bbc24ee7ea9f7
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

        spl_autoload_register(array('ComposerAutoloaderInitebc35a31a1dc8c5d4a4bbc24ee7ea9f7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitebc35a31a1dc8c5d4a4bbc24ee7ea9f7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitebc35a31a1dc8c5d4a4bbc24ee7ea9f7::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitebc35a31a1dc8c5d4a4bbc24ee7ea9f7::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequireebc35a31a1dc8c5d4a4bbc24ee7ea9f7($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequireebc35a31a1dc8c5d4a4bbc24ee7ea9f7($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
