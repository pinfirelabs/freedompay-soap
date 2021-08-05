<?php

namespace FreedomPay\Freeway;

class RequestMessage
{

    /**
     * @var string $clientId
     */
    protected $clientId = null;

    /**
     * @var string $storeId
     */
    protected $storeId = null;

    /**
     * @var string $terminalId
     */
    protected $terminalId = null;

    /**
     * @var string $esKey
     */
    protected $esKey = null;

    /**
     * @var AdminService $adminService
     */
    protected $adminService = null;

    /**
     * @var AutoRentalData $autoRentalData
     */
    protected $autoRentalData = null;

    /**
     * @var HealthcareDataWeb $healthcareData
     */
    protected $healthcareData = null;

    /**
     * @var BillTo $billTo
     */
    protected $billTo = null;

    /**
     * @var Card $card
     */
    protected $card = null;

    /**
     * @var CCAuthService $ccAuthService
     */
    protected $ccAuthService = null;

    /**
     * @var CCCaptureService $ccCaptureService
     */
    protected $ccCaptureService = null;

    /**
     * @var CCCreditService $ccCreditService
     */
    protected $ccCreditService = null;

    /**
     * @var CCFollowupService $ccFollowupService
     */
    protected $ccFollowupService = null;

    /**
     * @var DccService $dccService
     */
    protected $dccService = null;

    /**
     * @var DccInfo $dcc
     */
    protected $dcc = null;

    /**
     * @var Check $check
     */
    protected $check = null;

    /**
     * @var string $clerkId
     */
    protected $clerkId = null;

    /**
     * @var ClientMetadata $clientMetadata
     */
    protected $clientMetadata = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @var DiscountService $discountService
     */
    protected $discountService = null;

    /**
     * @var EfvOptions $efvOptions
     */
    protected $efvOptions = null;

    /**
     * @var FleetData $fleetData
     */
    protected $fleetData = null;

    /**
     * @var FraudCheckService $fraudCheckService
     */
    protected $fraudCheckService = null;

    /**
     * @var InquiryService $inquiryService
     */
    protected $inquiryService = null;

    /**
     * @var HotelData $hotelData
     */
    protected $hotelData = null;

    /**
     * @var InvoiceDiscountDetail $invoiceDiscountDetail
     */
    protected $invoiceDiscountDetail = null;

    /**
     * @var InvoiceHeader $invoiceHeader
     */
    protected $invoiceHeader = null;

    /**
     * @var ArrayOfItem $items
     */
    protected $items = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var LoyaltyService $loyaltyService
     */
    protected $loyaltyService = null;

    /**
     * @var MerchantDefinedData $merchantDefinedData
     */
    protected $merchantDefinedData = null;

    /**
     * @var string $magicCookie
     */
    protected $magicCookie = null;

    /**
     * @var string $merchantReferenceCode
     */
    protected $merchantReferenceCode = null;

    /**
     * @var string $merchantBatchId
     */
    protected $merchantBatchId = null;

    /**
     * @var MessageService $messageService
     */
    protected $messageService = null;

    /**
     * @var MobileService $mobileService
     */
    protected $mobileService = null;

    /**
     * @var NetworkData $networkData
     */
    protected $networkData = null;

    /**
     * @var OfflineControl $offlineControl
     */
    protected $offlineControl = null;

    /**
     * @var string $orderRequestID
     */
    protected $orderRequestID = null;

    /**
     * @var string $orderRequestToken
     */
    protected $orderRequestToken = null;

    /**
     * @var Pos $pos
     */
    protected $pos = null;

    /**
     * @var PromoService $promoService
     */
    protected $promoService = null;

    /**
     * @var PurchaseTotals $purchaseTotals
     */
    protected $purchaseTotals = null;

    /**
     * @var RestaurantData $restaurantData
     */
    protected $restaurantData = null;

    /**
     * @var string $responseFlags
     */
    protected $responseFlags = null;

    /**
     * @var string $sessionKey
     */
    protected $sessionKey = null;

    /**
     * @var SessionService $sessionService
     */
    protected $sessionService = null;

    /**
     * @var ShipFrom $shipFrom
     */
    protected $shipFrom = null;

    /**
     * @var ShipTo $shipTo
     */
    protected $shipTo = null;

    /**
     * @var TokenCreateService $tokenCreateService
     */
    protected $tokenCreateService = null;

    /**
     * @var VendControlService $vendControlService
     */
    protected $vendControlService = null;

    /**
     * @var VoidService $voidService
     */
    protected $voidService = null;

    /**
     * @var TORService $torService
     */
    protected $torService = null;

    /**
     * @var EodService $eodService
     */
    protected $eodService = null;

