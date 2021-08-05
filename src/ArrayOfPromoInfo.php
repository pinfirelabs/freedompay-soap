<?php

namespace FreedomPay\Freeway;

class ArrayOfPromoInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PromoInfo[] $promo
     */
    protected $promo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PromoInfo[]
     */
    public function getPromo()
    {
      return $this->promo;
    }

    /**
     * @param PromoInfo[] $promo
     * @return \FreedomPay\Freeway\ArrayOfPromoInfo
     */
    public function setPromo(array $promo = null)
    {
      $this->promo = $promo;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->promo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PromoInfo
     */
    public function offsetGet($offset)
    {
      return $this->promo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PromoInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->promo[] = $value;
      } else {
        $this->promo[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->promo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PromoInfo Return the current element
     */
    public function current()
    {
      return current($this->promo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->promo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->promo);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->promo);
    }

    /**
     * Countable implementation
     *
     * @return PromoInfo Return count of elements
     */
    public function count()
    {
      return count($this->promo);
    }

}
