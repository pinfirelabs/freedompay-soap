<?php

namespace FreedomPay\Freeway;

class CCAuthService
{

    /**
     * @var string $transType
     */
    protected $transType = null;

    /**
     * @var string $allowPartial
     */
    protected $allowPartial = null;

    /**
     * @var string $returnBalance
     */
    protected $returnBalance = null;

    /**
     * @var string $authType
     */
    protected $authType = null;

    /**
     * @var string $verbalAuthCode
     */
    protected $verbalAuthCode = null;

    /**
     * @var string $ecom3ds
     */
    protected $ecom3ds = null;

    /**
     * @var string $cavv
     */
    protected $cavv = null;

    /**
     * @var string $xid
     */
    protected $xid = null;

    /**
     * @var string $origAuthAmount
     */
    protected $origAuthAmount = null;

    /**
     * @var string $enableAVS
     */
    protected $enableAVS = null;

    /**
     * @var string $offline
     */
    protected $offline = null;

    /**
     * @var string $offlineCode
     */
    protected $offlineCode = null;

    /**
     * @var string $estimated
     */
    protected $estimated = null;

    /**
     * @var string $installmentNumber
     */
    protected $installmentNumber = null;

    /**
     * @var string $installmentCount
     */
    protected $installmentCount = null;

    /**
     * @var string $auth3dsformat
     */
    protected $auth3dsformat = null;

    /**
     * @var string $auth3dsjson
     */
    protected $auth3dsjson = null;

    /**
     * @var string $scaExemptions
     */
    protected $scaExemptions = null;

    /**
     * @var string $scaUpgrade
     */
    protected $scaUpgrade = null;

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
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setTransType($transType)
    {
      $this->transType = $transType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllowPartial()
    {
      return $this->allowPartial;
    }

    /**
     * @param string $allowPartial
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setAllowPartial($allowPartial)
    {
      $this->allowPartial = $allowPartial;
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
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setReturnBalance($returnBalance)
    {
      $this->returnBalance = $returnBalance;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthType()
    {
      return $this->authType;
    }

    /**
     * @param string $authType
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setAuthType($authType)
    {
      $this->authType = $authType;
      return $this;
    }

    /**
     * @return string
     */
    public function getVerbalAuthCode()
    {
      return $this->verbalAuthCode;
    }

    /**
     * @param string $verbalAuthCode
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setVerbalAuthCode($verbalAuthCode)
    {
      $this->verbalAuthCode = $verbalAuthCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEcom3ds()
    {
      return $this->ecom3ds;
    }

    /**
     * @param string $ecom3ds
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setEcom3ds($ecom3ds)
    {
      $this->ecom3ds = $ecom3ds;
      return $this;
    }

    /**
     * @return string
     */
    public function getCavv()
    {
      return $this->cavv;
    }

    /**
     * @param string $cavv
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setCavv($cavv)
    {
      $this->cavv = $cavv;
      return $this;
    }

    /**
     * @return string
     */
    public function getXid()
    {
      return $this->xid;
    }

    /**
     * @param string $xid
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setXid($xid)
    {
      $this->xid = $xid;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrigAuthAmount()
    {
      return $this->origAuthAmount;
    }

    /**
     * @param string $origAuthAmount
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setOrigAuthAmount($origAuthAmount)
    {
      $this->origAuthAmount = $origAuthAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnableAVS()
    {
      return $this->enableAVS;
    }

    /**
     * @param string $enableAVS
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setEnableAVS($enableAVS)
    {
      $this->enableAVS = $enableAVS;
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
     * @return \FreedomPay\Freeway\CCAuthService
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
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setOfflineCode($offlineCode)
    {
      $this->offlineCode = $offlineCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstimated()
    {
      return $this->estimated;
    }

    /**
     * @param string $estimated
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setEstimated($estimated)
    {
      $this->estimated = $estimated;
      return $this;
    }

    /**
     * @return string
     */
    public function getInstallmentNumber()
    {
      return $this->installmentNumber;
    }

    /**
     * @param string $installmentNumber
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setInstallmentNumber($installmentNumber)
    {
      $this->installmentNumber = $installmentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getInstallmentCount()
    {
      return $this->installmentCount;
    }

    /**
     * @param string $installmentCount
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setInstallmentCount($installmentCount)
    {
      $this->installmentCount = $installmentCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuth3dsformat()
    {
      return $this->auth3dsformat;
    }

    /**
     * @param string $auth3dsformat
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setAuth3dsformat($auth3dsformat)
    {
      $this->auth3dsformat = $auth3dsformat;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuth3dsjson()
    {
      return $this->auth3dsjson;
    }

    /**
     * @param string $auth3dsjson
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setAuth3dsjson($auth3dsjson)
    {
      $this->auth3dsjson = $auth3dsjson;
      return $this;
    }

    /**
     * @return string
     */
    public function getScaExemptions()
    {
      return $this->scaExemptions;
    }

    /**
     * @param string $scaExemptions
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setScaExemptions($scaExemptions)
    {
      $this->scaExemptions = $scaExemptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getScaUpgrade()
    {
      return $this->scaUpgrade;
    }

    /**
     * @param string $scaUpgrade
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setScaUpgrade($scaUpgrade)
    {
      $this->scaUpgrade = $scaUpgrade;
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
     * @return \FreedomPay\Freeway\CCAuthService
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
     * @return \FreedomPay\Freeway\CCAuthService
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
     * @return \FreedomPay\Freeway\CCAuthService
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
     * @return \FreedomPay\Freeway\CCAuthService
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
     * @return \FreedomPay\Freeway\CCAuthService
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
     * @return \FreedomPay\Freeway\CCAuthService
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
     * @return \FreedomPay\Freeway\CCAuthService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
