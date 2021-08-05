<?php

namespace FreedomPay\Freeway;

class SessionReply
{

    /**
     * @var string $sessionKey
     */
    protected $sessionKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSessionKey()
    {
      return $this->sessionKey;
    }

    /**
     * @param string $sessionKey
     * @return \FreedomPay\Freeway\SessionReply
     */
    public function setSessionKey($sessionKey)
    {
      $this->sessionKey = $sessionKey;
      return $this;
    }

}
