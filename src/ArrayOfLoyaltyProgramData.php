<?php

namespace FreedomPay\Freeway;

class ArrayOfLoyaltyProgramData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LoyaltyProgramData[] $program
     */
    protected $program = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LoyaltyProgramData[]
     */
    public function getProgram()
    {
      return $this->program;
    }

    /**
     * @param LoyaltyProgramData[] $program
     * @return \FreedomPay\Freeway\ArrayOfLoyaltyProgramData
     */
    public function setProgram(?array $program = null)
    {
      $this->program = $program;
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
      return isset($this->program[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LoyaltyProgramData
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->program[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LoyaltyProgramData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
      if (!isset($offset)) {
        $this->program[] = $value;
      } else {
        $this->program[$offset] = $value;
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
      unset($this->program[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LoyaltyProgramData Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->program);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next() : void
    {
      next($this->program);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->program);
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
      reset($this->program);
    }

    /**
     * Countable implementation
     *
     * @return LoyaltyProgramData Return count of elements
     */
    public function count() : int
    {
      return count($this->program);
    }

}
