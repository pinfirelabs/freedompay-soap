<?php

namespace FreedomPay\Freeway;

class IncentiveReply
{

    /**
     * @var int $reasonCode
     */
    protected $reasonCode = null;

    /**
     * @var string $pointsSpent
     */
    protected $pointsSpent = null;

    /**
     * @var string $pointsEarned
     */
    protected $pointsEarned = null;

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getReasonCode()
    {
      return $this->reasonCode;
    }

    /**
     * @param int $reasonCode
     * @return \FreedomPay\Freeway\IncentiveReply
     */
    public function setReasonCode($reasonCode)
    {
      $this->reasonCode = $reasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointsSpent()
    {
      return $this->pointsSpent;
    }

    /**
     * @param string $pointsSpent
     * @return \FreedomPay\Freeway\IncentiveReply
     */
    public function setPointsSpent($pointsSpent)
    {
      $this->pointsSpent = $pointsSpent;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointsEarned()
    {
      return $this->pointsEarned;
    }

    /**
     * @param string $pointsEarned
     * @return \FreedomPay\Freeway\IncentiveReply
     */
    public function setPointsEarned($pointsEarned)
    {
      $this->pointsEarned = $pointsEarned;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return \FreedomPay\Freeway\IncentiveReply
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

}
