<?php

namespace FreedomPay\Freeway;

class FleetData
{

    /**
     * @var string $userId
     */
    protected $userId = null;

    /**
     * @var string $vehicleId
     */
    protected $vehicleId = null;

    /**
     * @var string $vehicleTag
     */
    protected $vehicleTag = null;

    /**
     * @var string $driverId
     */
    protected $driverId = null;

    /**
     * @var string $odo
     */
    protected $odo = null;

    /**
     * @var string $dlNum
     */
    protected $dlNum = null;

    /**
     * @var string $dlState
     */
    protected $dlState = null;

    /**
     * @var string $dlName
     */
    protected $dlName = null;

    /**
     * @var string $poNumber
     */
    protected $poNumber = null;

    /**
     * @var string $invoiceNum
     */
    protected $invoiceNum = null;

    /**
     * @var string $tripNum
     */
    protected $tripNum = null;

    /**
     * @var string $unitNum
     */
    protected $unitNum = null;

    /**
     * @var string $trailerHours
     */
    protected $trailerHours = null;

    /**
     * @var string $dob
     */
    protected $dob = null;

    /**
     * @var string $zip
     */
    protected $zip = null;

    /**
     * @var string $misc1
     */
    protected $misc1 = null;

    /**
     * @var string $misc2
     */
    protected $misc2 = null;

    /**
     * @var string $cashBack
     */
    protected $cashBack = null;

    /**
     * @var string $jobNum
     */
    protected $jobNum = null;

    /**
     * @var string $maintId
     */
    protected $maintId = null;

    /**
     * @var string $dept
     */
    protected $dept = null;

    /**
     * @var string $vin
     */
    protected $vin = null;

    /**
     * @var string $tractorNum
     */
    protected $tractorNum = null;

    /**
     * @var string $hubo
     */
    protected $hubo = null;

    /**
     * @var string $trailerNum
     */
    protected $trailerNum = null;

    /**
     * @var string $custom1
     */
    protected $custom1 = null;

    /**
     * @var string $custom2
     */
    protected $custom2 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param string $userId
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return string
     */
    public function getVehicleId()
    {
      return $this->vehicleId;
    }

    /**
     * @param string $vehicleId
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setVehicleId($vehicleId)
    {
      $this->vehicleId = $vehicleId;
      return $this;
    }

    /**
     * @return string
     */
    public function getVehicleTag()
    {
      return $this->vehicleTag;
    }

    /**
     * @param string $vehicleTag
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setVehicleTag($vehicleTag)
    {
      $this->vehicleTag = $vehicleTag;
      return $this;
    }

    /**
     * @return string
     */
    public function getDriverId()
    {
      return $this->driverId;
    }

    /**
     * @param string $driverId
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setDriverId($driverId)
    {
      $this->driverId = $driverId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOdo()
    {
      return $this->odo;
    }

    /**
     * @param string $odo
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setOdo($odo)
    {
      $this->odo = $odo;
      return $this;
    }

    /**
     * @return string
     */
    public function getDlNum()
    {
      return $this->dlNum;
    }

    /**
     * @param string $dlNum
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setDlNum($dlNum)
    {
      $this->dlNum = $dlNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getDlState()
    {
      return $this->dlState;
    }

    /**
     * @param string $dlState
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setDlState($dlState)
    {
      $this->dlState = $dlState;
      return $this;
    }

    /**
     * @return string
     */
    public function getDlName()
    {
      return $this->dlName;
    }

    /**
     * @param string $dlName
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setDlName($dlName)
    {
      $this->dlName = $dlName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoNumber()
    {
      return $this->poNumber;
    }

    /**
     * @param string $poNumber
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setPoNumber($poNumber)
    {
      $this->poNumber = $poNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNum()
    {
      return $this->invoiceNum;
    }

    /**
     * @param string $invoiceNum
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setInvoiceNum($invoiceNum)
    {
      $this->invoiceNum = $invoiceNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getTripNum()
    {
      return $this->tripNum;
    }

    /**
     * @param string $tripNum
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setTripNum($tripNum)
    {
      $this->tripNum = $tripNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitNum()
    {
      return $this->unitNum;
    }

    /**
     * @param string $unitNum
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setUnitNum($unitNum)
    {
      $this->unitNum = $unitNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrailerHours()
    {
      return $this->trailerHours;
    }

    /**
     * @param string $trailerHours
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setTrailerHours($trailerHours)
    {
      $this->trailerHours = $trailerHours;
      return $this;
    }

    /**
     * @return string
     */
    public function getDob()
    {
      return $this->dob;
    }

    /**
     * @param string $dob
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setDob($dob)
    {
      $this->dob = $dob;
      return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param string $zip
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setZip($zip)
    {
      $this->zip = $zip;
      return $this;
    }

    /**
     * @return string
     */
    public function getMisc1()
    {
      return $this->misc1;
    }

    /**
     * @param string $misc1
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setMisc1($misc1)
    {
      $this->misc1 = $misc1;
      return $this;
    }

    /**
     * @return string
     */
    public function getMisc2()
    {
      return $this->misc2;
    }

    /**
     * @param string $misc2
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setMisc2($misc2)
    {
      $this->misc2 = $misc2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCashBack()
    {
      return $this->cashBack;
    }

    /**
     * @param string $cashBack
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setCashBack($cashBack)
    {
      $this->cashBack = $cashBack;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobNum()
    {
      return $this->jobNum;
    }

    /**
     * @param string $jobNum
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setJobNum($jobNum)
    {
      $this->jobNum = $jobNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaintId()
    {
      return $this->maintId;
    }

    /**
     * @param string $maintId
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setMaintId($maintId)
    {
      $this->maintId = $maintId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDept()
    {
      return $this->dept;
    }

    /**
     * @param string $dept
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setDept($dept)
    {
      $this->dept = $dept;
      return $this;
    }

    /**
     * @return string
     */
    public function getVin()
    {
      return $this->vin;
    }

    /**
     * @param string $vin
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setVin($vin)
    {
      $this->vin = $vin;
      return $this;
    }

    /**
     * @return string
     */
    public function getTractorNum()
    {
      return $this->tractorNum;
    }

    /**
     * @param string $tractorNum
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setTractorNum($tractorNum)
    {
      $this->tractorNum = $tractorNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getHubo()
    {
      return $this->hubo;
    }

    /**
     * @param string $hubo
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setHubo($hubo)
    {
      $this->hubo = $hubo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrailerNum()
    {
      return $this->trailerNum;
    }

    /**
     * @param string $trailerNum
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setTrailerNum($trailerNum)
    {
      $this->trailerNum = $trailerNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom1()
    {
      return $this->custom1;
    }

    /**
     * @param string $custom1
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setCustom1($custom1)
    {
      $this->custom1 = $custom1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom2()
    {
      return $this->custom2;
    }

    /**
     * @param string $custom2
     * @return \FreedomPay\Freeway\FleetData
     */
    public function setCustom2($custom2)
    {
      $this->custom2 = $custom2;
      return $this;
    }

}
