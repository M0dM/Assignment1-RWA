<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ITB\Bundle\UltimateFrisbeeBundle\Entity\Item
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ITB\Bundle\UltimateFrisbeeBundle\Entity\ItemRepository")
 */
class Item
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var users
     * 
     * @ORM\ManyToMany(targetEntity="User", inversedBy="items")
     * @ORM\JoinTable(name="userItems",
     * 		joinColumns={@ORM\JoinColumn(name="item_id", referencedColumnName="id", nullable=true)},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     *      )
     */
    private $users;
    
    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string $image
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;
    
    /**
     * @var float $image
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return item
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set price
     *
     * @param float $price
     * @return item
     */
    public function setPrice($price)
    {
    	$this->price = $price;
    
    	return $this;
    }
    
    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
    	return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return item
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return item
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Set users
     *
     * @return item
     */
    public function setUsers($users)
    {
    	$this->users = $users;
    
    	return $this;
    }
    
    /**
     * Get users
     *
     */
    public function getUsers()
    {
    	return $this->users;
    }
}
