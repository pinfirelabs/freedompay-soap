<?php

namespace FreedomPay\Freeway;

class TokenCreateService
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $disableVerification
     */
    protected $disableVerification = null;

    /**
     * @var string $posData
     */
    protected $posData = null;

    /**
     * @var string $dynExp
     */
    protected $dynExp = null;

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
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \FreedomPay\Freeway\TokenCreateService
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisableVerification()
    {
      return $this->disableVerification;
    }

    /**
     * @param string $disableVerification
     * @return \FreedomPay\Freeway\TokenCreateService
     */
    public function setDisableVerification($disableVerification)
    {
      $this->disableVerification = $disableVerification;
      return $this;
    }

    /**
     * @return string
     */
    public function getPosData()
    {
      return $this->posData;
    }

    /**
     * @param string $posData
     * @return \FreedomPay\Freeway\TokenCreateService
     */
    public function setPosData($posData)
    {
      $this->posData = $posData;
      return $this;
    }

    /**
     * @return string
     */
    public function getDynExp()
    {
      return $this->dynExp;
    }

    /**
     * @param string $dynExp
     * @return \FreedomPay\Freeway\TokenCreateService
     */
    public function setDynExp($dynExp)
    {
      $this->dynExp = $dynExp;
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
     * @return \FreedomPay\Freeway\TokenCreateService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
