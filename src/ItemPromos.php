<?php

namespace FreedomPay\Freeway;

class ItemPromos
{

    /**
     * @var string[] $promo
     */
    protected $promo = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $tag
     */
    protected $tag = null;

    /**
     * @var string $reasonCode
     */
    protected $reasonCode = null;

    /**
     * @param string $id
     * @param string $tag
     * @param string $reasonCode
     */
    public function __construct($id, $tag, $reasonCode)
    {
      $this->id = $id;
      $this->tag = $tag;
      $this->reasonCode = $reasonCode;
    }

    /**
     * @return string[]
     */
    public function getPromo()
    {
      return $this->promo;
    }

    /**
     * @param string[] $promo
     * @return \FreedomPay\Freeway\ItemPromos
     */
    public function setPromo(?array $promo = null)
    {
      $this->promo = $promo;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \FreedomPay\Freeway\ItemPromos
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
      return $this->tag;
    }

    /**
     * @param string $tag
     * @return \FreedomPay\Freeway\ItemPromos
     */
    public function setTag($tag)
    {
      $this->tag = $tag;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonCode()
    {
      return $this->reasonCode;
    }

    /**
     * @param string $reasonCode
     * @return \FreedomPay\Freeway\ItemPromos
     */
    public function setReasonCode($reasonCode)
    {
      $this->reasonCode = $reasonCode;
      return $this;
    }

}