    /**
     * @var IncentiveService $incentiveService
     */
    protected $incentiveService = null;

    /**
     * @var MemberData $memberData
     */
    protected $memberData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getClientId()
    {
      return $this->clientId;
    }

    /**
     * @param string $clientId
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setClientId($clientId)
    {
      $this->clientId = $clientId;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreId()
    {
      return $this->storeId;
    }

    /**
     * @param string $storeId
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setStoreId($storeId)
    {
      $this->storeId = $storeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminalId()
    {
      return $this->terminalId;
    }

    /**
     * @param string $terminalId
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setTerminalId($terminalId)
    {
      $this->terminalId = $terminalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEsKey()
    {
      return $this->esKey;
    }

    /**
     * @param string $esKey
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setEsKey($esKey)
    {
      $this->esKey = $esKey;
      return $this;
    }

    /**
     * @return AdminService
     */
    public function getAdminService()
    {
      return $this->adminService;
    }

    /**
     * @param AdminService $adminService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setAdminService($adminService)
    {
      $this->adminService = $adminService;
      return $this;
    }

    /**
     * @return AutoRentalData
     */
    public function getAutoRentalData()
    {
      return $this->autoRentalData;
    }

    /**
     * @param AutoRentalData $autoRentalData
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setAutoRentalData($autoRentalData)
    {
      $this->autoRentalData = $autoRentalData;
      return $this;
    }

    /**
     * @return HealthcareDataWeb
     */
    public function getHealthcareData()
    {
      return $this->healthcareData;
    }

    /**
     * @param HealthcareDataWeb $healthcareData
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setHealthcareData($healthcareData)
    {
      $this->healthcareData = $healthcareData;
      return $this;
    }

    /**
     * @return BillTo
     */
    public function getBillTo()
    {
      return $this->billTo;
    }

    /**
     * @param BillTo $billTo
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setBillTo($billTo)
    {
      $this->billTo = $billTo;
      return $this;
    }

    /**
     * @return Card
     */
    public function getCard()
    {
      return $this->card;
    }

    /**
     * @param Card $card
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setCard($card)
    {
      $this->card = $card;
      return $this;
    }

    /**
     * @return CCAuthService
     */
    public function getCcAuthService()
    {
      return $this->ccAuthService;
    }

    /**
     * @param CCAuthService $ccAuthService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setCcAuthService($ccAuthService)
    {
      $this->ccAuthService = $ccAuthService;
      return $this;
    }

    /**
     * @return CCCaptureService
     */
    public function getCcCaptureService()
    {
      return $this->ccCaptureService;
    }

    /**
     * @param CCCaptureService $ccCaptureService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setCcCaptureService($ccCaptureService)
    {
      $this->ccCaptureService = $ccCaptureService;
      return $this;
    }

    /**
     * @return CCCreditService
     */
    public function getCcCreditService()
    {
      return $this->ccCreditService;
    }

    /**
     * @param CCCreditService $ccCreditService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setCcCreditService($ccCreditService)
    {
      $this->ccCreditService = $ccCreditService;
      return $this;
    }

    /**
     * @return CCFollowupService
     */
    public function getCcFollowupService()
    {
      return $this->ccFollowupService;
    }

    /**
     * @param CCFollowupService $ccFollowupService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setCcFollowupService($ccFollowupService)
    {
      $this->ccFollowupService = $ccFollowupService;
      return $this;
    }

    /**
     * @return DccService
     */
    public function getDccService()
    {
      return $this->dccService;
    }

    /**
     * @param DccService $dccService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setDccService($dccService)
    {
      $this->dccService = $dccService;
      return $this;
    }

    /**
     * @return DccInfo
     */
    public function getDcc()
    {
      return $this->dcc;
    }

    /**
     * @param DccInfo $dcc
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setDcc($dcc)
    {
      $this->dcc = $dcc;
      return $this;
    }

    /**
     * @return Check
     */
    public function getCheck()
    {
      return $this->check;
    }

    /**
     * @param Check $check
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setCheck($check)
    {
      $this->check = $check;
      return $this;
    }

    /**
     * @return string
     */
    public function getClerkId()
    {
      return $this->clerkId;
    }

    /**
     * @param string $clerkId
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setClerkId($clerkId)
    {
      $this->clerkId = $clerkId;
      return $this;
    }

    /**
     * @return ClientMetadata
     */
    public function getClientMetadata()
    {
      return $this->clientMetadata;
    }

    /**
     * @param ClientMetadata $clientMetadata
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setClientMetadata($clientMetadata)
    {
      $this->clientMetadata = $clientMetadata;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param string $comments
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return DiscountService
     */
    public function getDiscountService()
    {
      return $this->discountService;
    }

