<?php

namespace FreedomPay\Freeway;

class InvoiceDiscountDetail
{

    /**
     * @var EIDDetail[] $discount
     */
    protected $discount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EIDDetail[]
     */
    public function getDiscount()
    {
      return $this->discount;
    }

    /**
     * @param EIDDetail[] $discount
     * @return \FreedomPay\Freeway\InvoiceDiscountDetail
     */
    public function setDiscount(array $discount = null)
    {
      $this->discount = $discount;
      return $this;
    }

}
