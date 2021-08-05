<?php

namespace FreedomPay\Freeway;

class ShipTo
{

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $middleName
     */
    protected $middleName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $suffix
     */
    protected $suffix = null;

    /**
     * @var string $street1
     */
    protected $street1 = null;

    /**
     * @var string $street2
     */
    protected $street2 = null;

    /**
     * @var string $street3
     */
    protected $street3 = null;

    /**
     * @var string $street4
     */
    protected $street4 = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var string $faxNumber
     */
    protected $faxNumber = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $ssn
     */
    protected $ssn = null;

    /**
     * @var string $shippingCompany
     */
    protected $shippingCompany = null;

    /**
     * @var string $shippingMethod
     */
    protected $shippingMethod = null;

    /**
     * @var string $trackingNumber
     */
    protected $trackingNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param string $company
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
      return $this->middleName;
    }

    /**
     * @param string $middleName
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setMiddleName($middleName)
    {
      $this->middleName = $middleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
      return $this->suffix;
    }

    /**
     * @param string $suffix
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setSuffix($suffix)
    {
      $this->suffix = $suffix;
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
     * @return \FreedomPay\Freeway\ShipTo
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
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setStreet2($street2)
    {
      $this->street2 = $street2;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet3()
    {
      return $this->street3;
    }

    /**
     * @param string $street3
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setStreet3($street3)
    {
      $this->street3 = $street3;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet4()
    {
      return $this->street4;
    }

    /**
     * @param string $street4
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setStreet4($street4)
    {
      $this->street4 = $street4;
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
     * @return \FreedomPay\Freeway\ShipTo
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
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setState($state)
    {
      $this->state = $state;
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
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
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
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setCountry($country)
    {
      $this->country = $country;
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
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
      return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setFaxNumber($faxNumber)
    {
      $this->faxNumber = $faxNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getSsn()
    {
      return $this->ssn;
    }

    /**
     * @param string $ssn
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setSsn($ssn)
    {
      $this->ssn = $ssn;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCompany()
    {
      return $this->shippingCompany;
    }

    /**
     * @param string $shippingCompany
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setShippingCompany($shippingCompany)
    {
      $this->shippingCompany = $shippingCompany;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingMethod()
    {
      return $this->shippingMethod;
    }

    /**
     * @param string $shippingMethod
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setShippingMethod($shippingMethod)
    {
      $this->shippingMethod = $shippingMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     * @return \FreedomPay\Freeway\ShipTo
     */
    public function setTrackingNumber($trackingNumber)
    {
      $this->trackingNumber = $trackingNumber;
      return $this;
    }

}
