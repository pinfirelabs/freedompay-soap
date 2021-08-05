<?php

namespace FreedomPay\Freeway;

class HotelData
{

    /**
     * @var string $roomOccupantCount
     */
    protected $roomOccupantCount = null;

    /**
     * @var string $roomType
     */
    protected $roomType = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @var ArrayOfUserDefinedField $properties
     */
    protected $properties = null;

    /**
     * @var string $expectedDuration
     */
    protected $expectedDuration = null;

    /**
     * @var string $folioNumber
     */
    protected $folioNumber = null;

    /**
     * @var string $noShow
     */
    protected $noShow = null;

    /**
     * @var string $programCode
     */
    protected $programCode = null;

    /**
     * @var string $checkinDate
     */
    protected $checkinDate = null;

    /**
     * @var string $checkoutDate
     */
    protected $checkoutDate = null;

    /**
     * @var string $extraChargeTypes
     */
    protected $extraChargeTypes = null;

    /**
     * @var string $roomRate
     */
    protected $roomRate = null;

    /**
     * @var string $roomRateUnit
     */
    protected $roomRateUnit = null;

    /**
     * @var string $roomTax
     */
    protected $roomTax = null;

    /**
     * @var string $extraChargeTotal
     */
    protected $extraChargeTotal = null;

    /**
     * @var string $renterName
     */
    protected $renterName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRoomOccupantCount()
    {
      return $this->roomOccupantCount;
    }

    /**
     * @param string $roomOccupantCount
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setRoomOccupantCount($roomOccupantCount)
    {
      $this->roomOccupantCount = $roomOccupantCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomType()
    {
      return $this->roomType;
    }

    /**
     * @param string $roomType
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setRoomType($roomType)
    {
      $this->roomType = $roomType;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param string $notes
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
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
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setProperties($properties)
    {
      $this->properties = $properties;
      return $this;
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
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setExpectedDuration($expectedDuration)
    {
      $this->expectedDuration = $expectedDuration;
      return $this;
    }

    /**
     * @return string
     */
    public function getFolioNumber()
    {
      return $this->folioNumber;
    }

    /**
     * @param string $folioNumber
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setFolioNumber($folioNumber)
    {
      $this->folioNumber = $folioNumber;
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
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setNoShow($noShow)
    {
      $this->noShow = $noShow;
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
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setProgramCode($programCode)
    {
      $this->programCode = $programCode;
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
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setCheckinDate($checkinDate)
    {
      $this->checkinDate = $checkinDate;
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
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setCheckoutDate($checkoutDate)
    {
      $this->checkoutDate = $checkoutDate;
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
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setExtraChargeTypes($extraChargeTypes)
    {
      $this->extraChargeTypes = $extraChargeTypes;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomRate()
    {
      return $this->roomRate;
    }

    /**
     * @param string $roomRate
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setRoomRate($roomRate)
    {
      $this->roomRate = $roomRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomRateUnit()
    {
      return $this->roomRateUnit;
    }

    /**
     * @param string $roomRateUnit
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setRoomRateUnit($roomRateUnit)
    {
      $this->roomRateUnit = $roomRateUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomTax()
    {
      return $this->roomTax;
    }

    /**
     * @param string $roomTax
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setRoomTax($roomTax)
    {
      $this->roomTax = $roomTax;
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
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setExtraChargeTotal($extraChargeTotal)
    {
      $this->extraChargeTotal = $extraChargeTotal;
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
     * @return \FreedomPay\Freeway\HotelData
     */
    public function setRenterName($renterName)
    {
      $this->renterName = $renterName;
      return $this;
    }

}
