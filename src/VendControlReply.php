<?php

namespace FreedomPay\Freeway;

class VendControlReply
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
     * @return \FreedomPay\Freeway\VendControlReply
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

}
