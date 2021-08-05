<?php

namespace FreedomPay\Freeway;

class TaxDetail
{

    /**
     * @var TaxDetailItem[] $tax
     */
    protected $tax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxDetailItem[]
     */
    public function getTax()
    {
      return $this->tax;
    }

    /**
     * @param TaxDetailItem[] $tax
     * @return \FreedomPay\Freeway\TaxDetail
     */
    public function setTax(array $tax = null)
    {
      $this->tax = $tax;
      return $this;
    }

}
