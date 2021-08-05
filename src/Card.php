<?php

namespace FreedomPay\Freeway;

class Card
{

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var string $accountType
     */
    protected $accountType = null;

    /**
     * @var string $cardType
     */
    protected $cardType = null;

    /**
     * @var string $tokenSubtype
     */
    protected $tokenSubtype = null;

    /**
     * @var string $subtype
     */
    protected $subtype = null;

    /**
     * @var string $issuer
     */
    protected $issuer = null;

    /**
     * @var string $cvIndicator
     */
    protected $cvIndicator = null;

    /**
     * @var string $cvNumber
     */
    protected $cvNumber = null;

    /**
     * @var int $expirationMonth
     */
    protected $expirationMonth = null;

    /**
     * @var int $expirationYear
     */
    protected $expirationYear = null;

    /**
     * @var string $issueNumber
     */
    protected $issueNumber = null;

    /**
     * @var string $nameOnCard
     */
    protected $nameOnCard = null;

    /**
     * @var int $startMonth
     */
    protected $startMonth = null;

    /**
     * @var int $startYear
     */
    protected $startYear = null;

    /**
     * @var string $serviceRestrictionCode
     */
    protected $serviceRestrictionCode = null;

    /**
     * @var string $pinKsn
     */
    protected $pinKsn = null;

    /**
     * @var string $pinBlock
     */
    protected $pinBlock = null;

    /**
     * @var string $voucherNumber
     */
    protected $voucherNumber = null;

    /**
     * @var string $expectedBrand
     */
    protected $expectedBrand = null;

    /**
     * @var string $plData1
     */
    protected $plData1 = null;

    /**
     * @var string $plData2
     */
    protected $plData2 = null;

    /**
     * @var string $pass
     */
    protected $pass = null;

    
    public function __construct()
    {
    
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
     * @return \FreedomPay\Freeway\Card
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
     * @return \FreedomPay\Freeway\Card
     */
    public function setAccountType($accountType)
    {
      $this->accountType = $accountType;
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
     * @return \FreedomPay\Freeway\Card
     */
    public function setCardType($cardType)
    {
      $this->cardType = $cardType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTokenSubtype()
    {
      return $this->tokenSubtype;
    }

    /**
     * @param string $tokenSubtype
     * @return \FreedomPay\Freeway\Card
     */
    public function setTokenSubtype($tokenSubtype)
    {
      $this->tokenSubtype = $tokenSubtype;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubtype()
    {
      return $this->subtype;
    }

    /**
     * @param string $subtype
     * @return \FreedomPay\Freeway\Card
     */
    public function setSubtype($subtype)
    {
      $this->subtype = $subtype;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssuer()
    {
      return $this->issuer;
    }

    /**
     * @param string $issuer
     * @return \FreedomPay\Freeway\Card
     */
    public function setIssuer($issuer)
    {
      $this->issuer = $issuer;
      return $this;
    }

    /**
     * @return string
     */
    public function getCvIndicator()
    {
      return $this->cvIndicator;
    }

    /**
     * @param string $cvIndicator
     * @return \FreedomPay\Freeway\Card
     */
    public function setCvIndicator($cvIndicator)
    {
      $this->cvIndicator = $cvIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getCvNumber()
    {
      return $this->cvNumber;
    }

    /**
     * @param string $cvNumber
     * @return \FreedomPay\Freeway\Card
     */
    public function setCvNumber($cvNumber)
    {
      $this->cvNumber = $cvNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getExpirationMonth()
    {
      return $this->expirationMonth;
    }

    /**
     * @param int $expirationMonth
     * @return \FreedomPay\Freeway\Card
     */
    public function setExpirationMonth($expirationMonth)
    {
      $this->expirationMonth = $expirationMonth;
      return $this;
    }

    /**
     * @return int
     */
    public function getExpirationYear()
    {
      return $this->expirationYear;
    }

    /**
     * @param int $expirationYear
     * @return \FreedomPay\Freeway\Card
     */
    public function setExpirationYear($expirationYear)
    {
      $this->expirationYear = $expirationYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssueNumber()
    {
      return $this->issueNumber;
    }

    /**
     * @param string $issueNumber
     * @return \FreedomPay\Freeway\Card
     */
    public function setIssueNumber($issueNumber)
    {
      $this->issueNumber = $issueNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameOnCard()
    {
      return $this->nameOnCard;
    }

    /**
     * @param string $nameOnCard
     * @return \FreedomPay\Freeway\Card
     */
    public function setNameOnCard($nameOnCard)
    {
      $this->nameOnCard = $nameOnCard;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartMonth()
    {
      return $this->startMonth;
    }

    /**
     * @param int $startMonth
     * @return \FreedomPay\Freeway\Card
     */
    public function setStartMonth($startMonth)
    {
      $this->startMonth = $startMonth;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartYear()
    {
      return $this->startYear;
    }

    /**
     * @param int $startYear
     * @return \FreedomPay\Freeway\Card
     */
    public function setStartYear($startYear)
    {
      $this->startYear = $startYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceRestrictionCode()
    {
      return $this->serviceRestrictionCode;
    }

    /**
     * @param string $serviceRestrictionCode
     * @return \FreedomPay\Freeway\Card
     */
    public function setServiceRestrictionCode($serviceRestrictionCode)
    {
      $this->serviceRestrictionCode = $serviceRestrictionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPinKsn()
    {
      return $this->pinKsn;
    }

    /**
     * @param string $pinKsn
     * @return \FreedomPay\Freeway\Card
     */
    public function setPinKsn($pinKsn)
    {
      $this->pinKsn = $pinKsn;
      return $this;
    }

    /**
     * @return string
     */
    public function getPinBlock()
    {
      return $this->pinBlock;
    }

    /**
     * @param string $pinBlock
     * @return \FreedomPay\Freeway\Card
     */
    public function setPinBlock($pinBlock)
    {
      $this->pinBlock = $pinBlock;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoucherNumber()
    {
      return $this->voucherNumber;
    }

    /**
     * @param string $voucherNumber
     * @return \FreedomPay\Freeway\Card
     */
    public function setVoucherNumber($voucherNumber)
    {
      $this->voucherNumber = $voucherNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpectedBrand()
    {
      return $this->expectedBrand;
    }

    /**
     * @param string $expectedBrand
     * @return \FreedomPay\Freeway\Card
     */
    public function setExpectedBrand($expectedBrand)
    {
      $this->expectedBrand = $expectedBrand;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlData1()
    {
      return $this->plData1;
    }

    /**
     * @param string $plData1
     * @return \FreedomPay\Freeway\Card
     */
    public function setPlData1($plData1)
    {
      $this->plData1 = $plData1;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlData2()
    {
      return $this->plData2;
    }

    /**
     * @param string $plData2
     * @return \FreedomPay\Freeway\Card
     */
    public function setPlData2($plData2)
    {
      $this->plData2 = $plData2;
      return $this;
    }

    /**
     * @return string
     */
    public function getPass()
    {
      return $this->pass;
    }

    /**
     * @param string $pass
     * @return \FreedomPay\Freeway\Card
     */
    public function setPass($pass)
    {
      $this->pass = $pass;
      return $this;
    }

}
