<?php

namespace FreedomPay\Freeway;

class ClientMetadata
{

    /**
     * @var string $applicationName
     */
    protected $applicationName = null;

    /**
     * @var string $applicationVersion
     */
    protected $applicationVersion = null;

    /**
     * @var string $workstationId
     */
    protected $workstationId = null;

    /**
     * @var string $applicationUser
     */
    protected $applicationUser = null;

    /**
     * @var string $environment
     */
    protected $environment = null;

    /**
     * @var string $library
     */
    protected $library = null;

    /**
     * @var string $libraryVersion
     */
    protected $libraryVersion = null;

    /**
     * @var string $securityLibrary
     */
    protected $securityLibrary = null;

    /**
     * @var string $securityLibraryVersion
     */
    protected $securityLibraryVersion = null;

    /**
     * @var string $testRun
     */
    protected $testRun = null;

    /**
     * @var string $testCase
     */
    protected $testCase = null;

    /**
     * @var string $poiDeviceIdentifier
     */
    protected $poiDeviceIdentifier = null;

    /**
     * @var string $sellingSystemName
     */
    protected $sellingSystemName = null;

    /**
     * @var string $sellingSystemVersion
     */
    protected $sellingSystemVersion = null;

    /**
     * @var string $sellingMiddlewareName
     */
    protected $sellingMiddlewareName = null;

    /**
     * @var string $sellingMiddlewareVersion
     */
    protected $sellingMiddlewareVersion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getApplicationName()
    {
      return $this->applicationName;
    }

    /**
     * @param string $applicationName
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setApplicationName($applicationName)
    {
      $this->applicationName = $applicationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplicationVersion()
    {
      return $this->applicationVersion;
    }

    /**
     * @param string $applicationVersion
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setApplicationVersion($applicationVersion)
    {
      $this->applicationVersion = $applicationVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkstationId()
    {
      return $this->workstationId;
    }

    /**
     * @param string $workstationId
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setWorkstationId($workstationId)
    {
      $this->workstationId = $workstationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplicationUser()
    {
      return $this->applicationUser;
    }

    /**
     * @param string $applicationUser
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setApplicationUser($applicationUser)
    {
      $this->applicationUser = $applicationUser;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
      return $this->environment;
    }

    /**
     * @param string $environment
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setEnvironment($environment)
    {
      $this->environment = $environment;
      return $this;
    }

    /**
     * @return string
     */
    public function getLibrary()
    {
      return $this->library;
    }

    /**
     * @param string $library
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setLibrary($library)
    {
      $this->library = $library;
      return $this;
    }

    /**
     * @return string
     */
    public function getLibraryVersion()
    {
      return $this->libraryVersion;
    }

    /**
     * @param string $libraryVersion
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setLibraryVersion($libraryVersion)
    {
      $this->libraryVersion = $libraryVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecurityLibrary()
    {
      return $this->securityLibrary;
    }

    /**
     * @param string $securityLibrary
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setSecurityLibrary($securityLibrary)
    {
      $this->securityLibrary = $securityLibrary;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecurityLibraryVersion()
    {
      return $this->securityLibraryVersion;
    }

    /**
     * @param string $securityLibraryVersion
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setSecurityLibraryVersion($securityLibraryVersion)
    {
      $this->securityLibraryVersion = $securityLibraryVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getTestRun()
    {
      return $this->testRun;
    }

    /**
     * @param string $testRun
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setTestRun($testRun)
    {
      $this->testRun = $testRun;
      return $this;
    }

    /**
     * @return string
     */
    public function getTestCase()
    {
      return $this->testCase;
    }

    /**
     * @param string $testCase
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setTestCase($testCase)
    {
      $this->testCase = $testCase;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoiDeviceIdentifier()
    {
      return $this->poiDeviceIdentifier;
    }

    /**
     * @param string $poiDeviceIdentifier
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setPoiDeviceIdentifier($poiDeviceIdentifier)
    {
      $this->poiDeviceIdentifier = $poiDeviceIdentifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellingSystemName()
    {
      return $this->sellingSystemName;
    }

    /**
     * @param string $sellingSystemName
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setSellingSystemName($sellingSystemName)
    {
      $this->sellingSystemName = $sellingSystemName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellingSystemVersion()
    {
      return $this->sellingSystemVersion;
    }

    /**
     * @param string $sellingSystemVersion
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setSellingSystemVersion($sellingSystemVersion)
    {
      $this->sellingSystemVersion = $sellingSystemVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellingMiddlewareName()
    {
      return $this->sellingMiddlewareName;
    }

    /**
     * @param string $sellingMiddlewareName
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setSellingMiddlewareName($sellingMiddlewareName)
    {
      $this->sellingMiddlewareName = $sellingMiddlewareName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellingMiddlewareVersion()
    {
      return $this->sellingMiddlewareVersion;
    }

    /**
     * @param string $sellingMiddlewareVersion
     * @return \FreedomPay\Freeway\ClientMetadata
     */
    public function setSellingMiddlewareVersion($sellingMiddlewareVersion)
    {
      $this->sellingMiddlewareVersion = $sellingMiddlewareVersion;
      return $this;
    }

}
