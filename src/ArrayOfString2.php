<?php

namespace FreedomPay\Freeway;

class ArrayOfString2 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var string[] $missingField
     */
    protected $missingField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getMissingField()
    {
      return $this->missingField;
    }

    /**
     * @param string[] $missingField
     * @return \FreedomPay\Freeway\ArrayOfString2
     */
    public function setMissingField(?array $missingField = null)
    {
      $this->missingField = $missingField;
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
      return isset($this->missingField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return string
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->missingField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param string $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
      if (!isset($offset)) {
        $this->missingField[] = $value;
      } else {
        $this->missingField[$offset] = $value;
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
      unset($this->missingField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return string Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->missingField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next() : void
    {
      next($this->missingField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->missingField);
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
      reset($this->missingField);
    }

    /**
     * Countable implementation
     *
     * @return string Return count of elements
     */
    public function count() : int
    {
      return count($this->missingField);
    }

}
