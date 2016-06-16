<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
// app/autoloader.php
// ...
$loader->registerNamespaces(array(
// ...
'Doctrine\\Common\\DataFixtures'    => __DIR__.'/../vendor/doctrine-fixtures/lib',
'Doctrine\\Common'                  => __DIR__.'/../vendor/doctrine-common/lib',
'Doctrine\\DBAL\\Migrations' 		=> __DIR__.'/../vendor/doctrine-migrations/lib',
'Doctrine\\DBAL'            		=> __DIR__.'/../vendor/doctrine-dbal/lib',// ...
));
