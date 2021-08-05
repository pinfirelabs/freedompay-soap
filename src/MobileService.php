<?php

namespace FreedomPay\Freeway;

class MobileService
{

    /**
     * @var string $featureFlags1
     */
    protected $featureFlags1 = null;

    /**
     * @var string $featureFlags2
     */
    protected $featureFlags2 = null;

    /**
     * @var string $functionCode
     */
    protected $functionCode = null;

    /**
     * @var string $checkId
     */
    protected $checkId = null;

    /**
     * @var string $acceptTip
     */
    protected $acceptTip = null;

    /**
     * @var string $openTab
     */
    protected $openTab = null;

    /**
     * @var string $paymentSessionId
     */
    protected $paymentSessionId = null;

    /**
     * @var string $mhaCallbackKey
     */
    protected $mhaCallbackKey = null;

    /**
     * @var string $qrseq
     */
    protected $qrseq = null;

    /**
     * @var string $barData
     */
    protected $barData = null;

    /**
     * @var string $barType
     */
    protected $barType = null;

    /**
     * @var string $confirmPaySeq
     */
    protected $confirmPaySeq = null;

    /**
     * @var string $paySeq
     */
    protected $paySeq = null;

    /**
     * @var string $appliedDiscountAmount
     */
    protected $appliedDiscountAmount = null;

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
    public function getFeatureFlags1()
    {
      return $this->featureFlags1;
    }

    /**
     * @param string $featureFlags1
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setFeatureFlags1($featureFlags1)
    {
      $this->featureFlags1 = $featureFlags1;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeatureFlags2()
    {
      return $this->featureFlags2;
    }

    /**
     * @param string $featureFlags2
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setFeatureFlags2($featureFlags2)
    {
      $this->featureFlags2 = $featureFlags2;
      return $this;
    }

    /**
     * @return string
     */
    public function getFunctionCode()
    {
      return $this->functionCode;
    }

    /**
     * @param string $functionCode
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setFunctionCode($functionCode)
    {
      $this->functionCode = $functionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckId()
    {
      return $this->checkId;
    }

    /**
     * @param string $checkId
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setCheckId($checkId)
    {
      $this->checkId = $checkId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcceptTip()
    {
      return $this->acceptTip;
    }

    /**
     * @param string $acceptTip
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setAcceptTip($acceptTip)
    {
      $this->acceptTip = $acceptTip;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpenTab()
    {
      return $this->openTab;
    }

    /**
     * @param string $openTab
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setOpenTab($openTab)
    {
      $this->openTab = $openTab;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentSessionId()
    {
      return $this->paymentSessionId;
    }

    /**
     * @param string $paymentSessionId
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setPaymentSessionId($paymentSessionId)
    {
      $this->paymentSessionId = $paymentSessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMhaCallbackKey()
    {
      return $this->mhaCallbackKey;
    }

    /**
     * @param string $mhaCallbackKey
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setMhaCallbackKey($mhaCallbackKey)
    {
      $this->mhaCallbackKey = $mhaCallbackKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getQrseq()
    {
      return $this->qrseq;
    }

    /**
     * @param string $qrseq
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setQrseq($qrseq)
    {
      $this->qrseq = $qrseq;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarData()
    {
      return $this->barData;
    }

    /**
     * @param string $barData
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setBarData($barData)
    {
      $this->barData = $barData;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarType()
    {
      return $this->barType;
    }

    /**
     * @param string $barType
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setBarType($barType)
    {
      $this->barType = $barType;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmPaySeq()
    {
      return $this->confirmPaySeq;
    }

    /**
     * @param string $confirmPaySeq
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setConfirmPaySeq($confirmPaySeq)
    {
      $this->confirmPaySeq = $confirmPaySeq;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaySeq()
    {
      return $this->paySeq;
    }

    /**
     * @param string $paySeq
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setPaySeq($paySeq)
    {
      $this->paySeq = $paySeq;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppliedDiscountAmount()
    {
      return $this->appliedDiscountAmount;
    }

    /**
     * @param string $appliedDiscountAmount
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setAppliedDiscountAmount($appliedDiscountAmount)
    {
      $this->appliedDiscountAmount = $appliedDiscountAmount;
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
     * @return \FreedomPay\Freeway\MobileService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
