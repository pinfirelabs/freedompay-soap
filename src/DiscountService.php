<?php

namespace FreedomPay\Freeway;

class DiscountService
{

    /**
     * @var string $scenarioCode
     */
    protected $scenarioCode = null;

    /**
     * @var string $options
     */
    protected $options = null;

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
    public function getScenarioCode()
    {
      return $this->scenarioCode;
    }

    /**
     * @param string $scenarioCode
     * @return \FreedomPay\Freeway\DiscountService
     */
    public function setScenarioCode($scenarioCode)
    {
      $this->scenarioCode = $scenarioCode;
      return $this;
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
     * @return \FreedomPay\Freeway\DiscountService
     */
    public function setOptions($options)
    {
      $this->options = $options;
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
     * @return \FreedomPay\Freeway\DiscountService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