    /**
     * @param DiscountService $discountService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setDiscountService($discountService)
    {
      $this->discountService = $discountService;
      return $this;
    }

    /**
     * @return EfvOptions
     */
    public function getEfvOptions()
    {
      return $this->efvOptions;
    }

    /**
     * @param EfvOptions $efvOptions
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setEfvOptions($efvOptions)
    {
      $this->efvOptions = $efvOptions;
      return $this;
    }

    /**
     * @return FleetData
     */
    public function getFleetData()
    {
      return $this->fleetData;
    }

    /**
     * @param FleetData $fleetData
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setFleetData($fleetData)
    {
      $this->fleetData = $fleetData;
      return $this;
    }

    /**
     * @return FraudCheckService
     */
    public function getFraudCheckService()
    {
      return $this->fraudCheckService;
    }

    /**
     * @param FraudCheckService $fraudCheckService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setFraudCheckService($fraudCheckService)
    {
      $this->fraudCheckService = $fraudCheckService;
      return $this;
    }

    /**
     * @return InquiryService
     */
    public function getInquiryService()
    {
      return $this->inquiryService;
    }

    /**
     * @param InquiryService $inquiryService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setInquiryService($inquiryService)
    {
      $this->inquiryService = $inquiryService;
      return $this;
    }

    /**
     * @return HotelData
     */
    public function getHotelData()
    {
      return $this->hotelData;
    }

    /**
     * @param HotelData $hotelData
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setHotelData($hotelData)
    {
      $this->hotelData = $hotelData;
      return $this;
    }

    /**
     * @return InvoiceDiscountDetail
     */
    public function getInvoiceDiscountDetail()
    {
      return $this->invoiceDiscountDetail;
    }

    /**
     * @param InvoiceDiscountDetail $invoiceDiscountDetail
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setInvoiceDiscountDetail($invoiceDiscountDetail)
    {
      $this->invoiceDiscountDetail = $invoiceDiscountDetail;
      return $this;
    }

    /**
     * @return InvoiceHeader
     */
    public function getInvoiceHeader()
    {
      return $this->invoiceHeader;
    }

    /**
     * @param InvoiceHeader $invoiceHeader
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setInvoiceHeader($invoiceHeader)
    {
      $this->invoiceHeader = $invoiceHeader;
      return $this;
    }

    /**
     * @return ArrayOfItem
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param ArrayOfItem $items
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return LoyaltyService
     */
    public function getLoyaltyService()
    {
      return $this->loyaltyService;
    }

    /**
     * @param LoyaltyService $loyaltyService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setLoyaltyService($loyaltyService)
    {
      $this->loyaltyService = $loyaltyService;
      return $this;
    }

    /**
     * @return MerchantDefinedData
     */
    public function getMerchantDefinedData()
    {
      return $this->merchantDefinedData;
    }

    /**
     * @param MerchantDefinedData $merchantDefinedData
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setMerchantDefinedData($merchantDefinedData)
    {
      $this->merchantDefinedData = $merchantDefinedData;
      return $this;
    }

    /**
     * @return string
     */
    public function getMagicCookie()
    {
      return $this->magicCookie;
    }

    /**
     * @param string $magicCookie
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setMagicCookie($magicCookie)
    {
      $this->magicCookie = $magicCookie;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantReferenceCode()
    {
      return $this->merchantReferenceCode;
    }

    /**
     * @param string $merchantReferenceCode
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setMerchantReferenceCode($merchantReferenceCode)
    {
      $this->merchantReferenceCode = $merchantReferenceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantBatchId()
    {
      return $this->merchantBatchId;
    }

    /**
     * @param string $merchantBatchId
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setMerchantBatchId($merchantBatchId)
    {
      $this->merchantBatchId = $merchantBatchId;
      return $this;
    }

    /**
     * @return MessageService
     */
    public function getMessageService()
    {
      return $this->messageService;
    }

    /**
     * @param MessageService $messageService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setMessageService($messageService)
    {
      $this->messageService = $messageService;
      return $this;
    }

    /**
     * @return MobileService
     */
    public function getMobileService()
    {
      return $this->mobileService;
    }

    /**
     * @param MobileService $mobileService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setMobileService($mobileService)
    {
      $this->mobileService = $mobileService;
      return $this;
    }

    /**
     * @return NetworkData
     */
    public function getNetworkData()
    {
      return $this->networkData;
    }

    /**
     * @param NetworkData $networkData
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setNetworkData($networkData)
    {
      $this->networkData = $networkData;
      return $this;
    }

    /**
     * @return OfflineControl
     */
    public function getOfflineControl()
    {
      return $this->offlineControl;
    }

