<?php

namespace FreedomPay\Freeway;

class InvoiceHeader
{

    /**
     * @var string $invoiceNumber
     */
    protected $invoiceNumber = null;

    /**
     * @var string $invoiceDate
     */
    protected $invoiceDate = null;

    /**
     * @var string $merchantDescriptor
     */
    protected $merchantDescriptor = null;

    /**
     * @var string $merchantDescriptorContact
     */
    protected $merchantDescriptorContact = null;

    /**
     * @var string $merchantDescriptorUrl
     */
    protected $merchantDescriptorUrl = null;

    /**
     * @var string $purchaserCode
     */
    protected $purchaserCode = null;

    /**
     * @var string $purchaserOrderDate
     */
    protected $purchaserOrderDate = null;

    /**
     * @var string $goodsIndicator
     */
    protected $goodsIndicator = null;

    /**
     * @var string $customerPO
     */
    protected $customerPO = null;

    /**
     * @var string $productCodeStandard
     */
    protected $productCodeStandard = null;

    /**
     * @var string $eidIndicator
     */
    protected $eidIndicator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     * @return \FreedomPay\Freeway\InvoiceHeader
     */
    public function setInvoiceNumber($invoiceNumber)
    {
      $this->invoiceNumber = $invoiceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDate()
    {
      return $this->invoiceDate;
    }

    /**
     * @param string $invoiceDate
     * @return \FreedomPay\Freeway\InvoiceHeader
     */
    public function setInvoiceDate($invoiceDate)
    {
      $this->invoiceDate = $invoiceDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantDescriptor()
    {
      return $this->merchantDescriptor;
    }

    /**
     * @param string $merchantDescriptor
     * @return \FreedomPay\Freeway\InvoiceHeader
     */
    public function setMerchantDescriptor($merchantDescriptor)
    {
      $this->merchantDescriptor = $merchantDescriptor;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantDescriptorContact()
    {
      return $this->merchantDescriptorContact;
    }

    /**
     * @param string $merchantDescriptorContact
     * @return \FreedomPay\Freeway\InvoiceHeader
     */
    public function setMerchantDescriptorContact($merchantDescriptorContact)
    {
      $this->merchantDescriptorContact = $merchantDescriptorContact;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantDescriptorUrl()
    {
      return $this->merchantDescriptorUrl;
    }

    /**
     * @param string $merchantDescriptorUrl
     * @return \FreedomPay\Freeway\InvoiceHeader
     */
    public function setMerchantDescriptorUrl($merchantDescriptorUrl)
    {
      $this->merchantDescriptorUrl = $merchantDescriptorUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaserCode()
    {
      return $this->purchaserCode;
    }

    /**
     * @param string $purchaserCode
     * @return \FreedomPay\Freeway\InvoiceHeader
     */
    public function setPurchaserCode($purchaserCode)
    {
      $this->purchaserCode = $purchaserCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaserOrderDate()
    {
      return $this->purchaserOrderDate;
    }

    /**
     * @param string $purchaserOrderDate
     * @return \FreedomPay\Freeway\InvoiceHeader
     */
    public function setPurchaserOrderDate($purchaserOrderDate)
    {
      $this->purchaserOrderDate = $purchaserOrderDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsIndicator()
    {
      return $this->goodsIndicator;
    }

    /**
     * @param string $goodsIndicator
     * @return \FreedomPay\Freeway\InvoiceHeader
     */
    public function setGoodsIndicator($goodsIndicator)
    {
      $this->goodsIndicator = $goodsIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPO()
    {
      return $this->customerPO;
    }

    /**
     * @param string $customerPO
     * @return \FreedomPay\Freeway\InvoiceHeader
     */
    public function setCustomerPO($customerPO)
    {
      $this->customerPO = $customerPO;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCodeStandard()
    {
      return $this->productCodeStandard;
    }

    /**
     * @param string $productCodeStandard
     * @return \FreedomPay\Freeway\InvoiceHeader
     */
    public function setProductCodeStandard($productCodeStandard)
    {
      $this->productCodeStandard = $productCodeStandard;
      return $this;
    }

    /**
     * @return string
     */
    public function getEidIndicator()
    {
      return $this->eidIndicator;
    }

    /**
     * @param string $eidIndicator
     * @return \FreedomPay\Freeway\InvoiceHeader
     */
    public function setEidIndicator($eidIndicator)
    {
      $this->eidIndicator = $eidIndicator;
      return $this;
    }

}
