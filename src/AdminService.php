<?php

namespace FreedomPay\Freeway;

class AdminService
{

    /**
     * @var string $serviceType
     */
    protected $serviceType = null;

    /**
     * @var string $termCaps
     */
    protected $termCaps = null;

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
    public function getServiceType()
    {
      return $this->serviceType;
    }

    /**
     * @param string $serviceType
     * @return \FreedomPay\Freeway\AdminService
     */
    public function setServiceType($serviceType)
    {
      $this->serviceType = $serviceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermCaps()
    {
      return $this->termCaps;
    }

    /**
     * @param string $termCaps
     * @return \FreedomPay\Freeway\AdminService
     */
    public function setTermCaps($termCaps)
    {
      $this->termCaps = $termCaps;
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
     * @return \FreedomPay\Freeway\AdminService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
