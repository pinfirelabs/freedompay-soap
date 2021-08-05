<?php

namespace FreedomPay\Freeway;

class CheckReceiptData
{

    /**
     * @var string $responseTransitNumber
     */
    protected $responseTransitNumber = null;

    /**
     * @var string $responseAccountNumber
     */
    protected $responseAccountNumber = null;

    /**
     * @var string $responseCheckNumber
     */
    protected $responseCheckNumber = null;

    /**
     * @var string $approvalCode
     */
    protected $approvalCode = null;

    /**
     * @var string $traceId
     */
    protected $traceId = null;

    /**
     * @var string $achTransactionStatus
     */
    protected $achTransactionStatus = null;

    /**
     * @var string $denialRecordNumber
     */
    protected $denialRecordNumber = null;

    /**
     * @var string $returnCheckFee
     */
    protected $returnCheckFee = null;

    /**
     * @var string $returnCheckNote
     */
    protected $returnCheckNote = null;

    /**
     * @var string $merchantId
     */
    protected $merchantId = null;

    /**
     * @var string $terminalId
     */
    protected $terminalId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getResponseTransitNumber()
    {
      return $this->responseTransitNumber;
    }

    /**
     * @param string $responseTransitNumber
     * @return \FreedomPay\Freeway\CheckReceiptData
     */
    public function setResponseTransitNumber($responseTransitNumber)
    {
      $this->responseTransitNumber = $responseTransitNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseAccountNumber()
    {
      return $this->responseAccountNumber;
    }

    /**
     * @param string $responseAccountNumber
     * @return \FreedomPay\Freeway\CheckReceiptData
     */
    public function setResponseAccountNumber($responseAccountNumber)
    {
      $this->responseAccountNumber = $responseAccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseCheckNumber()
    {
      return $this->responseCheckNumber;
    }

    /**
     * @param string $responseCheckNumber
     * @return \FreedomPay\Freeway\CheckReceiptData
     */
    public function setResponseCheckNumber($responseCheckNumber)
    {
      $this->responseCheckNumber = $responseCheckNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getApprovalCode()
    {
      return $this->approvalCode;
    }

    /**
     * @param string $approvalCode
     * @return \FreedomPay\Freeway\CheckReceiptData
     */
    public function setApprovalCode($approvalCode)
    {
      $this->approvalCode = $approvalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTraceId()
    {
      return $this->traceId;
    }

    /**
     * @param string $traceId
     * @return \FreedomPay\Freeway\CheckReceiptData
     */
    public function setTraceId($traceId)
    {
      $this->traceId = $traceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAchTransactionStatus()
    {
      return $this->achTransactionStatus;
    }

    /**
     * @param string $achTransactionStatus
     * @return \FreedomPay\Freeway\CheckReceiptData
     */
    public function setAchTransactionStatus($achTransactionStatus)
    {
      $this->achTransactionStatus = $achTransactionStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getDenialRecordNumber()
    {
      return $this->denialRecordNumber;
    }

    /**
     * @param string $denialRecordNumber
     * @return \FreedomPay\Freeway\CheckReceiptData
     */
    public function setDenialRecordNumber($denialRecordNumber)
    {
      $this->denialRecordNumber = $denialRecordNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCheckFee()
    {
      return $this->returnCheckFee;
    }

    /**
     * @param string $returnCheckFee
     * @return \FreedomPay\Freeway\CheckReceiptData
     */
    public function setReturnCheckFee($returnCheckFee)
    {
      $this->returnCheckFee = $returnCheckFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCheckNote()
    {
      return $this->returnCheckNote;
    }

    /**
     * @param string $returnCheckNote
     * @return \FreedomPay\Freeway\CheckReceiptData
     */
    public function setReturnCheckNote($returnCheckNote)
    {
      $this->returnCheckNote = $returnCheckNote;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantId()
    {
      return $this->merchantId;
    }

    /**
     * @param string $merchantId
     * @return \FreedomPay\Freeway\CheckReceiptData
     */
    public function setMerchantId($merchantId)
    {
      $this->merchantId = $merchantId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminalId()
    {
      return $this->terminalId;
    }

    /**
     * @param string $terminalId
     * @return \FreedomPay\Freeway\CheckReceiptData
     */
    public function setTerminalId($terminalId)
    {
      $this->terminalId = $terminalId;
      return $this;
    }

}
