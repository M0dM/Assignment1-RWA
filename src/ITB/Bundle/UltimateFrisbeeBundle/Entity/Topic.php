<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Entity;

use Herzult\Bundle\ForumBundle\Entity\Topic as BaseTopic;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Herzult\Bundle\ForumBundle\Entity\TopicRepository")
 */
class Topic extends BaseTopic
{
	/**
	 * @ORM\ManyToOne(targetEntity="Category")
	 */
	protected $category;
	
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
