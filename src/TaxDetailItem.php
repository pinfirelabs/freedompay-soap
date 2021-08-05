<?php

namespace FreedomPay\Freeway;

class TaxDetailItem
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $amount
     */
    protected $amount = null;

    /**
     * @param string $type
     * @param string $amount
     */
    public function __construct($type, $amount)
    {
      $this->type = $type;
      $this->amount = $amount;
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
     * @return \FreedomPay\Freeway\TaxDetailItem
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \FreedomPay\Freeway\TaxDetailItem
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
