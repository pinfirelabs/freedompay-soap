<?php

namespace FreedomPay\Freeway;

class RestaurantData
{

    /**
     * @var string $foodSubtotal
     */
    protected $foodSubtotal = null;

    /**
     * @var string $beverageSubtotal
     */
    protected $beverageSubtotal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFoodSubtotal()
    {
      return $this->foodSubtotal;
    }

    /**
     * @param string $foodSubtotal
     * @return \FreedomPay\Freeway\RestaurantData
     */
    public function setFoodSubtotal($foodSubtotal)
    {
      $this->foodSubtotal = $foodSubtotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getBeverageSubtotal()
    {
      return $this->beverageSubtotal;
    }

    /**
     * @param string $beverageSubtotal
     * @return \FreedomPay\Freeway\RestaurantData
     */
    public function setBeverageSubtotal($beverageSubtotal)
    {
      $this->beverageSubtotal = $beverageSubtotal;
      return $this;
    }

}
