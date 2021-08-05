<?php

namespace FreedomPay\Freeway;

class EodService
{

    /**
     * @var string $level
     */
    protected $level = null;

    /**
     * @var string $groupCode
     */
    protected $groupCode = null;

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
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param string $level
     * @return \FreedomPay\Freeway\EodService
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupCode()
    {
      return $this->groupCode;
    }

    /**
     * @param string $groupCode
     * @return \FreedomPay\Freeway\EodService
     */
    public function setGroupCode($groupCode)
    {
      $this->groupCode = $groupCode;
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
     * @return \FreedomPay\Freeway\EodService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
