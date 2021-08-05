<?php

namespace FreedomPay\Freeway;

class AdminReply
{

    /**
     * @var string $processorResponseCode
     */
    protected $processorResponseCode = null;

    /**
     * @var string $processorResponseMessage
     */
    protected $processorResponseMessage = null;

    
    public function __construct()
    {
    
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
     * @return \FreedomPay\Freeway\AdminReply
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
     * @return \FreedomPay\Freeway\AdminReply
     */
    public function setProcessorResponseMessage($processorResponseMessage)
    {
      $this->processorResponseMessage = $processorResponseMessage;
      return $this;
    }

}
