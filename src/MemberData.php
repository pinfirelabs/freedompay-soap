<?php

namespace FreedomPay\Freeway;

class MemberData
{

    /**
     * @var string $enrollmentDate
     */
    protected $enrollmentDate = null;

    /**
     * @var string $isNewMember
     */
    protected $isNewMember = null;

    /**
     * @var string $memberIdentification
     */
    protected $memberIdentification = null;

    /**
     * @var string $memberIdentificationType
     */
    protected $memberIdentificationType = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $street1
     */
    protected $street1 = null;

    /**
     * @var string $street2
     */
    protected $street2 = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var string $level
     */
    protected $level = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var ArrayOfUserDefinedField $properties
     */
    protected $properties = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEnrollmentDate()
    {
      return $this->enrollmentDate;
    }

    /**
     * @param string $enrollmentDate
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setEnrollmentDate($enrollmentDate)
    {
      $this->enrollmentDate = $enrollmentDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getIsNewMember()
    {
      return $this->isNewMember;
    }

    /**
     * @param string $isNewMember
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setIsNewMember($isNewMember)
    {
      $this->isNewMember = $isNewMember;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemberIdentification()
    {
      return $this->memberIdentification;
    }

    /**
     * @param string $memberIdentification
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setMemberIdentification($memberIdentification)
    {
      $this->memberIdentification = $memberIdentification;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemberIdentificationType()
    {
      return $this->memberIdentificationType;
    }

    /**
     * @param string $memberIdentificationType
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setMemberIdentificationType($memberIdentificationType)
    {
      $this->memberIdentificationType = $memberIdentificationType;
      return $this;
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
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet1()
    {
      return $this->street1;
    }

    /**
     * @param string $street1
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setStreet1($street1)
    {
      $this->street1 = $street1;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
      return $this->street2;
    }

    /**
     * @param string $street2
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setStreet2($street2)
    {
      $this->street2 = $street2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param string $level
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \FreedomPay\Freeway\MemberData
     */
    public function setProperties($properties)
    {
      $this->properties = $properties;
      return $this;
    }

}
