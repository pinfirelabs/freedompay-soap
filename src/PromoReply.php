<?php

namespace FreedomPay\Freeway;

class PromoReply
{

    /**
     * @var int $reasonCode
     */
    protected $reasonCode = null;

    /**
     * @var string $mixedPromosAllowed
     */
    protected $mixedPromosAllowed = null;

    /**
     * @var string $requestDateTime
     */
    protected $requestDateTime = null;

    /**
     * @var string $validationCode
     */
    protected $validationCode = null;

    /**
     * @var ArrayOfPromoInfo $promos
     */
    protected $promos = null;

    /**
     * @var InvoicePromos $invoice
     */
    protected $invoice = null;

    /**
     * @var ArrayOfItemPromos $items
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
     * @return \FreedomPay\Freeway\PromoReply
     */
    public function setReasonCode($reasonCode)
    {
      $this->reasonCode = $reasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMixedPromosAllowed()
    {
      return $this->mixedPromosAllowed;
    }

    /**
     * @param string $mixedPromosAllowed
     * @return \FreedomPay\Freeway\PromoReply
     */
    public function setMixedPromosAllowed($mixedPromosAllowed)
    {
      $this->mixedPromosAllowed = $mixedPromosAllowed;
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
     * @return \FreedomPay\Freeway\PromoReply
     */
    public function setRequestDateTime($requestDateTime)
    {
      $this->requestDateTime = $requestDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getValidationCode()
    {
      return $this->validationCode;
    }

    /**
     * @param string $validationCode
     * @return \FreedomPay\Freeway\PromoReply
     */
    public function setValidationCode($validationCode)
    {
      $this->validationCode = $validationCode;
      return $this;
    }

    /**
     * @return ArrayOfPromoInfo
     */
    public function getPromos()
    {
      return $this->promos;
    }

    /**
     * @param ArrayOfPromoInfo $promos
     * @return \FreedomPay\Freeway\PromoReply
     */
    public function setPromos($promos)
    {
      $this->promos = $promos;
      return $this;
    }

    /**
     * @return InvoicePromos
     */
    public function getInvoice()
    {
      return $this->invoice;
    }

    /**
     * @param InvoicePromos $invoice
     * @return \FreedomPay\Freeway\PromoReply
     */
    public function setInvoice($invoice)
    {
      $this->invoice = $invoice;
      return $this;
    }

    /**
     * @return ArrayOfItemPromos
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param ArrayOfItemPromos $items
     * @return \FreedomPay\Freeway\PromoReply
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

}
