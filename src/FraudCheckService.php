<?php

namespace FreedomPay\Freeway;

class FraudCheckService
{

    /**
     * @var string $referenceId
     */
    protected $referenceId = null;

    /**
     * @var string $option
     */
    protected $option = null;

    /**
     * @var string $mode
     */
    protected $mode = null;

    /**
     * @var string $deviceIdentifier
     */
    protected $deviceIdentifier = null;

    /**
     * @var string $commerceIndicator
     */
    protected $commerceIndicator = null;

    /**
     * @var string $siteIdentifier
     */
    protected $siteIdentifier = null;

    /**
     * @var string $customerSinceDate
     */
    protected $customerSinceDate = null;

    /**
     * @var string $estimatedTotalAmount
     */
    protected $estimatedTotalAmount = null;

    /**
     * @var ArrayOfUserDefinedField $properties
     */
    protected $properties = null;

    /**
     * @var string $runRiskModel
     */
    protected $runRiskModel = null;

    /**
     * @var string $order
     */
    protected $order = null;

    /**
     * @var string $voidThreshold
     */
    protected $voidThreshold = null;

    /**
     * @var string $authData
     */
    protected $authData = null;

    /**
     * @var string $captchaData
     */
    protected $captchaData = null;

    /**
     * @var string $failCount
     */
    protected $failCount = null;

    /**
     * @var ArrayOfString $failedRequests
     */
    protected $failedRequests = null;

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
    public function getReferenceId()
    {
      return $this->referenceId;
    }

    /**
     * @param string $referenceId
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setReferenceId($referenceId)
    {
      $this->referenceId = $referenceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOption()
    {
      return $this->option;
    }

    /**
     * @param string $option
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setOption($option)
    {
      $this->option = $option;
      return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
      return $this->mode;
    }

    /**
     * @param string $mode
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setMode($mode)
    {
      $this->mode = $mode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeviceIdentifier()
    {
      return $this->deviceIdentifier;
    }

    /**
     * @param string $deviceIdentifier
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
      $this->deviceIdentifier = $deviceIdentifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommerceIndicator()
    {
      return $this->commerceIndicator;
    }

    /**
     * @param string $commerceIndicator
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setCommerceIndicator($commerceIndicator)
    {
      $this->commerceIndicator = $commerceIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getSiteIdentifier()
    {
      return $this->siteIdentifier;
    }

    /**
     * @param string $siteIdentifier
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setSiteIdentifier($siteIdentifier)
    {
      $this->siteIdentifier = $siteIdentifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerSinceDate()
    {
      return $this->customerSinceDate;
    }

    /**
     * @param string $customerSinceDate
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setCustomerSinceDate($customerSinceDate)
    {
      $this->customerSinceDate = $customerSinceDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstimatedTotalAmount()
    {
      return $this->estimatedTotalAmount;
    }

    /**
     * @param string $estimatedTotalAmount
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setEstimatedTotalAmount($estimatedTotalAmount)
    {
      $this->estimatedTotalAmount = $estimatedTotalAmount;
      return $this;
    }

    /**
     * @return ArrayOfUserDefinedField
     */
    public function getProperties()
    {
      return $this->properties;
    }

    /**
     * @param ArrayOfUserDefinedField $properties
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setProperties($properties)
    {
      $this->properties = $properties;
      return $this;
    }

    /**
     * @return string
     */
    public function getRunRiskModel()
    {
      return $this->runRiskModel;
    }

    /**
     * @param string $runRiskModel
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setRunRiskModel($runRiskModel)
    {
      $this->runRiskModel = $runRiskModel;
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
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoidThreshold()
    {
      return $this->voidThreshold;
    }

    /**
     * @param string $voidThreshold
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setVoidThreshold($voidThreshold)
    {
      $this->voidThreshold = $voidThreshold;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthData()
    {
      return $this->authData;
    }

    /**
     * @param string $authData
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return string
     */
    public function getCaptchaData()
    {
      return $this->captchaData;
    }

    /**
     * @param string $captchaData
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setCaptchaData($captchaData)
    {
      $this->captchaData = $captchaData;
      return $this;
    }

    /**
     * @return string
     */
    public function getFailCount()
    {
      return $this->failCount;
    }

    /**
     * @param string $failCount
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setFailCount($failCount)
    {
      $this->failCount = $failCount;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getFailedRequests()
    {
      return $this->failedRequests;
    }

    /**
     * @param ArrayOfString $failedRequests
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setFailedRequests($failedRequests)
    {
      $this->failedRequests = $failedRequests;
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
     * @return \FreedomPay\Freeway\FraudCheckService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
