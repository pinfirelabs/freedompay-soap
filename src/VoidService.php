<?php

namespace FreedomPay\Freeway;

class VoidService
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @var string $offline
     */
    protected $offline = null;

    /**
     * @var string $offlineCode
     */
    protected $offlineCode = null;

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
    public function getReason()
    {
      return $this->reason;
    }

    /**
     * @param string $reason
     * @return \FreedomPay\Freeway\VoidService
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return string
     */
    public function getOffline()
    {
      return $this->offline;
    }

    /**
     * @param string $offline
     * @return \FreedomPay\Freeway\VoidService
     */
    public function setOffline($offline)
    {
      $this->offline = $offline;
      return $this;
    }

    /**
     * @return string
     */
    public function getOfflineCode()
    {
      return $this->offlineCode;
    }

    /**
     * @param string $offlineCode
     * @return \FreedomPay\Freeway\VoidService
     */
    public function setOfflineCode($offlineCode)
    {
      $this->offlineCode = $offlineCode;
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
     * @return \FreedomPay\Freeway\VoidService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
