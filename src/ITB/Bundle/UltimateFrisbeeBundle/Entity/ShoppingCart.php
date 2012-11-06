<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ITB\Bundle\UltimateFrisbeeBundle\Entity\ShoppingCart
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ITB\Bundle\UltimateFrisbeeBundle\Entity\ShoppingCartRepository")
 */
class ShoppingCart
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
     * @var integer $numberOfItems
     *
     * @ORM\Column(name="numberOfItems", type="integer")
     */
    private $numberOfItems;


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
     * Set numberOfItems
     *
     * @param integer $numberOfItems
     * @return ShoppingCart
     */
    public function setNumberOfItems($numberOfItems)
    {
        $this->numberOfItems = $numberOfItems;
    
        return $this;
    }

    /**
     * Get numberOfItems
     *
     * @return integer 
     */
    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }
}
