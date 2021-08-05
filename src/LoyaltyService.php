<?php

namespace FreedomPay\Freeway;

class LoyaltyService
{

    /**
     * @var string $cardType
     */
    protected $cardType = null;

    /**
     * @var string $cardNumber
     */
    protected $cardNumber = null;

    /**
     * @var string $appId
     */
    protected $appId = null;

    /**
     * @var string $idBlock
     */
    protected $idBlock = null;

    /**
     * @var string $idKsn
     */
    protected $idKsn = null;

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
    public function getCardType()
    {
      return $this->cardType;
    }

    /**
     * @param string $cardType
     * @return \FreedomPay\Freeway\LoyaltyService
     */
    public function setCardType($cardType)
    {
      $this->cardType = $cardType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
      return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     * @return \FreedomPay\Freeway\LoyaltyService
     */
    public function setCardNumber($cardNumber)
    {
      $this->cardNumber = $cardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
      return $this->appId;
    }

    /**
     * @param string $appId
     * @return \FreedomPay\Freeway\LoyaltyService
     */
    public function setAppId($appId)
    {
      $this->appId = $appId;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdBlock()
    {
      return $this->idBlock;
    }

    /**
     * @param string $idBlock
     * @return \FreedomPay\Freeway\LoyaltyService
     */
    public function setIdBlock($idBlock)
    {
      $this->idBlock = $idBlock;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdKsn()
    {
      return $this->idKsn;
    }

    /**
     * @param string $idKsn
     * @return \FreedomPay\Freeway\LoyaltyService
     */
    public function setIdKsn($idKsn)
    {
      $this->idKsn = $idKsn;
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
     * @return \FreedomPay\Freeway\LoyaltyService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
