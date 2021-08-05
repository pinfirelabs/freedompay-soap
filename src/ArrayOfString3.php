<?php

namespace FreedomPay\Freeway;

class ArrayOfString3 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var string[] $receiptMessage
     */
    protected $receiptMessage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getReceiptMessage()
    {
      return $this->receiptMessage;
    }

    /**
     * @param string[] $receiptMessage
     * @return \FreedomPay\Freeway\ArrayOfString3
     */
    public function setReceiptMessage(array $receiptMessage = null)
    {
      $this->receiptMessage = $receiptMessage;
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
      return isset($this->receiptMessage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return string
     */
    public function offsetGet($offset)
    {
      return $this->receiptMessage[$offset];
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
        $this->receiptMessage[] = $value;
      } else {
        $this->receiptMessage[$offset] = $value;
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
      unset($this->receiptMessage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return string Return the current element
     */
    public function current()
    {
      return current($this->receiptMessage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->receiptMessage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->receiptMessage);
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
      reset($this->receiptMessage);
    }

    /**
     * Countable implementation
     *
     * @return string Return count of elements
     */
    public function count()
    {
      return count($this->receiptMessage);
    }

}
