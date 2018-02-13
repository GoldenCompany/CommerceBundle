<?php

namespace GoldenCompany\CommerceBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\MappedSuperclass
*/
abstract class OrderDetail
{
    /**
    * @var int
    *
    * @ORM\Column(name="quantity", type="integer", nullable=true)
    */
    protected $quantity;

    /**
    * @var string
    *
    * @ORM\Column(name="price", type="decimal", precision=10, scale=2, nullable=true)
    */
    protected $price;

    /**
    * @var string
    *
    * @ORM\Column(name="unitPrice", type="decimal", precision=10, scale=2, nullable=true)
    */
    protected $unitPrice;

    /**
    * @ORM\ManyToOne(targetEntity="Product")
    * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
    */
    protected $product;

    /**
    * @ORM\ManyToOne(targetEntity="Order", inversedBy="orderDetails")
    * @ORM\JoinColumn(name="order_id", referencedColumnName="id")
    */
    protected $order;

    /**
    * Set quantity
    *
    * @param integer $quantity
    *
    * @return OrderDetail
    */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
    * Get quantity
    *
    * @return int
    */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
    * Set price
    *
    * @param string $price
    *
    * @return OrderDetail
    */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
    * Get price
    *
    * @return string
    */
    public function getPrice()
    {
        return $this->price;
    }

    /**
    * Set unitPrice
    *
    * @param string $unitPrice
    *
    * @return OrderDetail
    */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
    * Get unitPrice
    *
    * @return string
    */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
    * Set product
    *
    * @param Product $product
    *
    * @return OrderDetail
    */
    public function setProduct(Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
    * Get product
    *
    * @return Product
    */
    public function getProduct()
    {
        return $this->product;
    }

    /**
    * Set order
    *
    * @param Order $order
    *
    * @return OrderDetail
    */
    public function setOrder(Order $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
    * Get order
    *
    * @return Order
    */
    public function getOrder()
    {
        return $this->order;
    }
}
