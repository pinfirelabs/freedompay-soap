<?php

namespace FreedomPay\Freeway;

class PurchaseTotals
{

    /**
     * @var TaxDetail $taxDetail
     */
    protected $taxDetail = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var string $discountTotal
     */
    protected $discountTotal = null;

    /**
     * @var string $dutyTotal
     */
    protected $dutyTotal = null;

    /**
     * @var string $freightTotal
     */
    protected $freightTotal = null;

    /**
     * @var string $taxTotal
     */
    protected $taxTotal = null;

    /**
     * @var string $tipAmount
     */
    protected $tipAmount = null;

    /**
     * @var string $debitSurcharge
     */
    protected $debitSurcharge = null;

    /**
     * @var string $cashBackAmount
     */
    protected $cashBackAmount = null;

    /**
     * @var string $overtender
     */
    protected $overtender = null;

    /**
     * @var string $invoiceTotal
     */
    protected $invoiceTotal = null;

    /**
     * @var string $serviceCharge
     */
    protected $serviceCharge = null;

    /**
     * @var string $eidAmount
     */
    protected $eidAmount = null;

    /**
     * @var string $chargeAmount
     */
    protected $chargeAmount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxDetail
     */
    public function getTaxDetail()
    {
      return $this->taxDetail;
    }

    /**
     * @param TaxDetail $taxDetail
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setTaxDetail($taxDetail)
    {
      $this->taxDetail = $taxDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountTotal()
    {
      return $this->discountTotal;
    }

    /**
     * @param string $discountTotal
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setDiscountTotal($discountTotal)
    {
      $this->discountTotal = $discountTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getDutyTotal()
    {
      return $this->dutyTotal;
    }

    /**
     * @param string $dutyTotal
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setDutyTotal($dutyTotal)
    {
      $this->dutyTotal = $dutyTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreightTotal()
    {
      return $this->freightTotal;
    }

    /**
     * @param string $freightTotal
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setFreightTotal($freightTotal)
    {
      $this->freightTotal = $freightTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxTotal()
    {
      return $this->taxTotal;
    }

    /**
     * @param string $taxTotal
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setTaxTotal($taxTotal)
    {
      $this->taxTotal = $taxTotal;
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
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setTipAmount($tipAmount)
    {
      $this->tipAmount = $tipAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebitSurcharge()
    {
      return $this->debitSurcharge;
    }

    /**
     * @param string $debitSurcharge
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setDebitSurcharge($debitSurcharge)
    {
      $this->debitSurcharge = $debitSurcharge;
      return $this;
    }

    /**
     * @return string
     */
    public function getCashBackAmount()
    {
      return $this->cashBackAmount;
    }

    /**
     * @param string $cashBackAmount
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setCashBackAmount($cashBackAmount)
    {
      $this->cashBackAmount = $cashBackAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getOvertender()
    {
      return $this->overtender;
    }

    /**
     * @param string $overtender
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setOvertender($overtender)
    {
      $this->overtender = $overtender;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceTotal()
    {
      return $this->invoiceTotal;
    }

    /**
     * @param string $invoiceTotal
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setInvoiceTotal($invoiceTotal)
    {
      $this->invoiceTotal = $invoiceTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceCharge()
    {
      return $this->serviceCharge;
    }

    /**
     * @param string $serviceCharge
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setServiceCharge($serviceCharge)
    {
      $this->serviceCharge = $serviceCharge;
      return $this;
    }

    /**
     * @return string
     */
    public function getEidAmount()
    {
      return $this->eidAmount;
    }

    /**
     * @param string $eidAmount
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setEidAmount($eidAmount)
    {
      $this->eidAmount = $eidAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeAmount()
    {
      return $this->chargeAmount;
    }

    /**
     * @param string $chargeAmount
     * @return \FreedomPay\Freeway\PurchaseTotals
     */
    public function setChargeAmount($chargeAmount)
    {
      $this->chargeAmount = $chargeAmount;
      return $this;
    }

}
