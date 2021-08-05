<?php

namespace FreedomPay\Freeway;

class Check
{

    /**
     * @var string $bankTransitNumber
     */
    protected $bankTransitNumber = null;

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var string $accountType
     */
    protected $accountType = null;

    /**
     * @var string $checkNumber
     */
    protected $checkNumber = null;

    /**
     * @var string $achAccepted
     */
    protected $achAccepted = null;

    /**
     * @var string $checkType
     */
    protected $checkType = null;

    /**
     * @var string $fullMicr
     */
    protected $fullMicr = null;

    /**
     * @var string $readerStatus
     */
    protected $readerStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBankTransitNumber()
    {
      return $this->bankTransitNumber;
    }

    /**
     * @param string $bankTransitNumber
     * @return \FreedomPay\Freeway\Check
     */
    public function setBankTransitNumber($bankTransitNumber)
    {
      $this->bankTransitNumber = $bankTransitNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \FreedomPay\Freeway\Check
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
      return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return \FreedomPay\Freeway\Check
     */
    public function setAccountType($accountType)
    {
      $this->accountType = $accountType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckNumber()
    {
      return $this->checkNumber;
    }

    /**
     * @param string $checkNumber
     * @return \FreedomPay\Freeway\Check
     */
    public function setCheckNumber($checkNumber)
    {
      $this->checkNumber = $checkNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAchAccepted()
    {
      return $this->achAccepted;
    }

    /**
     * @param string $achAccepted
     * @return \FreedomPay\Freeway\Check
     */
    public function setAchAccepted($achAccepted)
    {
      $this->achAccepted = $achAccepted;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckType()
    {
      return $this->checkType;
    }

    /**
     * @param string $checkType
     * @return \FreedomPay\Freeway\Check
     */
    public function setCheckType($checkType)
    {
      $this->checkType = $checkType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFullMicr()
    {
      return $this->fullMicr;
    }

    /**
     * @param string $fullMicr
     * @return \FreedomPay\Freeway\Check
     */
    public function setFullMicr($fullMicr)
    {
      $this->fullMicr = $fullMicr;
      return $this;
    }

    /**
     * @return string
     */
    public function getReaderStatus()
    {
      return $this->readerStatus;
    }

    /**
     * @param string $readerStatus
     * @return \FreedomPay\Freeway\Check
     */
    public function setReaderStatus($readerStatus)
    {
      $this->readerStatus = $readerStatus;
      return $this;
    }

}
