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
    public function setProperty(array $property = null)
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
    public function offsetExists($offset)
    {
      return isset($this->property[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UserDefinedField
     */
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
      unset($this->property[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserDefinedField Return the current element
     */
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
    public function next()
    {
      next($this->property);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->property);
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
      reset($this->property);
    }

    /**
     * Countable implementation
     *
     * @return UserDefinedField Return count of elements
     */
    public function count()
    {
      return count($this->property);
    }

}
