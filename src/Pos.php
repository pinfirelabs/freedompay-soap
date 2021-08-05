<?php

namespace FreedomPay\Freeway;

class Pos
{

    /**
     * @var string $registerNumber
     */
    protected $registerNumber = null;

    /**
     * @var string $entryMode
     */
    protected $entryMode = null;

    /**
     * @var string $track1
     */
    protected $track1 = null;

    /**
     * @var string $track2
     */
    protected $track2 = null;

    /**
     * @var string $track3
     */
    protected $track3 = null;

    /**
     * @var string $trackKsn
     */
    protected $trackKsn = null;

    /**
     * @var string $sequenceNumber
     */
    protected $sequenceNumber = null;

    /**
     * @var string $cardPresent
     */
    protected $cardPresent = null;

    /**
     * @var string $track1e
     */
    protected $track1e = null;

    /**
     * @var string $track2e
     */
    protected $track2e = null;

    /**
     * @var string $track1len
     */
    protected $track1len = null;

    /**
     * @var string $track2len
     */
    protected $track2len = null;

    /**
     * @var string $tracke
     */
    protected $tracke = null;

    /**
     * @var string $encMode
     */
    protected $encMode = null;

    /**
     * @var string $msrType
     */
    protected $msrType = null;

    /**
     * @var string $paymentDate
     */
    protected $paymentDate = null;

    /**
     * @var string $chipData
     */
    protected $chipData = null;

    /**
     * @var string $issuerScriptResults
     */
    protected $issuerScriptResults = null;

    /**
     * @var string $caps
     */
    protected $caps = null;

    /**
     * @var string $fallbackReason
     */
    protected $fallbackReason = null;

    /**
     * @var string $sigData
     */
    protected $sigData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRegisterNumber()
    {
      return $this->registerNumber;
    }

    /**
     * @param string $registerNumber
     * @return \FreedomPay\Freeway\Pos
     */
    public function setRegisterNumber($registerNumber)
    {
      $this->registerNumber = $registerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntryMode()
    {
      return $this->entryMode;
    }

    /**
     * @param string $entryMode
     * @return \FreedomPay\Freeway\Pos
     */
    public function setEntryMode($entryMode)
    {
      $this->entryMode = $entryMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrack1()
    {
      return $this->track1;
    }

    /**
     * @param string $track1
     * @return \FreedomPay\Freeway\Pos
     */
    public function setTrack1($track1)
    {
      $this->track1 = $track1;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrack2()
    {
      return $this->track2;
    }

    /**
     * @param string $track2
     * @return \FreedomPay\Freeway\Pos
     */
    public function setTrack2($track2)
    {
      $this->track2 = $track2;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrack3()
    {
      return $this->track3;
    }

    /**
     * @param string $track3
     * @return \FreedomPay\Freeway\Pos
     */
    public function setTrack3($track3)
    {
      $this->track3 = $track3;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackKsn()
    {
      return $this->trackKsn;
    }

    /**
     * @param string $trackKsn
     * @return \FreedomPay\Freeway\Pos
     */
    public function setTrackKsn($trackKsn)
    {
      $this->trackKsn = $trackKsn;
      return $this;
    }

    /**
     * @return string
     */
    public function getSequenceNumber()
    {
      return $this->sequenceNumber;
    }

    /**
     * @param string $sequenceNumber
     * @return \FreedomPay\Freeway\Pos
     */
    public function setSequenceNumber($sequenceNumber)
    {
      $this->sequenceNumber = $sequenceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardPresent()
    {
      return $this->cardPresent;
    }

    /**
     * @param string $cardPresent
     * @return \FreedomPay\Freeway\Pos
     */
    public function setCardPresent($cardPresent)
    {
      $this->cardPresent = $cardPresent;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrack1e()
    {
      return $this->track1e;
    }

    /**
     * @param string $track1e
     * @return \FreedomPay\Freeway\Pos
     */
    public function setTrack1e($track1e)
    {
      $this->track1e = $track1e;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrack2e()
    {
      return $this->track2e;
    }

    /**
     * @param string $track2e
     * @return \FreedomPay\Freeway\Pos
     */
    public function setTrack2e($track2e)
    {
      $this->track2e = $track2e;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrack1len()
    {
      return $this->track1len;
    }

    /**
     * @param string $track1len
     * @return \FreedomPay\Freeway\Pos
     */
    public function setTrack1len($track1len)
    {
      $this->track1len = $track1len;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrack2len()
    {
      return $this->track2len;
    }

    /**
     * @param string $track2len
     * @return \FreedomPay\Freeway\Pos
     */
    public function setTrack2len($track2len)
    {
      $this->track2len = $track2len;
      return $this;
    }

    /**
     * @return string
     */
    public function getTracke()
    {
      return $this->tracke;
    }

    /**
     * @param string $tracke
     * @return \FreedomPay\Freeway\Pos
     */
    public function setTracke($tracke)
    {
      $this->tracke = $tracke;
      return $this;
    }

    /**
     * @return string
     */
    public function getEncMode()
    {
      return $this->encMode;
    }

    /**
     * @param string $encMode
     * @return \FreedomPay\Freeway\Pos
     */
    public function setEncMode($encMode)
    {
      $this->encMode = $encMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMsrType()
    {
      return $this->msrType;
    }

    /**
     * @param string $msrType
     * @return \FreedomPay\Freeway\Pos
     */
    public function setMsrType($msrType)
    {
      $this->msrType = $msrType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentDate()
    {
      return $this->paymentDate;
    }

    /**
     * @param string $paymentDate
     * @return \FreedomPay\Freeway\Pos
     */
    public function setPaymentDate($paymentDate)
    {
      $this->paymentDate = $paymentDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getChipData()
    {
      return $this->chipData;
    }

    /**
     * @param string $chipData
     * @return \FreedomPay\Freeway\Pos
     */
    public function setChipData($chipData)
    {
      $this->chipData = $chipData;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssuerScriptResults()
    {
      return $this->issuerScriptResults;
    }

    /**
     * @param string $issuerScriptResults
     * @return \FreedomPay\Freeway\Pos
     */
    public function setIssuerScriptResults($issuerScriptResults)
    {
      $this->issuerScriptResults = $issuerScriptResults;
      return $this;
    }

    /**
     * @return string
     */
    public function getCaps()
    {
      return $this->caps;
    }

    /**
     * @param string $caps
     * @return \FreedomPay\Freeway\Pos
     */
    public function setCaps($caps)
    {
      $this->caps = $caps;
      return $this;
    }

    /**
     * @return string
     */
    public function getFallbackReason()
    {
      return $this->fallbackReason;
    }

    /**
     * @param string $fallbackReason
     * @return \FreedomPay\Freeway\Pos
     */
    public function setFallbackReason($fallbackReason)
    {
      $this->fallbackReason = $fallbackReason;
      return $this;
    }

    /**
     * @return string
     */
    public function getSigData()
    {
      return $this->sigData;
    }

    /**
     * @param string $sigData
     * @return \FreedomPay\Freeway\Pos
     */
    public function setSigData($sigData)
    {
      $this->sigData = $sigData;
      return $this;
    }

}
