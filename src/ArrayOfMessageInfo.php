<?php

namespace FreedomPay\Freeway;

class ArrayOfMessageInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MessageInfo[] $message
     */
    protected $message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MessageInfo[]
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param MessageInfo[] $message
     * @return \FreedomPay\Freeway\ArrayOfMessageInfo
     */
    public function setMessage(?array $message = null)
    {
      $this->message = $message;
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
      return isset($this->message[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MessageInfo
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->message[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MessageInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
      if (!isset($offset)) {
        $this->message[] = $value;
      } else {
        $this->message[$offset] = $value;
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
      unset($this->message[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MessageInfo Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->message);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next() : void
    {
      next($this->message);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->message);
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
      reset($this->message);
    }

    /**
     * Countable implementation
     *
     * @return MessageInfo Return count of elements
     */
    public function count() : int
    {
      return count($this->message);
    }

}
