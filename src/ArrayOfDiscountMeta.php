<?php

namespace FreedomPay\Freeway;

class ArrayOfDiscountMeta implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DiscountMeta[] $discount
     */
    protected $discount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DiscountMeta[]
     */
    public function getDiscount()
    {
      return $this->discount;
    }

    /**
     * @param DiscountMeta[] $discount
     * @return \FreedomPay\Freeway\ArrayOfDiscountMeta
     */
    public function setDiscount(?array $discount = null)
    {
      $this->discount = $discount;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset) : bool
    {
      return isset($this->discount[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DiscountMeta
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->discount[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DiscountMeta $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
      if (!isset($offset)) {
        $this->discount[] = $value;
      } else {
        $this->discount[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset) : void
    {
      unset($this->discount[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DiscountMeta Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->discount);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next() : void
    {
      next($this->discount);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->discount);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid() : bool
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind() : void
    {
      reset($this->discount);
    }

    /**
     * Countable implementation
     *
     * @return DiscountMeta Return count of elements
     */
    public function count() : int
    {
      return count($this->discount);
    }

}
