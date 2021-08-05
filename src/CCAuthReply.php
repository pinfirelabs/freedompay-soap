<?php

namespace FreedomPay\Freeway;

class CCAuthReply
{

    /**
     * @var string $amountDelta
     */
    protected $amountDelta = null;

    /**
     * @var string $accountBalance
     */
    protected $accountBalance = null;

    /**
     * @var string $accountBalanceCurrency
     */
    protected $accountBalanceCurrency = null;

    /**
     * @var string $accountAPR
     */
    protected $accountAPR = null;

    /**
     * @var string $accountAPRType
     */
    protected $accountAPRType = null;

    /**
     * @var string $authorizationCode
     */
    protected $authorizationCode = null;

    /**
     * @var string $authorizedDateTime
     */
    protected $authorizedDateTime = null;

    /**
     * @var string $avsCode
     */
    protected $avsCode = null;

    /**
     * @var string $avsCodeRaw
     */
    protected $avsCodeRaw = null;

    /**
     * @var string $cavvResponseCode
     */
    protected $cavvResponseCode = null;

    /**
     * @var string $cavvResponseCodeRaw
     */
    protected $cavvResponseCodeRaw = null;

    /**
     * @var string $cvCode
     */
    protected $cvCode = null;

    /**
     * @var string $cvCodeRaw
     */
    protected $cvCodeRaw = null;

    /**
     * @var string $authRequestID
     */
    protected $authRequestID = null;

    /**
     * @var string $chipData
     */
    protected $chipData = null;

    /**
     * @var string $cardType
     */
    protected $cardType = null;

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
    public function getAmountDelta()
    {
      return $this->amountDelta;
    }

    /**
     * @param string $amountDelta
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setAmountDelta($amountDelta)
    {
      $this->amountDelta = $amountDelta;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountBalance()
    {
      return $this->accountBalance;
    }

    /**
     * @param string $accountBalance
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setAccountBalance($accountBalance)
    {
      $this->accountBalance = $accountBalance;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountBalanceCurrency()
    {
      return $this->accountBalanceCurrency;
    }

    /**
     * @param string $accountBalanceCurrency
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setAccountBalanceCurrency($accountBalanceCurrency)
    {
      $this->accountBalanceCurrency = $accountBalanceCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountAPR()
    {
      return $this->accountAPR;
    }

    /**
     * @param string $accountAPR
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setAccountAPR($accountAPR)
    {
      $this->accountAPR = $accountAPR;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountAPRType()
    {
      return $this->accountAPRType;
    }

    /**
     * @param string $accountAPRType
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setAccountAPRType($accountAPRType)
    {
      $this->accountAPRType = $accountAPRType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationCode()
    {
      return $this->authorizationCode;
    }

    /**
     * @param string $authorizationCode
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setAuthorizationCode($authorizationCode)
    {
      $this->authorizationCode = $authorizationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizedDateTime()
    {
      return $this->authorizedDateTime;
    }

    /**
     * @param string $authorizedDateTime
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setAuthorizedDateTime($authorizedDateTime)
    {
      $this->authorizedDateTime = $authorizedDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvsCode()
    {
      return $this->avsCode;
    }

    /**
     * @param string $avsCode
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setAvsCode($avsCode)
    {
      $this->avsCode = $avsCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvsCodeRaw()
    {
      return $this->avsCodeRaw;
    }

    /**
     * @param string $avsCodeRaw
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setAvsCodeRaw($avsCodeRaw)
    {
      $this->avsCodeRaw = $avsCodeRaw;
      return $this;
    }

    /**
     * @return string
     */
    public function getCavvResponseCode()
    {
      return $this->cavvResponseCode;
    }

    /**
     * @param string $cavvResponseCode
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setCavvResponseCode($cavvResponseCode)
    {
      $this->cavvResponseCode = $cavvResponseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCavvResponseCodeRaw()
    {
      return $this->cavvResponseCodeRaw;
    }

    /**
     * @param string $cavvResponseCodeRaw
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setCavvResponseCodeRaw($cavvResponseCodeRaw)
    {
      $this->cavvResponseCodeRaw = $cavvResponseCodeRaw;
      return $this;
    }

    /**
     * @return string
     */
    public function getCvCode()
    {
      return $this->cvCode;
    }

    /**
     * @param string $cvCode
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setCvCode($cvCode)
    {
      $this->cvCode = $cvCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCvCodeRaw()
    {
      return $this->cvCodeRaw;
    }

    /**
     * @param string $cvCodeRaw
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setCvCodeRaw($cvCodeRaw)
    {
      $this->cvCodeRaw = $cvCodeRaw;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthRequestID()
    {
      return $this->authRequestID;
    }

    /**
     * @param string $authRequestID
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setAuthRequestID($authRequestID)
    {
      $this->authRequestID = $authRequestID;
      return $this;
    }

    /**
     * @return string
     */
    public function getChipData()
    {
      return $this->chipData;
    }

    /**
     * @param string $chipData
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setChipData($chipData)
    {
      $this->chipData = $chipData;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardType()
    {
      return $this->cardType;
    }

    /**
     * @param string $cardType
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setCardType($cardType)
    {
      $this->cardType = $cardType;
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
     * @return \FreedomPay\Freeway\CCAuthReply
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
     * @return \FreedomPay\Freeway\CCAuthReply
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
     * @return \FreedomPay\Freeway\CCAuthReply
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
     * @return \FreedomPay\Freeway\CCAuthReply
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
     * @return \FreedomPay\Freeway\CCAuthReply
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
     * @return \FreedomPay\Freeway\CCAuthReply
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
     * @return \FreedomPay\Freeway\CCAuthReply
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
     * @return \FreedomPay\Freeway\CCAuthReply
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
     * @return \FreedomPay\Freeway\CCAuthReply
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
     * @return \FreedomPay\Freeway\CCAuthReply
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
     * @return \FreedomPay\Freeway\CCAuthReply
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
     * @return \FreedomPay\Freeway\CCAuthReply
     */
    public function setConversionRate($conversionRate)
    {
      $this->conversionRate = $conversionRate;
      return $this;
    }

}
