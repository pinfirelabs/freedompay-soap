<?php

namespace FreedomPay\Freeway;

class OfflineControl
{

    /**
     * @var string $dtk
     */
    protected $dtk = null;

    /**
     * @var string $retryCount
     */
    protected $retryCount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDtk()
    {
      return $this->dtk;
    }

    /**
     * @param string $dtk
     * @return \FreedomPay\Freeway\OfflineControl
     */
    public function setDtk($dtk)
    {
      $this->dtk = $dtk;
      return $this;
    }

    /**
     * @return string
     */
    public function getRetryCount()
    {
      return $this->retryCount;
    }

    /**
     * @param string $retryCount
     * @return \FreedomPay\Freeway\OfflineControl
     */
    public function setRetryCount($retryCount)
    {
      $this->retryCount = $retryCount;
      return $this;
    }

}
