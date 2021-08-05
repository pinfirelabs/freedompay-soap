<?php

namespace FreedomPay\Freeway;

class Submit
{

    /**
     * @var RequestMessage $request
     */
    protected $request = null;

    /**
     * @param RequestMessage $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestMessage
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestMessage $request
     * @return \FreedomPay\Freeway\Submit
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
