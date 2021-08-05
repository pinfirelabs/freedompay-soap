<?php

namespace FreedomPay\Freeway;

class ItemDiscounts
{

    /**
     * @var ArrayOfDiscountInfo $discounts
     */
    protected $discounts = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $tag
     */
    protected $tag = null;

    /**
     * @param int $id
     * @param string $tag
     */
    public function __construct($id, $tag)
    {
      $this->id = $id;
      $this->tag = $tag;
    }

    /**
     * @return ArrayOfDiscountInfo
     */
    public function getDiscounts()
    {
      return $this->discounts;
    }

    /**
     * @param ArrayOfDiscountInfo $discounts
     * @return \FreedomPay\Freeway\ItemDiscounts
     */
    public function setDiscounts($discounts)
    {
      $this->discounts = $discounts;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \FreedomPay\Freeway\ItemDiscounts
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
      return $this->tag;
    }

    /**
     * @param string $tag
     * @return \FreedomPay\Freeway\ItemDiscounts
     */
    public function setTag($tag)
    {
      $this->tag = $tag;
      return $this;
    }

}
