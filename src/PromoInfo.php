<?php

namespace FreedomPay\Freeway;

class PromoInfo
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $desc
     */
    protected $desc = null;

    /**
     * @var string $hints
     */
    protected $hints = null;

    /**
     * @var string $buydown
     */
    protected $buydown = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $moreInfo
     */
    protected $moreInfo = null;

    /**
     * @var string $disclaim
     */
    protected $disclaim = null;

    /**
     * @var string $threshold
     */
    protected $threshold = null;

    /**
     * @var string $paymentApr
     */
    protected $paymentApr = null;

    /**
     * @var string $paymentCount
     */
    protected $paymentCount = null;

    /**
     * @var string $apr
     */
    protected $apr = null;

    /**
     * @var string $payments
     */
    protected $payments = null;

    /**
     * @var string $days
     */
    protected $days = null;

    /**
     * @var string $untilDate
     */
    protected $untilDate = null;

    /**
     * @param string $code
     * @param string $desc
     * @param string $hints
     * @param string $buydown
     * @param string $type
     * @param string $moreInfo
     * @param string $disclaim
     * @param string $threshold
     * @param string $paymentApr
     * @param string $paymentCount
     * @param string $apr
     * @param string $payments
     * @param string $days
     * @param string $untilDate
     */
    public function __construct($code, $desc, $hints, $buydown, $type, $moreInfo, $disclaim, $threshold, $paymentApr, $paymentCount, $apr, $payments, $days, $untilDate)
    {
      $this->code = $code;
      $this->desc = $desc;
      $this->hints = $hints;
      $this->buydown = $buydown;
      $this->type = $type;
      $this->moreInfo = $moreInfo;
      $this->disclaim = $disclaim;
      $this->threshold = $threshold;
      $this->paymentApr = $paymentApr;
      $this->paymentCount = $paymentCount;
      $this->apr = $apr;
      $this->payments = $payments;
      $this->days = $days;
      $this->untilDate = $untilDate;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDesc()
    {
      return $this->desc;
    }

    /**
     * @param string $desc
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setDesc($desc)
    {
      $this->desc = $desc;
      return $this;
    }

    /**
     * @return string
     */
    public function getHints()
    {
      return $this->hints;
    }

    /**
     * @param string $hints
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setHints($hints)
    {
      $this->hints = $hints;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuydown()
    {
      return $this->buydown;
    }

    /**
     * @param string $buydown
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setBuydown($buydown)
    {
      $this->buydown = $buydown;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getMoreInfo()
    {
      return $this->moreInfo;
    }

    /**
     * @param string $moreInfo
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setMoreInfo($moreInfo)
    {
      $this->moreInfo = $moreInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisclaim()
    {
      return $this->disclaim;
    }

    /**
     * @param string $disclaim
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setDisclaim($disclaim)
    {
      $this->disclaim = $disclaim;
      return $this;
    }

    /**
     * @return string
     */
    public function getThreshold()
    {
      return $this->threshold;
    }

    /**
     * @param string $threshold
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setThreshold($threshold)
    {
      $this->threshold = $threshold;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentApr()
    {
      return $this->paymentApr;
    }

    /**
     * @param string $paymentApr
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setPaymentApr($paymentApr)
    {
      $this->paymentApr = $paymentApr;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentCount()
    {
      return $this->paymentCount;
    }

    /**
     * @param string $paymentCount
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setPaymentCount($paymentCount)
    {
      $this->paymentCount = $paymentCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getApr()
    {
      return $this->apr;
    }

    /**
     * @param string $apr
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setApr($apr)
    {
      $this->apr = $apr;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayments()
    {
      return $this->payments;
    }

    /**
     * @param string $payments
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setPayments($payments)
    {
      $this->payments = $payments;
      return $this;
    }

    /**
     * @return string
     */
    public function getDays()
    {
      return $this->days;
    }

    /**
     * @param string $days
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setDays($days)
    {
      $this->days = $days;
      return $this;
    }

    /**
     * @return string
     */
    public function getUntilDate()
    {
      return $this->untilDate;
    }

    /**
     * @param string $untilDate
     * @return \FreedomPay\Freeway\PromoInfo
     */
    public function setUntilDate($untilDate)
    {
      $this->untilDate = $untilDate;
      return $this;
    }

}
