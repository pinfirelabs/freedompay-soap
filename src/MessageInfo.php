<?php

namespace FreedomPay\Freeway;

class MessageInfo
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @param string $code
     * @param string $message
     */
    public function __construct($code, $message)
    {
      $this->code = $code;
      $this->message = $message;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \FreedomPay\Freeway\MessageInfo
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \FreedomPay\Freeway\MessageInfo
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
