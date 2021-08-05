<?php

namespace FreedomPay\Freeway;

class VendProduct
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $tag
     */
    protected $tag = null;

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $unitOfMeasure
     */
    protected $unitOfMeasure = null;

    /**
     * @var string $unitPrice
     */
    protected $unitPrice = null;

    /**
     * @var string $maxQty
     */
    protected $maxQty = null;

    /**
     * @var string $options
     */
    protected $options = null;

    /**
     * @var string $priceCode
     */
    protected $priceCode = null;

    /**
     * @param string $id
     * @param string $tag
     * @param string $productCode
     * @param string $unitOfMeasure
     * @param string $unitPrice
     * @param string $maxQty
     * @param string $options
     * @param string $priceCode
     */
    public function __construct($id, $tag, $productCode, $unitOfMeasure, $unitPrice, $maxQty, $options, $priceCode)
    {
      $this->id = $id;
      $this->tag = $tag;
      $this->productCode = $productCode;
      $this->unitOfMeasure = $unitOfMeasure;
      $this->unitPrice = $unitPrice;
      $this->maxQty = $maxQty;
      $this->options = $options;
      $this->priceCode = $priceCode;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \FreedomPay\Freeway\VendProduct
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
      return $this->tag;
    }

    /**
     * @param string $tag
     * @return \FreedomPay\Freeway\VendProduct
     */
    public function setTag($tag)
    {
      $this->tag = $tag;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return \FreedomPay\Freeway\VendProduct
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasure()
    {
      return $this->unitOfMeasure;
    }

    /**
     * @param string $unitOfMeasure
     * @return \FreedomPay\Freeway\VendProduct
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
      $this->unitOfMeasure = $unitOfMeasure;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitPrice()
    {
      return $this->unitPrice;
    }

    /**
     * @param string $unitPrice
     * @return \FreedomPay\Freeway\VendProduct
     */
    public function setUnitPrice($unitPrice)
    {
      $this->unitPrice = $unitPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxQty()
    {
      return $this->maxQty;
    }

    /**
     * @param string $maxQty
     * @return \FreedomPay\Freeway\VendProduct
     */
    public function setMaxQty($maxQty)
    {
      $this->maxQty = $maxQty;
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
     * @return \FreedomPay\Freeway\VendProduct
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceCode()
    {
      return $this->priceCode;
    }

    /**
     * @param string $priceCode
     * @return \FreedomPay\Freeway\VendProduct
     */
    public function setPriceCode($priceCode)
    {
      $this->priceCode = $priceCode;
      return $this;
    }

}
