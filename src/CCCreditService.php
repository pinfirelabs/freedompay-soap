<?php

namespace FreedomPay\Freeway;

class CCCreditService
{

    /**
     * @var string $transType
     */
    protected $transType = null;

    /**
     * @var string $offline
     */
    protected $offline = null;

    /**
     * @var string $offlineCode
     */
    protected $offlineCode = null;

    /**
     * @var string $returnBalance
     */
    protected $returnBalance = null;

    /**
     * @var string $businessDate
     */
    protected $businessDate = null;

    /**
     * @var string $billPayment
     */
    protected $billPayment = null;

    /**
     * @var string $recurring
     */
    protected $recurring = null;

    /**
     * @var string $commerceIndicator
     */
    protected $commerceIndicator = null;

    /**
     * @var string $partialPaymentId
     */
    protected $partialPaymentId = null;

    /**
     * @var string $lastPaymentFlag
     */
    protected $lastPaymentFlag = null;

    /**
     * @var string $industryDatatype
     */
    protected $industryDatatype = null;

    /**
     * @var string $run
     */
    protected $run = null;

    /**
     * @param string $run
     */
    public function __construct($run)
    {
      $this->run = $run;
    }

    /**
     * @return string
     */
    public function getTransType()
    {
      return $this->transType;
    }

    /**
     * @param string $transType
     * @return \FreedomPay\Freeway\CCCreditService
     */
    public function setTransType($transType)
    {
      $this->transType = $transType;
      return $this;
    }

    /**
     * @return string
     */
    public function getOffline()
    {
      return $this->offline;
    }

    /**
     * @param string $offline
     * @return \FreedomPay\Freeway\CCCreditService
     */
    public function setOffline($offline)
    {
      $this->offline = $offline;
      return $this;
    }

    /**
     * @return string
     */
    public function getOfflineCode()
    {
      return $this->offlineCode;
    }

    /**
     * @param string $offlineCode
     * @return \FreedomPay\Freeway\CCCreditService
     */
    public function setOfflineCode($offlineCode)
    {
      $this->offlineCode = $offlineCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnBalance()
    {
      return $this->returnBalance;
    }

    /**
     * @param string $returnBalance
     * @return \FreedomPay\Freeway\CCCreditService
     */
    public function setReturnBalance($returnBalance)
    {
      $this->returnBalance = $returnBalance;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessDate()
    {
      return $this->businessDate;
    }

    /**
     * @param string $businessDate
     * @return \FreedomPay\Freeway\CCCreditService
     */
    public function setBusinessDate($businessDate)
    {
      $this->businessDate = $businessDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillPayment()
    {
      return $this->billPayment;
    }

    /**
     * @param string $billPayment
     * @return \FreedomPay\Freeway\CCCreditService
     */
    public function setBillPayment($billPayment)
    {
      $this->billPayment = $billPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecurring()
    {
      return $this->recurring;
    }

    /**
     * @param string $recurring
     * @return \FreedomPay\Freeway\CCCreditService
     */
    public function setRecurring($recurring)
    {
      $this->recurring = $recurring;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommerceIndicator()
    {
      return $this->commerceIndicator;
    }

    /**
     * @param string $commerceIndicator
     * @return \FreedomPay\Freeway\CCCreditService
     */
    public function setCommerceIndicator($commerceIndicator)
    {
      $this->commerceIndicator = $commerceIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartialPaymentId()
    {
      return $this->partialPaymentId;
    }

    /**
     * @param string $partialPaymentId
     * @return \FreedomPay\Freeway\CCCreditService
     */
    public function setPartialPaymentId($partialPaymentId)
    {
      $this->partialPaymentId = $partialPaymentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastPaymentFlag()
    {
      return $this->lastPaymentFlag;
    }

    /**
     * @param string $lastPaymentFlag
     * @return \FreedomPay\Freeway\CCCreditService
     */
    public function setLastPaymentFlag($lastPaymentFlag)
    {
      $this->lastPaymentFlag = $lastPaymentFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getIndustryDatatype()
    {
      return $this->industryDatatype;
    }

    /**
     * @param string $industryDatatype
     * @return \FreedomPay\Freeway\CCCreditService
     */
    public function setIndustryDatatype($industryDatatype)
    {
      $this->industryDatatype = $industryDatatype;
      return $this;
    }

    /**
     * @return string
     */
    public function getRun()
    {
      return $this->run;
    }

    /**
     * @param string $run
     * @return \FreedomPay\Freeway\CCCreditService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
