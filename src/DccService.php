<?php

namespace FreedomPay\Freeway;

class DccService
{

    /**
     * @var string $bin
     */
    protected $bin = null;

    /**
     * @var string $amount
     */
    protected $amount = null;

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
    public function getBin()
    {
      return $this->bin;
    }

    /**
     * @param string $bin
     * @return \FreedomPay\Freeway\DccService
     */
    public function setBin($bin)
    {
      $this->bin = $bin;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param string $amount
     * @return \FreedomPay\Freeway\DccService
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \FreedomPay\Freeway\DccService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
