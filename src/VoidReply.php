<?php

namespace FreedomPay\Freeway;

class VoidReply
{

    /**
     * @var string $prevRequestID
     */
    protected $prevRequestID = null;

    /**
     * @var string $enhancedDataEnabled
     */
    protected $enhancedDataEnabled = null;

    /**
     * @var string $partialAmount
     */
    protected $partialAmount = null;

    /**
     * @var string $amount
     */
    protected $amount = null;

    /**
     * @var string $processorResponseCode
     */
    protected $processorResponseCode = null;

    /**
     * @var string $processorResponseMessage
     */
    protected $processorResponseMessage = null;

    /**
     * @var string $processorTransactionID
     */
    protected $processorTransactionID = null;

    /**
     * @var int $reasonCode
     */
    protected $reasonCode = null;

    /**
     * @var string $reconciliationID
     */
    protected $reconciliationID = null;

    /**
     * @var string $requestDateTime
     */
    protected $requestDateTime = null;

    /**
     * @var string $forwardCode
     */
    protected $forwardCode = null;

    /**
     * @var string $settlementDate
     */
    protected $settlementDate = null;

    /**
     * @var string $conversionRate
     */
    protected $conversionRate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPrevRequestID()
    {
      return $this->prevRequestID;
    }

    /**
     * @param string $prevRequestID
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setPrevRequestID($prevRequestID)
    {
      $this->prevRequestID = $prevRequestID;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnhancedDataEnabled()
    {
      return $this->enhancedDataEnabled;
    }

    /**
     * @param string $enhancedDataEnabled
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setEnhancedDataEnabled($enhancedDataEnabled)
    {
      $this->enhancedDataEnabled = $enhancedDataEnabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartialAmount()
    {
      return $this->partialAmount;
    }

    /**
     * @param string $partialAmount
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setPartialAmount($partialAmount)
    {
      $this->partialAmount = $partialAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param string $amount
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
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
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setProcessorResponseCode($processorResponseCode)
    {
      $this->processorResponseCode = $processorResponseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProcessorResponseMessage()
    {
      return $this->processorResponseMessage;
    }

    /**
     * @param string $processorResponseMessage
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setProcessorResponseMessage($processorResponseMessage)
    {
      $this->processorResponseMessage = $processorResponseMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getProcessorTransactionID()
    {
      return $this->processorTransactionID;
    }

    /**
     * @param string $processorTransactionID
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setProcessorTransactionID($processorTransactionID)
    {
      $this->processorTransactionID = $processorTransactionID;
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
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setReasonCode($reasonCode)
    {
      $this->reasonCode = $reasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReconciliationID()
    {
      return $this->reconciliationID;
    }

    /**
     * @param string $reconciliationID
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setReconciliationID($reconciliationID)
    {
      $this->reconciliationID = $reconciliationID;
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
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setRequestDateTime($requestDateTime)
    {
      $this->requestDateTime = $requestDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getForwardCode()
    {
      return $this->forwardCode;
    }

    /**
     * @param string $forwardCode
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setForwardCode($forwardCode)
    {
      $this->forwardCode = $forwardCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSettlementDate()
    {
      return $this->settlementDate;
    }

    /**
     * @param string $settlementDate
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setSettlementDate($settlementDate)
    {
      $this->settlementDate = $settlementDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getConversionRate()
    {
      return $this->conversionRate;
    }

    /**
     * @param string $conversionRate
     * @return \FreedomPay\Freeway\VoidReply
     */
    public function setConversionRate($conversionRate)
    {
      $this->conversionRate = $conversionRate;
      return $this;
    }

}
