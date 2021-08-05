<?php

namespace FreedomPay\Freeway;

class DccInfo
{

    /**
     * @var string $enabled
     */
    protected $enabled = null;

    /**
     * @var string $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var string $foreignAmount
     */
    protected $foreignAmount = null;

    /**
     * @var string $foreignCurrency
     */
    protected $foreignCurrency = null;

    /**
     * @var string $hostData
     */
    protected $hostData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEnabled()
    {
      return $this->enabled;
    }

    /**
     * @param string $enabled
     * @return \FreedomPay\Freeway\DccInfo
     */
    public function setEnabled($enabled)
    {
      $this->enabled = $enabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param string $exchangeRate
     * @return \FreedomPay\Freeway\DccInfo
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getForeignAmount()
    {
      return $this->foreignAmount;
    }

    /**
     * @param string $foreignAmount
     * @return \FreedomPay\Freeway\DccInfo
     */
    public function setForeignAmount($foreignAmount)
    {
      $this->foreignAmount = $foreignAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getForeignCurrency()
    {
      return $this->foreignCurrency;
    }

    /**
     * @param string $foreignCurrency
     * @return \FreedomPay\Freeway\DccInfo
     */
    public function setForeignCurrency($foreignCurrency)
    {
      $this->foreignCurrency = $foreignCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getHostData()
    {
      return $this->hostData;
    }

    /**
     * @param string $hostData
     * @return \FreedomPay\Freeway\DccInfo
     */
    public function setHostData($hostData)
    {
      $this->hostData = $hostData;
      return $this;
    }

}
