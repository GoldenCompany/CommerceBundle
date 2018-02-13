<?php

namespace GoldenCompany\CommerceBundle\Model;

use AppBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use FOS\UserBundle\Model\UserInterface;

/**
 * @ORM\MappedSuperclass
 */
abstract class Order
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="orderedAt", type="datetime", nullable=true)
     */
    protected $orderedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="totalPrice", type="decimal", precision=10, scale=2, nullable=true)
     */
    protected $totalPrice;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\OneToMany(targetEntity="OrderDetail", mappedBy="order", cascade={"persist", "remove"})
     */
    protected $orderDetails;

    public function __construct()
    {
        $this->orderedAt = new \DateTime();
        $this->orderDetails = new ArrayCollection();
    }

    /**
     * Set orderedAt
     *
     * @param \DateTime $orderedAt
     *
     * @return $this
     */
    public function setOrderedAt($orderedAt)
    {
        $this->orderedAt = $orderedAt;

        return $this;
    }

    /**
     * Get orderedAt
     *
     * @return \DateTime
     */
    public function getOrderedAt()
    {
        return $this->orderedAt;
    }

    /**
     * Set totalPrice
     *
     * @param string $totalPrice
     *
     * @return $this
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set user
     *
     * @param UserInterface $user
     *
     * @return $this
     */
    public function setUser(UserInterface $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    public function getOrderDetails()
    {
        return $this->orderDetails;
    }
}
