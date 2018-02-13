<?php

namespace GoldenCompany\CommerceBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\MappedSuperclass
*/
abstract class Product
{
    /**
    * @var string
    *
    * @ORM\Column(name="name", type="string", length=255)
    */
    protected $name;

    /**
    * @var string
    *
    * @ORM\Column(name="description", type="text", nullable=true)
    */
    protected $description;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="createdAt", type="datetime")
    */
    protected $createdAt;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
    */
    protected $updatedAt;

    /**
    * @var bool
    *
    * @ORM\Column(name="visible", type="boolean")
    */
    protected $visible = true;

    /**
    * @var bool
    *
    * @ORM\Column(name="enabled", type="boolean")
    */
    protected $enabled = true;

    /**
    * @var string
    *
    * @ORM\Column(name="basePrice", type="decimal", precision=10, scale=2, nullable=true)
    */
    protected $basePrice;

    /**
    * @var int
    *
    * @ORM\Column(name="stock", type="integer", nullable=true)
    */
    protected $stock;

    /**
    * @var string
    *
    * @ORM\Column(name="sku", type="string", length=255, nullable=true)
    */
    protected $sku;


    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
    * Set name
    *
    * @param string $name
    *
    * @return Product
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
    * Set description
    *
    * @param string $description
    *
    * @return Product
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
    * Set createdAt
    *
    * @param \DateTime $createdAt
    *
    * @return Product
    */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
    * Get createdAt
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
    * Set updatedAt
    *
    * @param \DateTime $updatedAt
    *
    * @return Product
    */
    public function seUpdateddAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
    * Get updatedAt
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
    * Set visible
    *
    * @param boolean $visible
    *
    * @return Product
    */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
    * Get visible
    *
    * @return bool
    */
    public function isVisible()
    {
        return $this->visible;
    }

    /**
    * Set enabled
    *
    * @param boolean $enabled
    *
    * @return Product
    */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
    * Get enabled
    *
    * @return bool
    */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
    * Set basePrice
    *
    * @param string $basePrice
    *
    * @return Product
    */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;

        return $this;
    }

    /**
    * Get basePrice
    *
    * @return string
    */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
    * Set stock
    *
    * @param integer $stock
    *
    * @return Product
    */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
    * Get stock
    *
    * @return int
    */
    public function getStock()
    {
        return $this->stock;
    }

    /**
    * Set sku
    *
    * @param string $sku
    *
    * @return Product
    */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
    * Get sku
    *
    * @return string
    */
    public function getSku()
    {
        return $this->sku;
    }
}
