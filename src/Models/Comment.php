<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  Comment.php - Part of the statement project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Statement\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Comment
 * @ORM\Entity
 * @ORM\Table(name="comments")
 */
class Comment {

    /**
     * @var
     */
    protected $author;

    protected $parent;

    protected $text;

    protected $postTime;

    protected $removed;

    protected $enabled;

}
