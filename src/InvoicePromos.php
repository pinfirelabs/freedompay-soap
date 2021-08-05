<?php

namespace FreedomPay\Freeway;

class InvoicePromos
{

    /**
     * @var string[] $promo
     */
    protected $promo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getPromo()
    {
      return $this->promo;
    }

    /**
     * @param string[] $promo
     * @return \FreedomPay\Freeway\InvoicePromos
     */
    public function setPromo(array $promo = null)
    {
      $this->promo = $promo;
      return $this;
    }

}
