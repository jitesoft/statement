<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ApiController.php - Part of the statement project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Statement\Controllers\API;

use Doctrine\ORM\EntityManagerInterface;
use Psr\Container\ContainerInterface;

class ApiController {

    protected $entityManager;

    public function __construct(ContainerInterface $container) {
        $this->entityManager = $container->get(EntityManagerInterface::class);
    }
}
