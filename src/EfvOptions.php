<?php

namespace FreedomPay\Freeway;

class EfvOptions
{

    /**
     * @var string $options
     */
    protected $options = null;

    /**
     * @var string $force
     */
    protected $force = null;

    /**
     * @var string $forceCode
     */
    protected $forceCode = null;

    /**
     * @var string $forceMessage
     */
    protected $forceMessage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param string $options
     * @return \FreedomPay\Freeway\EfvOptions
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return string
     */
    public function getForce()
    {
      return $this->force;
    }

    /**
     * @param string $force
     * @return \FreedomPay\Freeway\EfvOptions
     */
    public function setForce($force)
    {
      $this->force = $force;
      return $this;
    }

    /**
     * @return string
     */
    public function getForceCode()
    {
      return $this->forceCode;
    }

    /**
     * @param string $forceCode
     * @return \FreedomPay\Freeway\EfvOptions
     */
    public function setForceCode($forceCode)
    {
      $this->forceCode = $forceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getForceMessage()
    {
      return $this->forceMessage;
    }

    /**
     * @param string $forceMessage
     * @return \FreedomPay\Freeway\EfvOptions
     */
    public function setForceMessage($forceMessage)
    {
      $this->forceMessage = $forceMessage;
      return $this;
    }

}
