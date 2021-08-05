<?php

namespace FreedomPay\Freeway;

class LoyaltyProgramData
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $spent
     */
    protected $spent = null;

    /**
     * @var string $earned
     */
    protected $earned = null;

    /**
     * @var string $balance
     */
    protected $balance = null;

    /**
     * @var string $receipt
     */
    protected $receipt = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \FreedomPay\Freeway\LoyaltyProgramData
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpent()
    {
      return $this->spent;
    }

    /**
     * @param string $spent
     * @return \FreedomPay\Freeway\LoyaltyProgramData
     */
    public function setSpent($spent)
    {
      $this->spent = $spent;
      return $this;
    }

    /**
     * @return string
     */
    public function getEarned()
    {
      return $this->earned;
    }

    /**
     * @param string $earned
     * @return \FreedomPay\Freeway\LoyaltyProgramData
     */
    public function setEarned($earned)
    {
      $this->earned = $earned;
      return $this;
    }

    /**
     * @return string
     */
    public function getBalance()
    {
      return $this->balance;
    }

    /**
     * @param string $balance
     * @return \FreedomPay\Freeway\LoyaltyProgramData
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceipt()
    {
      return $this->receipt;
    }

    /**
     * @param string $receipt
     * @return \FreedomPay\Freeway\LoyaltyProgramData
     */
    public function setReceipt($receipt)
    {
      $this->receipt = $receipt;
      return $this;
    }

}
