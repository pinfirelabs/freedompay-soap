<?php

namespace FreedomPay\Freeway;

class DiscountMeta
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $desc
     */
    protected $desc = null;

    /**
     * @var string $sponsor
     */
    protected $sponsor = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $pointCost
     */
    protected $pointCost = null;

    /**
     * @var string $discountLimit
     */
    protected $discountLimit = null;

    /**
     * @param string $code
     * @param string $desc
     * @param string $sponsor
     * @param string $type
     * @param string $pointCost
     * @param string $discountLimit
     */
    public function __construct($code, $desc, $sponsor, $type, $pointCost, $discountLimit)
    {
      $this->code = $code;
      $this->desc = $desc;
      $this->sponsor = $sponsor;
      $this->type = $type;
      $this->pointCost = $pointCost;
      $this->discountLimit = $discountLimit;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \FreedomPay\Freeway\DiscountMeta
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDesc()
    {
      return $this->desc;
    }

    /**
     * @param string $desc
     * @return \FreedomPay\Freeway\DiscountMeta
     */
    public function setDesc($desc)
    {
      $this->desc = $desc;
      return $this;
    }

    /**
     * @return string
     */
    public function getSponsor()
    {
      return $this->sponsor;
    }

    /**
     * @param string $sponsor
     * @return \FreedomPay\Freeway\DiscountMeta
     */
    public function setSponsor($sponsor)
    {
      $this->sponsor = $sponsor;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \FreedomPay\Freeway\DiscountMeta
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointCost()
    {
      return $this->pointCost;
    }

    /**
     * @param string $pointCost
     * @return \FreedomPay\Freeway\DiscountMeta
     */
    public function setPointCost($pointCost)
    {
      $this->pointCost = $pointCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountLimit()
    {
      return $this->discountLimit;
    }

    /**
     * @param string $discountLimit
     * @return \FreedomPay\Freeway\DiscountMeta
     */
    public function setDiscountLimit($discountLimit)
    {
      $this->discountLimit = $discountLimit;
      return $this;
    }

}
