<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Entity;

use Herzult\Bundle\ForumBundle\Entity\Post as BasePost;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Herzult\Bundle\ForumBundle\Entity\PostRepository")
 */
class Post extends BasePost
{
	/**
	 * @ORM\ManyToOne(targetEntity="Topic")
	 */
	protected $topic;
	
    /**
     * @ORM\ReferenceOne(targetEntity="User")
     */
    private $author;

    public function setAuthor(User $user)
    {
        $this->author = $user;
    }

    public function getAuthor()
    {
        return $this->author;
    } 
}
