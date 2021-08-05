<?php

namespace FreedomPay\Freeway;

class NetworkCustomData
{

    /**
     * @var ArrayOfString $data
     */
    protected $data = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @param string $code
     */
    public function __construct($code)
    {
      $this->code = $code;
    }

    /**
     * @return ArrayOfString
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param ArrayOfString $data
     * @return \FreedomPay\Freeway\NetworkCustomData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
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
     * @return \FreedomPay\Freeway\NetworkCustomData
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
