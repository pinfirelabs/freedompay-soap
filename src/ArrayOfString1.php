<?php

namespace FreedomPay\Freeway;

class ArrayOfString1 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var string[] $invalidField
     */
    protected $invalidField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getInvalidField()
    {
      return $this->invalidField;
    }

    /**
     * @param string[] $invalidField
     * @return \FreedomPay\Freeway\ArrayOfString1
     */
    public function setInvalidField(array $invalidField = null)
    {
      $this->invalidField = $invalidField;
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
      return isset($this->invalidField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return string
     */
    public function offsetGet($offset)
    {
      return $this->invalidField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param string $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->invalidField[] = $value;
      } else {
        $this->invalidField[$offset] = $value;
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
      unset($this->invalidField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return string Return the current element
     */
    public function current()
    {
      return current($this->invalidField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->invalidField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->invalidField);
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
      reset($this->invalidField);
    }

    /**
     * Countable implementation
     *
     * @return string Return count of elements
     */
    public function count()
    {
      return count($this->invalidField);
    }

}
