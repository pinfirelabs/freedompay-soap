<?php

namespace FreedomPay\Freeway;

class LoyaltyReply
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var ArrayOfLoyaltyProgramData $programs
     */
    protected $programs = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \FreedomPay\Freeway\LoyaltyReply
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return ArrayOfLoyaltyProgramData
     */
    public function getPrograms()
    {
      return $this->programs;
    }

    /**
     * @param ArrayOfLoyaltyProgramData $programs
     * @return \FreedomPay\Freeway\LoyaltyReply
     */
    public function setPrograms($programs)
    {
      $this->programs = $programs;
      return $this;
    }

}
