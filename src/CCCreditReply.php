<?php

namespace FreedomPay\Freeway;

class CCCreditReply
{

    /**
     * @var string $maxAccountBalance
     */
    protected $maxAccountBalance = null;

    /**
     * @var string $accountBalance
     */
    protected $accountBalance = null;

    /**
     * @var string $accountBalanceCurrency
     */
    protected $accountBalanceCurrency = null;

    /**
     * @var string $authorizationCode
     */
    protected $authorizationCode = null;

    /**
     * @var string $chipData
     */
    protected $chipData = null;

    /**
     * @var string $cardType
     */
    protected $cardType = null;

    /**
     * @var string $purchasingLevel3Enabled
     */
    protected $purchasingLevel3Enabled = null;

    /**
     * @var string $directBillCode
     */
    protected $directBillCode = null;

    /**
     * @var string $directBillAmount
     */
    protected $directBillAmount = null;

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
    public function getMaxAccountBalance()
    {
      return $this->maxAccountBalance;
    }

    /**
     * @param string $maxAccountBalance
     * @return \FreedomPay\Freeway\CCCreditReply
     */
    public function setMaxAccountBalance($maxAccountBalance)
    {
      $this->maxAccountBalance = $maxAccountBalance;
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
     */
    public function setAccountBalanceCurrency($accountBalanceCurrency)
    {
      $this->accountBalanceCurrency = $accountBalanceCurrency;
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
     * @return \FreedomPay\Freeway\CCCreditReply
     */
    public function setAuthorizationCode($authorizationCode)
    {
      $this->authorizationCode = $authorizationCode;
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
     */
    public function setCardType($cardType)
    {
      $this->cardType = $cardType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchasingLevel3Enabled()
    {
      return $this->purchasingLevel3Enabled;
    }

    /**
     * @param string $purchasingLevel3Enabled
     * @return \FreedomPay\Freeway\CCCreditReply
     */
    public function setPurchasingLevel3Enabled($purchasingLevel3Enabled)
    {
      $this->purchasingLevel3Enabled = $purchasingLevel3Enabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirectBillCode()
    {
      return $this->directBillCode;
    }

    /**
     * @param string $directBillCode
     * @return \FreedomPay\Freeway\CCCreditReply
     */
    public function setDirectBillCode($directBillCode)
    {
      $this->directBillCode = $directBillCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirectBillAmount()
    {
      return $this->directBillAmount;
    }

    /**
     * @param string $directBillAmount
     * @return \FreedomPay\Freeway\CCCreditReply
     */
    public function setDirectBillAmount($directBillAmount)
    {
      $this->directBillAmount = $directBillAmount;
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
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
     * @return \FreedomPay\Freeway\CCCreditReply
     */
    public function setConversionRate($conversionRate)
    {
      $this->conversionRate = $conversionRate;
      return $this;
    }

}
