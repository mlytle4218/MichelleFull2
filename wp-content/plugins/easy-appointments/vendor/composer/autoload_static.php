<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6454aa61d36164254036b36c455b0d68
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jaybizzle\\CrawlerDetect\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jaybizzle\\CrawlerDetect\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'x' => 
        array (
            'xrstf\\Composer52' => 
            array (
                0 => __DIR__ . '/..' . '/xrstf/composer-php52/lib',
            ),
        ),
        't' => 
        array (
            'tad_DI52_' => 
            array (
                0 => __DIR__ . '/..' . '/lucatume/di52/src',
            ),
        ),
    );

    public static $classMap = array (
        'EAAdminPanel' => __DIR__ . '/../..' . '/src/admin.php',
        'EAAjax' => __DIR__ . '/../..' . '/src/ajax.php',
        'EAAppointmentFields' => __DIR__ . '/../..' . '/src/fields/appointment.php',
        'EADBModels' => __DIR__ . '/../..' . '/src/dbmodels.php',
        'EADateTime' => __DIR__ . '/../..' . '/src/datetime.php',
        'EAFrontend' => __DIR__ . '/../..' . '/src/frontend.php',
        'EAInstallTools' => __DIR__ . '/../..' . '/src/install.php',
        'EALogic' => __DIR__ . '/../..' . '/src/logic.php',
        'EAMail' => __DIR__ . '/../..' . '/src/mail.php',
        'EAMetaFields' => __DIR__ . '/../..' . '/src/metafields.php',
        'EAOptions' => __DIR__ . '/../..' . '/src/options.php',
        'EAReport' => __DIR__ . '/../..' . '/src/report.php',
        'EATableColumns' => __DIR__ . '/../..' . '/src/fields/tablecolumns.php',
        'EAUninstallTools' => __DIR__ . '/../..' . '/src/uninstall.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6454aa61d36164254036b36c455b0d68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6454aa61d36164254036b36c455b0d68::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6454aa61d36164254036b36c455b0d68::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6454aa61d36164254036b36c455b0d68::$classMap;

        }, null, ClassLoader::class);
    }
}
