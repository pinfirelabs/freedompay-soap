<?php

namespace FreedomPay\Freeway;

class VendProductList
{

    /**
     * @var VendProduct[] $product
     */
    protected $product = null;

    /**
     * @var string $options
     */
    protected $options = null;

    /**
     * @param string $options
     */
    public function __construct($options)
    {
      $this->options = $options;
    }

    /**
     * @return VendProduct[]
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param VendProduct[] $product
     * @return \FreedomPay\Freeway\VendProductList
     */
    public function setProduct(?array $product = null)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return string
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param string $options
     * @return \FreedomPay\Freeway\VendProductList
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

}
