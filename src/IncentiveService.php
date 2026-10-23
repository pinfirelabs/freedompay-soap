<?php

namespace FreedomPay\Freeway;

class IncentiveService
{

    /**
     * @var string $systemId
     */
    protected $systemId = null;

    /**
     * @var string $consumerIdentifierType
     */
    protected $consumerIdentifierType = null;

    /**
     * @var string $consumerIdentifier
     */
    protected $consumerIdentifier = null;

    /**
     * @var string $additionalData
     */
    protected $additionalData = null;

    /**
     * @var string $additionalDataType
     */
    protected $additionalDataType = null;

    /**
     * @var IncentiveIncentive[] $incentives
     */
    protected $incentives = null;

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
    public function getSystemId()
    {
      return $this->systemId;
    }

    /**
     * @param string $systemId
     * @return \FreedomPay\Freeway\IncentiveService
     */
    public function setSystemId($systemId)
    {
      $this->systemId = $systemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsumerIdentifierType()
    {
      return $this->consumerIdentifierType;
    }

    /**
     * @param string $consumerIdentifierType
     * @return \FreedomPay\Freeway\IncentiveService
     */
    public function setConsumerIdentifierType($consumerIdentifierType)
    {
      $this->consumerIdentifierType = $consumerIdentifierType;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsumerIdentifier()
    {
      return $this->consumerIdentifier;
    }

    /**
     * @param string $consumerIdentifier
     * @return \FreedomPay\Freeway\IncentiveService
     */
    public function setConsumerIdentifier($consumerIdentifier)
    {
      $this->consumerIdentifier = $consumerIdentifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalData()
    {
      return $this->additionalData;
    }

    /**
     * @param string $additionalData
     * @return \FreedomPay\Freeway\IncentiveService
     */
    public function setAdditionalData($additionalData)
    {
      $this->additionalData = $additionalData;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalDataType()
    {
      return $this->additionalDataType;
    }

    /**
     * @param string $additionalDataType
     * @return \FreedomPay\Freeway\IncentiveService
     */
    public function setAdditionalDataType($additionalDataType)
    {
      $this->additionalDataType = $additionalDataType;
      return $this;
    }

    /**
     * @return IncentiveIncentive[]
     */
    public function getIncentives()
    {
      return $this->incentives;
    }

    /**
     * @param IncentiveIncentive[] $incentives
     * @return \FreedomPay\Freeway\IncentiveService
     */
    public function setIncentives(?array $incentives = null)
    {
      $this->incentives = $incentives;
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
     * @return \FreedomPay\Freeway\IncentiveService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
