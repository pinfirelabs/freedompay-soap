<?php

namespace FreedomPay\Freeway;

class DiscountInfo
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $chainGroup
     */
    protected $chainGroup = null;

    /**
     * @var string $qtyLimit
     */
    protected $qtyLimit = null;

    /**
     * @var string $qtyOffset
     */
    protected $qtyOffset = null;

    /**
     * @var string $forceUnitPrice
     */
    protected $forceUnitPrice = null;

    /**
     * @var string $discfix
     */
    protected $discfix = null;

    /**
     * @var string $discpct
     */
    protected $discpct = null;

    /**
     * @var string $disclimit
     */
    protected $disclimit = null;

    /**
     * @var string $scale
     */
    protected $scale = null;

    /**
     * @var string $each
     */
    protected $each = null;

    /**
     * @var string $total
     */
    protected $total = null;

    /**
     * @param string $code
     * @param string $chainGroup
     * @param string $qtyLimit
     * @param string $qtyOffset
     * @param string $forceUnitPrice
     * @param string $discfix
     * @param string $discpct
     * @param string $disclimit
     * @param string $scale
     * @param string $each
     * @param string $total
     */
    public function __construct($code, $chainGroup, $qtyLimit, $qtyOffset, $forceUnitPrice, $discfix, $discpct, $disclimit, $scale, $each, $total)
    {
      $this->code = $code;
      $this->chainGroup = $chainGroup;
      $this->qtyLimit = $qtyLimit;
      $this->qtyOffset = $qtyOffset;
      $this->forceUnitPrice = $forceUnitPrice;
      $this->discfix = $discfix;
      $this->discpct = $discpct;
      $this->disclimit = $disclimit;
      $this->scale = $scale;
      $this->each = $each;
      $this->total = $total;
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
     * @return \FreedomPay\Freeway\DiscountInfo
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getChainGroup()
    {
      return $this->chainGroup;
    }

    /**
     * @param string $chainGroup
     * @return \FreedomPay\Freeway\DiscountInfo
     */
    public function setChainGroup($chainGroup)
    {
      $this->chainGroup = $chainGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getQtyLimit()
    {
      return $this->qtyLimit;
    }

    /**
     * @param string $qtyLimit
     * @return \FreedomPay\Freeway\DiscountInfo
     */
    public function setQtyLimit($qtyLimit)
    {
      $this->qtyLimit = $qtyLimit;
      return $this;
    }

    /**
     * @return string
     */
    public function getQtyOffset()
    {
      return $this->qtyOffset;
    }

    /**
     * @param string $qtyOffset
     * @return \FreedomPay\Freeway\DiscountInfo
     */
    public function setQtyOffset($qtyOffset)
    {
      $this->qtyOffset = $qtyOffset;
      return $this;
    }

    /**
     * @return string
     */
    public function getForceUnitPrice()
    {
      return $this->forceUnitPrice;
    }

    /**
     * @param string $forceUnitPrice
     * @return \FreedomPay\Freeway\DiscountInfo
     */
    public function setForceUnitPrice($forceUnitPrice)
    {
      $this->forceUnitPrice = $forceUnitPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscfix()
    {
      return $this->discfix;
    }

    /**
     * @param string $discfix
     * @return \FreedomPay\Freeway\DiscountInfo
     */
    public function setDiscfix($discfix)
    {
      $this->discfix = $discfix;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscpct()
    {
      return $this->discpct;
    }

    /**
     * @param string $discpct
     * @return \FreedomPay\Freeway\DiscountInfo
     */
    public function setDiscpct($discpct)
    {
      $this->discpct = $discpct;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisclimit()
    {
      return $this->disclimit;
    }

    /**
     * @param string $disclimit
     * @return \FreedomPay\Freeway\DiscountInfo
     */
    public function setDisclimit($disclimit)
    {
      $this->disclimit = $disclimit;
      return $this;
    }

    /**
     * @return string
     */
    public function getScale()
    {
      return $this->scale;
    }

    /**
     * @param string $scale
     * @return \FreedomPay\Freeway\DiscountInfo
     */
    public function setScale($scale)
    {
      $this->scale = $scale;
      return $this;
    }

    /**
     * @return string
     */
    public function getEach()
    {
      return $this->each;
    }

    /**
     * @param string $each
     * @return \FreedomPay\Freeway\DiscountInfo
     */
    public function setEach($each)
    {
      $this->each = $each;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param string $total
     * @return \FreedomPay\Freeway\DiscountInfo
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

}
