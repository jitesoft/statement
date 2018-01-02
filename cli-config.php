<?php
require_once 'src/bootstrap.php';

use Symfony\Component\Console\Application;

$em = $app->getContainer()->get(\Doctrine\ORM\EntityManagerInterface::class);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));

$cli = new Application('Doctrine-CLI', \Doctrine\ORM\Version::VERSION);
$cli->setHelperSet($helperSet);
$cli->run(null);
