<?php

namespace FreedomPay\Freeway;

class InquiryReply
{

    /**
     * @var string $AccountBalance
     */
    protected $AccountBalance = null;

    /**
     * @var string $AccountAPR
     */
    protected $AccountAPR = null;

    /**
     * @var string $LastPaymentAmount
     */
    protected $LastPaymentAmount = null;

    /**
     * @var string $LastPaymentDate
     */
    protected $LastPaymentDate = null;

    /**
     * @var string $AvailableCredit
     */
    protected $AvailableCredit = null;

    /**
     * @var string $MinimumPaymentDue
     */
    protected $MinimumPaymentDue = null;

    /**
     * @var string $PaymentDueDate
     */
    protected $PaymentDueDate = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var string $CustomerServicePhone
     */
    protected $CustomerServicePhone = null;

    /**
     * @var string $CustomerServiceExt
     */
    protected $CustomerServiceExt = null;

    /**
     * @var string $CustomerFirstName
     */
    protected $CustomerFirstName = null;

    /**
     * @var string $CustomerLastName
     */
    protected $CustomerLastName = null;

    /**
     * @var string $CustomerTier
     */
    protected $CustomerTier = null;

    /**
     * @var string $processorResponseCode
     */
    protected $processorResponseCode = null;

    /**
     * @var string $processorResponseMessage
     */
    protected $processorResponseMessage = null;

    /**
     * @var int $reasonCode
     */
    protected $reasonCode = null;

    /**
     * @var string $requestDateTime
     */
    protected $requestDateTime = null;

    /**
     * @var ArrayOfString $authorizedUsers
     */
    protected $authorizedUsers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAccountBalance()
    {
      return $this->AccountBalance;
    }

    /**
     * @param string $AccountBalance
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setAccountBalance($AccountBalance)
    {
      $this->AccountBalance = $AccountBalance;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountAPR()
    {
      return $this->AccountAPR;
    }

    /**
     * @param string $AccountAPR
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setAccountAPR($AccountAPR)
    {
      $this->AccountAPR = $AccountAPR;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastPaymentAmount()
    {
      return $this->LastPaymentAmount;
    }

    /**
     * @param string $LastPaymentAmount
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setLastPaymentAmount($LastPaymentAmount)
    {
      $this->LastPaymentAmount = $LastPaymentAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastPaymentDate()
    {
      return $this->LastPaymentDate;
    }

    /**
     * @param string $LastPaymentDate
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setLastPaymentDate($LastPaymentDate)
    {
      $this->LastPaymentDate = $LastPaymentDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvailableCredit()
    {
      return $this->AvailableCredit;
    }

    /**
     * @param string $AvailableCredit
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setAvailableCredit($AvailableCredit)
    {
      $this->AvailableCredit = $AvailableCredit;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinimumPaymentDue()
    {
      return $this->MinimumPaymentDue;
    }

    /**
     * @param string $MinimumPaymentDue
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setMinimumPaymentDue($MinimumPaymentDue)
    {
      $this->MinimumPaymentDue = $MinimumPaymentDue;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentDueDate()
    {
      return $this->PaymentDueDate;
    }

    /**
     * @param string $PaymentDueDate
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setPaymentDueDate($PaymentDueDate)
    {
      $this->PaymentDueDate = $PaymentDueDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
      return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerServicePhone()
    {
      return $this->CustomerServicePhone;
    }

    /**
     * @param string $CustomerServicePhone
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setCustomerServicePhone($CustomerServicePhone)
    {
      $this->CustomerServicePhone = $CustomerServicePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerServiceExt()
    {
      return $this->CustomerServiceExt;
    }

    /**
     * @param string $CustomerServiceExt
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setCustomerServiceExt($CustomerServiceExt)
    {
      $this->CustomerServiceExt = $CustomerServiceExt;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerFirstName()
    {
      return $this->CustomerFirstName;
    }

    /**
     * @param string $CustomerFirstName
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setCustomerFirstName($CustomerFirstName)
    {
      $this->CustomerFirstName = $CustomerFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerLastName()
    {
      return $this->CustomerLastName;
    }

    /**
     * @param string $CustomerLastName
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setCustomerLastName($CustomerLastName)
    {
      $this->CustomerLastName = $CustomerLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerTier()
    {
      return $this->CustomerTier;
    }

    /**
     * @param string $CustomerTier
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setCustomerTier($CustomerTier)
    {
      $this->CustomerTier = $CustomerTier;
      return $this;
    }

    /**
     * @return string
     */
    public function getProcessorResponseCode()
    {
      return $this->processorResponseCode;
    }

    /**
     * @param string $processorResponseCode
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setProcessorResponseCode($processorResponseCode)
    {
      $this->processorResponseCode = $processorResponseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProcessorResponseMessage()
    {
      return $this->processorResponseMessage;
    }

    /**
     * @param string $processorResponseMessage
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setProcessorResponseMessage($processorResponseMessage)
    {
      $this->processorResponseMessage = $processorResponseMessage;
      return $this;
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
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setReasonCode($reasonCode)
    {
      $this->reasonCode = $reasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestDateTime()
    {
      return $this->requestDateTime;
    }

    /**
     * @param string $requestDateTime
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setRequestDateTime($requestDateTime)
    {
      $this->requestDateTime = $requestDateTime;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getAuthorizedUsers()
    {
      return $this->authorizedUsers;
    }

    /**
     * @param ArrayOfString $authorizedUsers
     * @return \FreedomPay\Freeway\InquiryReply
     */
    public function setAuthorizedUsers($authorizedUsers)
    {
      $this->authorizedUsers = $authorizedUsers;
      return $this;
    }

}
