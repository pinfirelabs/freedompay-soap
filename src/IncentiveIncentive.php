<?php

namespace FreedomPay\Freeway;

class IncentiveIncentive
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $presented
     */
    protected $presented = null;

    /**
     * @var string $accepted
     */
    protected $accepted = null;

    /**
     * @var string $tenderRequestId
     */
    protected $tenderRequestId = null;

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
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \FreedomPay\Freeway\IncentiveIncentive
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getPresented()
    {
      return $this->presented;
    }

    /**
     * @param string $presented
     * @return \FreedomPay\Freeway\IncentiveIncentive
     */
    public function setPresented($presented)
    {
      $this->presented = $presented;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccepted()
    {
      return $this->accepted;
    }

    /**
     * @param string $accepted
     * @return \FreedomPay\Freeway\IncentiveIncentive
     */
    public function setAccepted($accepted)
    {
      $this->accepted = $accepted;
      return $this;
    }

    /**
     * @return string
     */
    public function getTenderRequestId()
    {
      return $this->tenderRequestId;
    }

    /**
     * @param string $tenderRequestId
     * @return \FreedomPay\Freeway\IncentiveIncentive
     */
    public function setTenderRequestId($tenderRequestId)
    {
      $this->tenderRequestId = $tenderRequestId;
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
     * @return \FreedomPay\Freeway\IncentiveIncentive
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
