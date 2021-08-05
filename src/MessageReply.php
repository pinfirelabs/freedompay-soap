<?php

namespace FreedomPay\Freeway;

class MessageReply
{

    /**
     * @var ArrayOfMessageInfo $messages
     */
    protected $messages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfMessageInfo
     */
    public function getMessages()
    {
      return $this->messages;
    }

    /**
     * @param ArrayOfMessageInfo $messages
     * @return \FreedomPay\Freeway\MessageReply
     */
    public function setMessages($messages)
    {
      $this->messages = $messages;
      return $this;
    }

}
