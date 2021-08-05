<?php

namespace FreedomPay\Freeway;

class ReceiptData
{

    /**
     * @var string $pan
     */
    protected $pan = null;

    /**
     * @var string $networkLabel
     */
    protected $networkLabel = null;

    /**
     * @var ArrayOfString3 $receiptMessages
     */
    protected $receiptMessages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPan()
    {
      return $this->pan;
    }

    /**
     * @param string $pan
     * @return \FreedomPay\Freeway\ReceiptData
     */
    public function setPan($pan)
    {
      $this->pan = $pan;
      return $this;
    }

    /**
     * @return string
     */
    public function getNetworkLabel()
    {
      return $this->networkLabel;
    }

    /**
     * @param string $networkLabel
     * @return \FreedomPay\Freeway\ReceiptData
     */
    public function setNetworkLabel($networkLabel)
    {
      $this->networkLabel = $networkLabel;
      return $this;
    }

    /**
     * @return ArrayOfString3
     */
    public function getReceiptMessages()
    {
      return $this->receiptMessages;
    }

    /**
     * @param ArrayOfString3 $receiptMessages
     * @return \FreedomPay\Freeway\ReceiptData
     */
    public function setReceiptMessages($receiptMessages)
    {
      $this->receiptMessages = $receiptMessages;
      return $this;
    }

}
