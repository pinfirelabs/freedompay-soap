<?php

namespace FreedomPay\Freeway;

class InquiryService
{

    /**
     * @var string $verifyMode
     */
    protected $verifyMode = null;

    /**
     * @var string $fields
     */
    protected $fields = null;

    /**
     * @var string $authorizedUser
     */
    protected $authorizedUser = null;

    /**
     * @var string $run
     */
    protected $run = null;

    /**
     * @param string $run
     */
    public function __construct($run)
    {
      $this->run = $run;
    }

    /**
     * @return string
     */
    public function getVerifyMode()
    {
      return $this->verifyMode;
    }

    /**
     * @param string $verifyMode
     * @return \FreedomPay\Freeway\InquiryService
     */
    public function setVerifyMode($verifyMode)
    {
      $this->verifyMode = $verifyMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param string $fields
     * @return \FreedomPay\Freeway\InquiryService
     */
    public function setFields($fields)
    {
      $this->fields = $fields;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizedUser()
    {
      return $this->authorizedUser;
    }

    /**
     * @param string $authorizedUser
     * @return \FreedomPay\Freeway\InquiryService
     */
    public function setAuthorizedUser($authorizedUser)
    {
      $this->authorizedUser = $authorizedUser;
      return $this;
    }

    /**
     * @return string
     */
    public function getRun()
    {
      return $this->run;
    }

    /**
     * @param string $run
     * @return \FreedomPay\Freeway\InquiryService
     */
    public function setRun($run)
    {
      $this->run = $run;
      return $this;
    }

}
