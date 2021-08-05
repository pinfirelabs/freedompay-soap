<?php

namespace FreedomPay\Freeway;

class TokenInformation
{

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @var string $accountNumberMasked
     */
    protected $accountNumberMasked = null;

    /**
     * @var string $cardExpirationMonth
     */
    protected $cardExpirationMonth = null;

    /**
     * @var string $cardExpirationYear
     */
    protected $cardExpirationYear = null;

    /**
     * @var string $brand
     */
    protected $brand = null;

    /**
     * @var string $posCardType
     */
    protected $posCardType = null;

    /**
     * @var string $cardType
     */
    protected $cardType = null;

    /**
     * @var string $tokenExpiration
     */
    protected $tokenExpiration = null;

    /**
     * @var string $posData
     */
    protected $posData = null;

    /**
     * @var string $newToken
     */
    protected $newToken = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \FreedomPay\Freeway\TokenInformation
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumberMasked()
    {
      return $this->accountNumberMasked;
    }

    /**
     * @param string $accountNumberMasked
     * @return \FreedomPay\Freeway\TokenInformation
     */
    public function setAccountNumberMasked($accountNumberMasked)
    {
      $this->accountNumberMasked = $accountNumberMasked;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardExpirationMonth()
    {
      return $this->cardExpirationMonth;
    }

    /**
     * @param string $cardExpirationMonth
     * @return \FreedomPay\Freeway\TokenInformation
     */
    public function setCardExpirationMonth($cardExpirationMonth)
    {
      $this->cardExpirationMonth = $cardExpirationMonth;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardExpirationYear()
    {
      return $this->cardExpirationYear;
    }

    /**
     * @param string $cardExpirationYear
     * @return \FreedomPay\Freeway\TokenInformation
     */
    public function setCardExpirationYear($cardExpirationYear)
    {
      $this->cardExpirationYear = $cardExpirationYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
      return $this->brand;
    }

    /**
     * @param string $brand
     * @return \FreedomPay\Freeway\TokenInformation
     */
    public function setBrand($brand)
    {
      $this->brand = $brand;
      return $this;
    }

    /**
     * @return string
     */
    public function getPosCardType()
    {
      return $this->posCardType;
    }

    /**
     * @param string $posCardType
     * @return \FreedomPay\Freeway\TokenInformation
     */
    public function setPosCardType($posCardType)
    {
      $this->posCardType = $posCardType;
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
     * @return \FreedomPay\Freeway\TokenInformation
     */
    public function setCardType($cardType)
    {
      $this->cardType = $cardType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTokenExpiration()
    {
      return $this->tokenExpiration;
    }

    /**
     * @param string $tokenExpiration
     * @return \FreedomPay\Freeway\TokenInformation
     */
    public function setTokenExpiration($tokenExpiration)
    {
      $this->tokenExpiration = $tokenExpiration;
      return $this;
    }

    /**
     * @return string
     */
    public function getPosData()
    {
      return $this->posData;
    }

    /**
     * @param string $posData
     * @return \FreedomPay\Freeway\TokenInformation
     */
    public function setPosData($posData)
    {
      $this->posData = $posData;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewToken()
    {
      return $this->newToken;
    }

    /**
     * @param string $newToken
     * @return \FreedomPay\Freeway\TokenInformation
     */
    public function setNewToken($newToken)
    {
      $this->newToken = $newToken;
      return $this;
    }

}
