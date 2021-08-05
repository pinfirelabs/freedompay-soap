<?php

namespace FreedomPay\Freeway;

class SessionService
{

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
    public function getRun()
    {
      return $this->run;
    }

    /**
     * @param string $run
     * @return \FreedomPay\Freeway\SessionService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
