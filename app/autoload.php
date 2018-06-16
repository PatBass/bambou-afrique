<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

error_reporting(error_reporting() & ~E_USER_DEPRECATED);

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

//$loader->add('MPDF', __DIR__.'/../vendor/pdf/MPDF57');



// intl
if (!function_exists('intl_get_error_code')) {
    require_once __DIR__.'/../vendor/symfony/symfony/src/Symfony/Component/Locale/Stub/StubIntl.php';

    $loader
        ->add('', __DIR__.'/../vendor/symfony/symfony/src/Symfony/Component/Locale/Stub')
        ->add('MPDF', __DIR__.'/../vendor/pdf/MPDF57') //Inclut la librairie
    ;
}




AnnotationRegistry::registerLoader(array($loader, 'loadClass'));


require __DIR__.'/../vendor/pdf/MPDF57/mpdf.php';

return $loader;
