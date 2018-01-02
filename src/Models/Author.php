<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Author.php - Part of the statement project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Statement\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Author
 *
 * @ORM\Entity
 * @ORM\Table(name="author")
 */
class Author {

    /**
     * @var int
     * @ORM\GeneratedValue
     * @ORM\Column(name="id", type="integer")
     */
    protected $id;

}
