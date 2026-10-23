<?php

namespace FreedomPay\Freeway;

class ArrayOfUserDefinedField implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UserDefinedField[] $property
     */
    protected $property = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserDefinedField[]
     */
    public function getProperty()
    {
      return $this->property;
    }

    /**
     * @param UserDefinedField[] $property
     * @return \FreedomPay\Freeway\ArrayOfUserDefinedField
     */
    public function setProperty(?array $property = null)
    {
      $this->property = $property;
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
      return isset($this->property[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UserDefinedField
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->property[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UserDefinedField $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
      if (!isset($offset)) {
        $this->property[] = $value;
      } else {
        $this->property[$offset] = $value;
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
      unset($this->property[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserDefinedField Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->property);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next() : void
    {
      next($this->property);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->property);
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
      reset($this->property);
    }

    /**
     * Countable implementation
     *
     * @return UserDefinedField Return count of elements
     */
    public function count() : int
    {
      return count($this->property);
    }

}
