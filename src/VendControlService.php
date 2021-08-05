<?php

namespace FreedomPay\Freeway;

class VendControlService
{

    /**
     * @var VendProductList $products
     */
    protected $products = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VendProductList
     */
    public function getProducts()
    {
      return $this->products;
    }

    /**
     * @param VendProductList $products
     * @return \FreedomPay\Freeway\VendControlService
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

}
