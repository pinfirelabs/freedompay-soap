<?php

namespace FreedomPay\Freeway;

class DiscountReply
{

    /**
     * @var int $reasonCode
     */
    protected $reasonCode = null;

    /**
     * @var string $requestDateTime
     */
    protected $requestDateTime = null;

    /**
     * @var string $discountKey
     */
    protected $discountKey = null;

    /**
     * @var ArrayOfDiscountMeta $discounts
     */
    protected $discounts = null;

    /**
     * @var ArrayOfDiscountInfo $invoiceDiscounts
     */
    protected $invoiceDiscounts = null;

    /**
     * @var ArrayOfItemDiscounts $items
     */
    protected $items = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getReasonCode()
    {
      return $this->reasonCode;
    }

    /**
     * @param int $reasonCode
     * @return \FreedomPay\Freeway\DiscountReply
     */
    public function setReasonCode($reasonCode)
    {
      $this->reasonCode = $reasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestDateTime()
    {
      return $this->requestDateTime;
    }

    /**
     * @param string $requestDateTime
     * @return \FreedomPay\Freeway\DiscountReply
     */
    public function setRequestDateTime($requestDateTime)
    {
      $this->requestDateTime = $requestDateTime;
      return $this;
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
     * @return \FreedomPay\Freeway\DiscountReply
     */
    public function setDiscountKey($discountKey)
    {
      $this->discountKey = $discountKey;
      return $this;
    }

    /**
     * @return ArrayOfDiscountMeta
     */
    public function getDiscounts()
    {
      return $this->discounts;
    }

    /**
     * @param ArrayOfDiscountMeta $discounts
     * @return \FreedomPay\Freeway\DiscountReply
     */
    public function setDiscounts($discounts)
    {
      $this->discounts = $discounts;
      return $this;
    }

    /**
     * @return ArrayOfDiscountInfo
     */
    public function getInvoiceDiscounts()
    {
      return $this->invoiceDiscounts;
    }

    /**
     * @param ArrayOfDiscountInfo $invoiceDiscounts
     * @return \FreedomPay\Freeway\DiscountReply
     */
    public function setInvoiceDiscounts($invoiceDiscounts)
    {
      $this->invoiceDiscounts = $invoiceDiscounts;
      return $this;
    }

    /**
     * @return ArrayOfItemDiscounts
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param ArrayOfItemDiscounts $items
     * @return \FreedomPay\Freeway\DiscountReply
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

}
