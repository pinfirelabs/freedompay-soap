<?php

namespace FreedomPay\Freeway;

class FraudCheckReply
{

    /**
     * @var string $referenceId
     */
    protected $referenceId = null;

    /**
     * @var string $action
     */
    protected $action = null;

    /**
     * @var string $order
     */
    protected $order = null;

    /**
     * @var string $score
     */
    protected $score = null;

    /**
     * @var string $scoreData
     */
    protected $scoreData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
      return $this->referenceId;
    }

    /**
     * @param string $referenceId
     * @return \FreedomPay\Freeway\FraudCheckReply
     */
    public function setReferenceId($referenceId)
    {
      $this->referenceId = $referenceId;
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
     * @return \FreedomPay\Freeway\FraudCheckReply
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param string $order
     * @return \FreedomPay\Freeway\FraudCheckReply
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return string
     */
    public function getScore()
    {
      return $this->score;
    }

    /**
     * @param string $score
     * @return \FreedomPay\Freeway\FraudCheckReply
     */
    public function setScore($score)
    {
      $this->score = $score;
      return $this;
    }

    /**
     * @return string
     */
    public function getScoreData()
    {
      return $this->scoreData;
    }

    /**
     * @param string $scoreData
     * @return \FreedomPay\Freeway\FraudCheckReply
     */
    public function setScoreData($scoreData)
    {
      $this->scoreData = $scoreData;
      return $this;
    }

}
