<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  dependencies.php - Part of the statement project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;
use Psr\Container\ContainerInterface;

$container = $app->getContainer();

// Register the entity manager in the container.
$container[EntityManagerInterface::class] = function(ContainerInterface $container) {
    $settings      = $container->get('settings');
    $configuration = Setup::createAnnotationMetadataConfiguration(
        $settings['doctrine']['meta']['entity_paths'],
        $settings['doctrine']['meta']['dev_mode'],
        $settings['doctrine']['meta']['proxy_dir']
    );

    return EntityManager::create($settings['doctrine']['connection'], $configuration);
};

