<?php

namespace FreedomPay\Freeway;

class PromoService
{

    /**
     * @var string $options
     */
    protected $options = null;

    /**
     * @var string $action
     */
    protected $action = null;

    /**
     * @var string $scenarioCode
     */
    protected $scenarioCode = null;

    /**
     * @var string $programCode
     */
    protected $programCode = null;

    /**
     * @var string $quickPromo
     */
    protected $quickPromo = null;

    /**
     * @var string $forceCode
     */
    protected $forceCode = null;

    /**
     * @var string $forceMessage
     */
    protected $forceMessage = null;

    /**
     * @var string $validationCode
     */
    protected $validationCode = null;

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
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param string $options
     * @return \FreedomPay\Freeway\PromoService
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param string $action
     * @return \FreedomPay\Freeway\PromoService
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
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
     * @return \FreedomPay\Freeway\PromoService
     */
    public function setScenarioCode($scenarioCode)
    {
      $this->scenarioCode = $scenarioCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgramCode()
    {
      return $this->programCode;
    }

    /**
     * @param string $programCode
     * @return \FreedomPay\Freeway\PromoService
     */
    public function setProgramCode($programCode)
    {
      $this->programCode = $programCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuickPromo()
    {
      return $this->quickPromo;
    }

    /**
     * @param string $quickPromo
     * @return \FreedomPay\Freeway\PromoService
     */
    public function setQuickPromo($quickPromo)
    {
      $this->quickPromo = $quickPromo;
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
     * @return \FreedomPay\Freeway\PromoService
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
     * @return \FreedomPay\Freeway\PromoService
     */
    public function setForceMessage($forceMessage)
    {
      $this->forceMessage = $forceMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getValidationCode()
    {
      return $this->validationCode;
    }

    /**
     * @param string $validationCode
     * @return \FreedomPay\Freeway\PromoService
     */
    public function setValidationCode($validationCode)
    {
      $this->validationCode = $validationCode;
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
     * @return \FreedomPay\Freeway\PromoService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
