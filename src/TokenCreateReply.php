<?php

namespace FreedomPay\Freeway;

class TokenCreateReply
{

    /**
     * @var int $reasonCode
     */
    protected $reasonCode = null;

    /**
     * @var string $requestDateTime
     */
    protected $requestDateTime = null;

    /**
     * @var string $responseMessage
     */
    protected $responseMessage = null;

    
    public function __construct()
    {
    
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
     * @return \FreedomPay\Freeway\TokenCreateReply
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
     * @return \FreedomPay\Freeway\TokenCreateReply
     */
    public function setRequestDateTime($requestDateTime)
    {
      $this->requestDateTime = $requestDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseMessage()
    {
      return $this->responseMessage;
    }

    /**
     * @param string $responseMessage
     * @return \FreedomPay\Freeway\TokenCreateReply
     */
    public function setResponseMessage($responseMessage)
    {
      $this->responseMessage = $responseMessage;
      return $this;
    }

}
