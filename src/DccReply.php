<?php

namespace FreedomPay\Freeway;

class DccReply
{

    /**
     * @var string $processorResponseCode
     */
    protected $processorResponseCode = null;

    /**
     * @var string $supported
     */
    protected $supported = null;

    /**
     * @var string $margin
     */
    protected $margin = null;

    /**
     * @var int $reasonCode
     */
    protected $reasonCode = null;

    /**
     * @var string $rate
     */
    protected $rate = null;

    /**
     * @var string $rateTimestamp
     */
    protected $rateTimestamp = null;

    /**
     * @var string $foreignAmount
     */
    protected $foreignAmount = null;

    /**
     * @var string $foreignCurrency
     */
    protected $foreignCurrency = null;

    /**
     * @var string $foreignCurrencyAlpha
     */
    protected $foreignCurrencyAlpha = null;

    /**
     * @var string $foreignCurrencyScale
     */
    protected $foreignCurrencyScale = null;

    /**
     * @var string $hostData
     */
    protected $hostData = null;

    /**
     * @var string $rateSource
     */
    protected $rateSource = null;

    /**
     * @var string $rateLifetime
     */
    protected $rateLifetime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getProcessorResponseCode()
    {
      return $this->processorResponseCode;
    }

    /**
     * @param string $processorResponseCode
     * @return \FreedomPay\Freeway\DccReply
     */
    public function setProcessorResponseCode($processorResponseCode)
    {
      $this->processorResponseCode = $processorResponseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupported()
    {
      return $this->supported;
    }

    /**
     * @param string $supported
     * @return \FreedomPay\Freeway\DccReply
     */
    public function setSupported($supported)
    {
      $this->supported = $supported;
      return $this;
    }

    /**
     * @return string
     */
    public function getMargin()
    {
      return $this->margin;
    }

    /**
     * @param string $margin
     * @return \FreedomPay\Freeway\DccReply
     */
    public function setMargin($margin)
    {
      $this->margin = $margin;
      return $this;
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
     * @return \FreedomPay\Freeway\DccReply
     */
    public function setReasonCode($reasonCode)
    {
      $this->reasonCode = $reasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param string $rate
     * @return \FreedomPay\Freeway\DccReply
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateTimestamp()
    {
      return $this->rateTimestamp;
    }

    /**
     * @param string $rateTimestamp
     * @return \FreedomPay\Freeway\DccReply
     */
    public function setRateTimestamp($rateTimestamp)
    {
      $this->rateTimestamp = $rateTimestamp;
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
     * @return \FreedomPay\Freeway\DccReply
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
     * @return \FreedomPay\Freeway\DccReply
     */
    public function setForeignCurrency($foreignCurrency)
    {
      $this->foreignCurrency = $foreignCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getForeignCurrencyAlpha()
    {
      return $this->foreignCurrencyAlpha;
    }

    /**
     * @param string $foreignCurrencyAlpha
     * @return \FreedomPay\Freeway\DccReply
     */
    public function setForeignCurrencyAlpha($foreignCurrencyAlpha)
    {
      $this->foreignCurrencyAlpha = $foreignCurrencyAlpha;
      return $this;
    }

    /**
     * @return string
     */
    public function getForeignCurrencyScale()
    {
      return $this->foreignCurrencyScale;
    }

    /**
     * @param string $foreignCurrencyScale
     * @return \FreedomPay\Freeway\DccReply
     */
    public function setForeignCurrencyScale($foreignCurrencyScale)
    {
      $this->foreignCurrencyScale = $foreignCurrencyScale;
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
     * @return \FreedomPay\Freeway\DccReply
     */
    public function setHostData($hostData)
    {
      $this->hostData = $hostData;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateSource()
    {
      return $this->rateSource;
    }

    /**
     * @param string $rateSource
     * @return \FreedomPay\Freeway\DccReply
     */
    public function setRateSource($rateSource)
    {
      $this->rateSource = $rateSource;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateLifetime()
    {
      return $this->rateLifetime;
    }

    /**
     * @param string $rateLifetime
     * @return \FreedomPay\Freeway\DccReply
     */
    public function setRateLifetime($rateLifetime)
    {
      $this->rateLifetime = $rateLifetime;
      return $this;
    }

}
