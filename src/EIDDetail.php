<?php

namespace FreedomPay\Freeway;

class EIDDetail
{

    /**
     * @var string $discountKey
     */
    protected $discountKey = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $qty
     */
    protected $qty = null;

    /**
     * @var string $offset
     */
    protected $offset = null;

    /**
     * @var string $totalAmount
     */
    protected $totalAmount = null;

    /**
     * @param string $discountKey
     * @param string $code
     * @param string $qty
     * @param string $offset
     * @param string $totalAmount
     */
    public function __construct($discountKey, $code, $qty, $offset, $totalAmount)
    {
      $this->discountKey = $discountKey;
      $this->code = $code;
      $this->qty = $qty;
      $this->offset = $offset;
      $this->totalAmount = $totalAmount;
    }

    /**
     * @return string
     */
    public function getDiscountKey()
    {
      return $this->discountKey;
    }

    /**
     * @param string $discountKey
     * @return \FreedomPay\Freeway\EIDDetail
     */
    public function setDiscountKey($discountKey)
    {
      $this->discountKey = $discountKey;
      return $this;
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
     * @return \FreedomPay\Freeway\EIDDetail
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getQty()
    {
      return $this->qty;
    }

    /**
     * @param string $qty
     * @return \FreedomPay\Freeway\EIDDetail
     */
    public function setQty($qty)
    {
      $this->qty = $qty;
      return $this;
    }

    /**
     * @return string
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param string $offset
     * @return \FreedomPay\Freeway\EIDDetail
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotalAmount()
    {
      return $this->totalAmount;
    }

    /**
     * @param string $totalAmount
     * @return \FreedomPay\Freeway\EIDDetail
     */
    public function setTotalAmount($totalAmount)
    {
      $this->totalAmount = $totalAmount;
      return $this;
    }

}
