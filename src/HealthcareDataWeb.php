<?php

namespace FreedomPay\Freeway;

class HealthcareDataWeb
{

    /**
     * @var string $totalAmount
     */
    protected $totalAmount = null;

    /**
     * @var string $rx
     */
    protected $rx = null;

    /**
     * @var string $vision
     */
    protected $vision = null;

    /**
     * @var string $clinic
     */
    protected $clinic = null;

    /**
     * @var string $dental
     */
    protected $dental = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTotalAmount()
    {
      return $this->totalAmount;
    }

    /**
     * @param string $totalAmount
     * @return \FreedomPay\Freeway\HealthcareDataWeb
     */
    public function setTotalAmount($totalAmount)
    {
      $this->totalAmount = $totalAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRx()
    {
      return $this->rx;
    }

    /**
     * @param string $rx
     * @return \FreedomPay\Freeway\HealthcareDataWeb
     */
    public function setRx($rx)
    {
      $this->rx = $rx;
      return $this;
    }

    /**
     * @return string
     */
    public function getVision()
    {
      return $this->vision;
    }

    /**
     * @param string $vision
     * @return \FreedomPay\Freeway\HealthcareDataWeb
     */
    public function setVision($vision)
    {
      $this->vision = $vision;
      return $this;
    }

    /**
     * @return string
     */
    public function getClinic()
    {
      return $this->clinic;
    }

    /**
     * @param string $clinic
     * @return \FreedomPay\Freeway\HealthcareDataWeb
     */
    public function setClinic($clinic)
    {
      $this->clinic = $clinic;
      return $this;
    }

    /**
     * @return string
     */
    public function getDental()
    {
      return $this->dental;
    }

    /**
     * @param string $dental
     * @return \FreedomPay\Freeway\HealthcareDataWeb
     */
    public function setDental($dental)
    {
      $this->dental = $dental;
      return $this;
    }

}
