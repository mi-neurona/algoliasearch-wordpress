<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26c58fe7c83f0c7fa3644c2e84fde967
{
    public static $files = array (
        'de4a761d5c316121535e53748ea67c55' => __DIR__ . '/..' . '/algolia/php-dom-parser/lib/simple_html_dom.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Algolia\\Test\\' => 13,
            'Algolia\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Algolia\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/algolia/php-dom-parser/tests',
        ),
        'Algolia\\' => 
        array (
            0 => __DIR__ . '/..' . '/algolia/php-dom-parser/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'A' => 
        array (
            'AlgoliaSearch\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/tests',
            ),
            'AlgoliaSearch' => 
            array (
                0 => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'WP_Async_Task' => __DIR__ . '/..' . '/techcrunch/wp-async-task/wp-async-task.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26c58fe7c83f0c7fa3644c2e84fde967::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26c58fe7c83f0c7fa3644c2e84fde967::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit26c58fe7c83f0c7fa3644c2e84fde967::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit26c58fe7c83f0c7fa3644c2e84fde967::$classMap;

        }, null, ClassLoader::class);
    }
}
