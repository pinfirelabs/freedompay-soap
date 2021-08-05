<?php

namespace FreedomPay\Freeway;

class NetworkData
{

    /**
     * @var string $network
     */
    protected $network = null;

    /**
     * @var string $stan
     */
    protected $stan = null;

    /**
     * @var string $aci
     */
    protected $aci = null;

    /**
     * @var string $tdcc
     */
    protected $tdcc = null;

    /**
     * @var string $pcode
     */
    protected $pcode = null;

    /**
     * @var string $vcode
     */
    protected $vcode = null;

    /**
     * @var string $downgradeCode
     */
    protected $downgradeCode = null;

    /**
     * @var string $cvcError
     */
    protected $cvcError = null;

    /**
     * @var string $dataError
     */
    protected $dataError = null;

    /**
     * @var string $authSource
     */
    protected $authSource = null;

    /**
     * @var string $responseCode
     */
    protected $responseCode = null;

    /**
     * @var string $productId
     */
    protected $productId = null;

    /**
     * @var string $programId
     */
    protected $programId = null;

    /**
     * @var string $merchantAdvice
     */
    protected $merchantAdvice = null;

    /**
     * @var string $serviceOption
     */
    protected $serviceOption = null;

    /**
     * @var string $fleetPrompts
     */
    protected $fleetPrompts = null;

    /**
     * @var ArrayOfNetworkCustomData $customData
     */
    protected $customData = null;

    /**
     * @var string $mac
     */
    protected $mac = null;

    /**
     * @var string $posSeqNum
     */
    protected $posSeqNum = null;

    /**
     * @var string $macKey
     */
    protected $macKey = null;

    /**
     * @var string $pinKey
     */
    protected $pinKey = null;

    /**
     * @var string $fieldKey
     */
    protected $fieldKey = null;

    /**
     * @var string $transDate
     */
    protected $transDate = null;

    /**
     * @var string $transTime
     */
    protected $transTime = null;

    /**
     * @var string $hostControlData
     */
    protected $hostControlData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getNetwork()
    {
      return $this->network;
    }

    /**
     * @param string $network
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setNetwork($network)
    {
      $this->network = $network;
      return $this;
    }

    /**
     * @return string
     */
    public function getStan()
    {
      return $this->stan;
    }

    /**
     * @param string $stan
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setStan($stan)
    {
      $this->stan = $stan;
      return $this;
    }

    /**
     * @return string
     */
    public function getAci()
    {
      return $this->aci;
    }

    /**
     * @param string $aci
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setAci($aci)
    {
      $this->aci = $aci;
      return $this;
    }

    /**
     * @return string
     */
    public function getTdcc()
    {
      return $this->tdcc;
    }

    /**
     * @param string $tdcc
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setTdcc($tdcc)
    {
      $this->tdcc = $tdcc;
      return $this;
    }

    /**
     * @return string
     */
    public function getPcode()
    {
      return $this->pcode;
    }

    /**
     * @param string $pcode
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setPcode($pcode)
    {
      $this->pcode = $pcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getVcode()
    {
      return $this->vcode;
    }

    /**
     * @param string $vcode
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setVcode($vcode)
    {
      $this->vcode = $vcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDowngradeCode()
    {
      return $this->downgradeCode;
    }

    /**
     * @param string $downgradeCode
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setDowngradeCode($downgradeCode)
    {
      $this->downgradeCode = $downgradeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCvcError()
    {
      return $this->cvcError;
    }

    /**
     * @param string $cvcError
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setCvcError($cvcError)
    {
      $this->cvcError = $cvcError;
      return $this;
    }

    /**
     * @return string
     */
    public function getDataError()
    {
      return $this->dataError;
    }

    /**
     * @param string $dataError
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setDataError($dataError)
    {
      $this->dataError = $dataError;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthSource()
    {
      return $this->authSource;
    }

    /**
     * @param string $authSource
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setAuthSource($authSource)
    {
      $this->authSource = $authSource;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseCode()
    {
      return $this->responseCode;
    }

    /**
     * @param string $responseCode
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setResponseCode($responseCode)
    {
      $this->responseCode = $responseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
      return $this->productId;
    }

    /**
     * @param string $productId
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setProductId($productId)
    {
      $this->productId = $productId;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgramId()
    {
      return $this->programId;
    }

    /**
     * @param string $programId
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setProgramId($programId)
    {
      $this->programId = $programId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantAdvice()
    {
      return $this->merchantAdvice;
    }

    /**
     * @param string $merchantAdvice
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setMerchantAdvice($merchantAdvice)
    {
      $this->merchantAdvice = $merchantAdvice;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceOption()
    {
      return $this->serviceOption;
    }

    /**
     * @param string $serviceOption
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setServiceOption($serviceOption)
    {
      $this->serviceOption = $serviceOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getFleetPrompts()
    {
      return $this->fleetPrompts;
    }

    /**
     * @param string $fleetPrompts
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setFleetPrompts($fleetPrompts)
    {
      $this->fleetPrompts = $fleetPrompts;
      return $this;
    }

    /**
     * @return ArrayOfNetworkCustomData
     */
    public function getCustomData()
    {
      return $this->customData;
    }

    /**
     * @param ArrayOfNetworkCustomData $customData
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setCustomData($customData)
    {
      $this->customData = $customData;
      return $this;
    }

    /**
     * @return string
     */
    public function getMac()
    {
      return $this->mac;
    }

    /**
     * @param string $mac
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setMac($mac)
    {
      $this->mac = $mac;
      return $this;
    }

    /**
     * @return string
     */
    public function getPosSeqNum()
    {
      return $this->posSeqNum;
    }

    /**
     * @param string $posSeqNum
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setPosSeqNum($posSeqNum)
    {
      $this->posSeqNum = $posSeqNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getMacKey()
    {
      return $this->macKey;
    }

    /**
     * @param string $macKey
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setMacKey($macKey)
    {
      $this->macKey = $macKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getPinKey()
    {
      return $this->pinKey;
    }

    /**
     * @param string $pinKey
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setPinKey($pinKey)
    {
      $this->pinKey = $pinKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldKey()
    {
      return $this->fieldKey;
    }

    /**
     * @param string $fieldKey
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setFieldKey($fieldKey)
    {
      $this->fieldKey = $fieldKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransDate()
    {
      return $this->transDate;
    }

    /**
     * @param string $transDate
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setTransDate($transDate)
    {
      $this->transDate = $transDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransTime()
    {
      return $this->transTime;
    }

    /**
     * @param string $transTime
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setTransTime($transTime)
    {
      $this->transTime = $transTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getHostControlData()
    {
      return $this->hostControlData;
    }

    /**
     * @param string $hostControlData
     * @return \FreedomPay\Freeway\NetworkData
     */
    public function setHostControlData($hostControlData)
    {
      $this->hostControlData = $hostControlData;
      return $this;
    }

}
