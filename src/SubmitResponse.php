<?php

namespace FreedomPay\Freeway;

class SubmitResponse
{

    /**
     * @var ReplyMessage $SubmitResult
     */
    protected $SubmitResult = null;

    /**
     * @param ReplyMessage $SubmitResult
     */
    public function __construct($SubmitResult)
    {
      $this->SubmitResult = $SubmitResult;
    }

    /**
     * @return ReplyMessage
     */
    public function getSubmitResult()
    {
      return $this->SubmitResult;
    }

    /**
     * @param ReplyMessage $SubmitResult
     * @return \FreedomPay\Freeway\SubmitResponse
     */
    public function setSubmitResult($SubmitResult)
    {
      $this->SubmitResult = $SubmitResult;
      return $this;
    }

}
