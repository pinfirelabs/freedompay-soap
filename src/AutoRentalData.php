<?php

namespace FreedomPay\Freeway;

class AutoRentalData
{

    /**
     * @var string $expectedDuration
     */
    protected $expectedDuration = null;

    /**
     * @var string $agreementNumber
     */
    protected $agreementNumber = null;

    /**
     * @var string $checkoutDate
     */
    protected $checkoutDate = null;

    /**
     * @var string $checkinDate
     */
    protected $checkinDate = null;

    /**
     * @var string $rentalRate
     */
    protected $rentalRate = null;

    /**
     * @var string $rentalRateUnit
     */
    protected $rentalRateUnit = null;

    /**
     * @var string $rentalClassId
     */
    protected $rentalClassId = null;

    /**
     * @var string $noShow
     */
    protected $noShow = null;

    /**
     * @var string $renterName
     */
    protected $renterName = null;

    /**
     * @var string $returnLocationId
     */
    protected $returnLocationId = null;

    /**
     * @var string $returnCity
     */
    protected $returnCity = null;

    /**
     * @var string $returnState
     */
    protected $returnState = null;

    /**
     * @var string $returnCountry
     */
    protected $returnCountry = null;

    /**
     * @var string $extraChargeTypes
     */
    protected $extraChargeTypes = null;

    /**
     * @var string $extraChargeTotal
     */
    protected $extraChargeTotal = null;

    /**
     * @var string $extraChargeNotified
     */
    protected $extraChargeNotified = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getExpectedDuration()
    {
      return $this->expectedDuration;
    }

    /**
     * @param string $expectedDuration
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setExpectedDuration($expectedDuration)
    {
      $this->expectedDuration = $expectedDuration;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgreementNumber()
    {
      return $this->agreementNumber;
    }

    /**
     * @param string $agreementNumber
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setAgreementNumber($agreementNumber)
    {
      $this->agreementNumber = $agreementNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckoutDate()
    {
      return $this->checkoutDate;
    }

    /**
     * @param string $checkoutDate
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setCheckoutDate($checkoutDate)
    {
      $this->checkoutDate = $checkoutDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckinDate()
    {
      return $this->checkinDate;
    }

    /**
     * @param string $checkinDate
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setCheckinDate($checkinDate)
    {
      $this->checkinDate = $checkinDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getRentalRate()
    {
      return $this->rentalRate;
    }

    /**
     * @param string $rentalRate
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setRentalRate($rentalRate)
    {
      $this->rentalRate = $rentalRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getRentalRateUnit()
    {
      return $this->rentalRateUnit;
    }

    /**
     * @param string $rentalRateUnit
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setRentalRateUnit($rentalRateUnit)
    {
      $this->rentalRateUnit = $rentalRateUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getRentalClassId()
    {
      return $this->rentalClassId;
    }

    /**
     * @param string $rentalClassId
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setRentalClassId($rentalClassId)
    {
      $this->rentalClassId = $rentalClassId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoShow()
    {
      return $this->noShow;
    }

    /**
     * @param string $noShow
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setNoShow($noShow)
    {
      $this->noShow = $noShow;
      return $this;
    }

    /**
     * @return string
     */
    public function getRenterName()
    {
      return $this->renterName;
    }

    /**
     * @param string $renterName
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setRenterName($renterName)
    {
      $this->renterName = $renterName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnLocationId()
    {
      return $this->returnLocationId;
    }

    /**
     * @param string $returnLocationId
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setReturnLocationId($returnLocationId)
    {
      $this->returnLocationId = $returnLocationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCity()
    {
      return $this->returnCity;
    }

    /**
     * @param string $returnCity
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setReturnCity($returnCity)
    {
      $this->returnCity = $returnCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnState()
    {
      return $this->returnState;
    }

    /**
     * @param string $returnState
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setReturnState($returnState)
    {
      $this->returnState = $returnState;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCountry()
    {
      return $this->returnCountry;
    }

    /**
     * @param string $returnCountry
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setReturnCountry($returnCountry)
    {
      $this->returnCountry = $returnCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraChargeTypes()
    {
      return $this->extraChargeTypes;
    }

    /**
     * @param string $extraChargeTypes
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setExtraChargeTypes($extraChargeTypes)
    {
      $this->extraChargeTypes = $extraChargeTypes;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraChargeTotal()
    {
      return $this->extraChargeTotal;
    }

    /**
     * @param string $extraChargeTotal
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setExtraChargeTotal($extraChargeTotal)
    {
      $this->extraChargeTotal = $extraChargeTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraChargeNotified()
    {
      return $this->extraChargeNotified;
    }

    /**
     * @param string $extraChargeNotified
     * @return \FreedomPay\Freeway\AutoRentalData
     */
    public function setExtraChargeNotified($extraChargeNotified)
    {
      $this->extraChargeNotified = $extraChargeNotified;
      return $this;
    }

}
