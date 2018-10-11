<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit895aa0d6dda95369cd116768fb44f388
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\UserController' => __DIR__ . '/../..' . '/app/controllers/UserController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Core\\Task' => __DIR__ . '/../..' . '/core/Task.php',
        'App\\Models\\Project' => __DIR__ . '/../..' . '/app/models/Project.php',
        'ComposerAutoloaderInit895aa0d6dda95369cd116768fb44f388' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit895aa0d6dda95369cd116768fb44f388' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Post' => __DIR__ . '/../..' . '/arrays/index.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/database/Request.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit895aa0d6dda95369cd116768fb44f388::$classMap;

        }, null, ClassLoader::class);
    }
}
