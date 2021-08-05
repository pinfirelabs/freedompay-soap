<?php

namespace FreedomPay\Freeway;

class MobileReply
{

    /**
     * @var string $tipProvided
     */
    protected $tipProvided = null;

    /**
     * @var string $tipAmount
     */
    protected $tipAmount = null;

    /**
     * @var string $paymentSessionId
     */
    protected $paymentSessionId = null;

    /**
     * @var string $paySeq
     */
    protected $paySeq = null;

    /**
     * @var string $nextPaySeq
     */
    protected $nextPaySeq = null;

    /**
     * @var string $barData
     */
    protected $barData = null;

    /**
     * @var string $appliedDiscountAmount
     */
    protected $appliedDiscountAmount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTipProvided()
    {
      return $this->tipProvided;
    }

    /**
     * @param string $tipProvided
     * @return \FreedomPay\Freeway\MobileReply
     */
    public function setTipProvided($tipProvided)
    {
      $this->tipProvided = $tipProvided;
      return $this;
    }

    /**
     * @return string
     */
    public function getTipAmount()
    {
      return $this->tipAmount;
    }

    /**
     * @param string $tipAmount
     * @return \FreedomPay\Freeway\MobileReply
     */
    public function setTipAmount($tipAmount)
    {
      $this->tipAmount = $tipAmount;
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
     * @return \FreedomPay\Freeway\MobileReply
     */
    public function setPaymentSessionId($paymentSessionId)
    {
      $this->paymentSessionId = $paymentSessionId;
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
     * @return \FreedomPay\Freeway\MobileReply
     */
    public function setPaySeq($paySeq)
    {
      $this->paySeq = $paySeq;
      return $this;
    }

    /**
     * @return string
     */
    public function getNextPaySeq()
    {
      return $this->nextPaySeq;
    }

    /**
     * @param string $nextPaySeq
     * @return \FreedomPay\Freeway\MobileReply
     */
    public function setNextPaySeq($nextPaySeq)
    {
      $this->nextPaySeq = $nextPaySeq;
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
     * @return \FreedomPay\Freeway\MobileReply
     */
    public function setBarData($barData)
    {
      $this->barData = $barData;
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
     * @return \FreedomPay\Freeway\MobileReply
     */
    public function setAppliedDiscountAmount($appliedDiscountAmount)
    {
      $this->appliedDiscountAmount = $appliedDiscountAmount;
      return $this;
    }

}
