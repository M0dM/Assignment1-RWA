<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Entity;

use Herzult\Bundle\ForumBundle\Entity\Category as BaseCategory;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Herzult\Bundle\ForumBundle\Entity\CategoryRepository")
 */
class Category extends BaseCategory
{
   
}
