<?php

namespace FreedomPay\Freeway;

class CCCaptureService
{

    /**
     * @var string $purchasingLevel
     */
    protected $purchasingLevel = null;

    /**
     * @var string $isSplitTransaction
     */
    protected $isSplitTransaction = null;

    /**
     * @var string $useMerchantCreds
     */
    protected $useMerchantCreds = null;

    /**
     * @var string $businessDate
     */
    protected $businessDate = null;

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
    public function getPurchasingLevel()
    {
      return $this->purchasingLevel;
    }

    /**
     * @param string $purchasingLevel
     * @return \FreedomPay\Freeway\CCCaptureService
     */
    public function setPurchasingLevel($purchasingLevel)
    {
      $this->purchasingLevel = $purchasingLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getIsSplitTransaction()
    {
      return $this->isSplitTransaction;
    }

    /**
     * @param string $isSplitTransaction
     * @return \FreedomPay\Freeway\CCCaptureService
     */
    public function setIsSplitTransaction($isSplitTransaction)
    {
      $this->isSplitTransaction = $isSplitTransaction;
      return $this;
    }

    /**
     * @return string
     */
    public function getUseMerchantCreds()
    {
      return $this->useMerchantCreds;
    }

    /**
     * @param string $useMerchantCreds
     * @return \FreedomPay\Freeway\CCCaptureService
     */
    public function setUseMerchantCreds($useMerchantCreds)
    {
      $this->useMerchantCreds = $useMerchantCreds;
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
     * @return \FreedomPay\Freeway\CCCaptureService
     */
    public function setBusinessDate($businessDate)
    {
      $this->businessDate = $businessDate;
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
     * @return \FreedomPay\Freeway\CCCaptureService
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
     * @return \FreedomPay\Freeway\CCCaptureService
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
     * @return \FreedomPay\Freeway\CCCaptureService
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
     * @return \FreedomPay\Freeway\CCCaptureService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