    /**
     * @param OfflineControl $offlineControl
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setOfflineControl($offlineControl)
    {
      $this->offlineControl = $offlineControl;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderRequestID()
    {
      return $this->orderRequestID;
    }

    /**
     * @param string $orderRequestID
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setOrderRequestID($orderRequestID)
    {
      $this->orderRequestID = $orderRequestID;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderRequestToken()
    {
      return $this->orderRequestToken;
    }

    /**
     * @param string $orderRequestToken
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setOrderRequestToken($orderRequestToken)
    {
      $this->orderRequestToken = $orderRequestToken;
      return $this;
    }

    /**
     * @return Pos
     */
    public function getPos()
    {
      return $this->pos;
    }

    /**
     * @param Pos $pos
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setPos($pos)
    {
      $this->pos = $pos;
      return $this;
    }

    /**
     * @return PromoService
     */
    public function getPromoService()
    {
      return $this->promoService;
    }

    /**
     * @param PromoService $promoService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setPromoService($promoService)
    {
      $this->promoService = $promoService;
      return $this;
    }

    /**
     * @return PurchaseTotals
     */
    public function getPurchaseTotals()
    {
      return $this->purchaseTotals;
    }

    /**
     * @param PurchaseTotals $purchaseTotals
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setPurchaseTotals($purchaseTotals)
    {
      $this->purchaseTotals = $purchaseTotals;
      return $this;
    }

    /**
     * @return RestaurantData
     */
    public function getRestaurantData()
    {
      return $this->restaurantData;
    }

    /**
     * @param RestaurantData $restaurantData
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setRestaurantData($restaurantData)
    {
      $this->restaurantData = $restaurantData;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseFlags()
    {
      return $this->responseFlags;
    }

    /**
     * @param string $responseFlags
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setResponseFlags($responseFlags)
    {
      $this->responseFlags = $responseFlags;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionKey()
    {
      return $this->sessionKey;
    }

    /**
     * @param string $sessionKey
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setSessionKey($sessionKey)
    {
      $this->sessionKey = $sessionKey;
      return $this;
    }

    /**
     * @return SessionService
     */
    public function getSessionService()
    {
      return $this->sessionService;
    }

    /**
     * @param SessionService $sessionService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setSessionService($sessionService)
    {
      $this->sessionService = $sessionService;
      return $this;
    }

    /**
     * @return ShipFrom
     */
    public function getShipFrom()
    {
      return $this->shipFrom;
    }

    /**
     * @param ShipFrom $shipFrom
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setShipFrom($shipFrom)
    {
      $this->shipFrom = $shipFrom;
      return $this;
    }

    /**
     * @return ShipTo
     */
    public function getShipTo()
    {
      return $this->shipTo;
    }

    /**
     * @param ShipTo $shipTo
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setShipTo($shipTo)
    {
      $this->shipTo = $shipTo;
      return $this;
    }

    /**
     * @return TokenCreateService
     */
    public function getTokenCreateService()
    {
      return $this->tokenCreateService;
    }

    /**
     * @param TokenCreateService $tokenCreateService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setTokenCreateService($tokenCreateService)
    {
      $this->tokenCreateService = $tokenCreateService;
      return $this;
    }

    /**
     * @return VendControlService
     */
    public function getVendControlService()
    {
      return $this->vendControlService;
    }

    /**
     * @param VendControlService $vendControlService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setVendControlService($vendControlService)
    {
      $this->vendControlService = $vendControlService;
      return $this;
    }

    /**
     * @return VoidService
     */
    public function getVoidService()
    {
      return $this->voidService;
    }

    /**
     * @param VoidService $voidService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setVoidService($voidService)
    {
      $this->voidService = $voidService;
      return $this;
    }

    /**
     * @return TORService
     */
    public function getTorService()
    {
      return $this->torService;
    }

    /**
     * @param TORService $torService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setTorService($torService)
    {
      $this->torService = $torService;
      return $this;
    }

    /**
     * @return EodService
     */
    public function getEodService()
    {
      return $this->eodService;
    }

    /**
     * @param EodService $eodService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setEodService($eodService)
    {
      $this->eodService = $eodService;
      return $this;
    }

    /**
     * @return IncentiveService
     */
    public function getIncentiveService()
    {
      return $this->incentiveService;
    }

    /**
     * @param IncentiveService $incentiveService
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setIncentiveService($incentiveService)
    {
      $this->incentiveService = $incentiveService;
      return $this;
    }

    /**
     * @return MemberData
     */
    public function getMemberData()
    {
      return $this->memberData;
    }

    /**
     * @param MemberData $memberData
     * @return \FreedomPay\Freeway\RequestMessage
     */
    public function setMemberData($memberData)
    {
      $this->memberData = $memberData;
      return $this;
    }

}
