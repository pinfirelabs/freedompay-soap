<?php

namespace FreedomPay\Freeway;

class ReplyMessage
{

    /**
     * @var AdminReply $adminReply
     */
    protected $adminReply = null;

    /**
     * @var CCAuthReply $ccAuthReply
     */
    protected $ccAuthReply = null;

    /**
     * @var CCCaptureReply $ccCaptureReply
     */
    protected $ccCaptureReply = null;

    /**
     * @var CCCreditReply $ccCreditReply
     */
    protected $ccCreditReply = null;

    /**
     * @var CCFollowupReply $ccFollowupReply
     */
    protected $ccFollowupReply = null;

    /**
     * @var DccReply $dccReply
     */
    protected $dccReply = null;

    /**
     * @var string $decision
     */
    protected $decision = null;

    /**
     * @var DiscountReply $discountReply
     */
    protected $discountReply = null;

    /**
     * @var FraudCheckReply $fraudCheckReply
     */
    protected $fraudCheckReply = null;

    /**
     * @var InquiryReply $inquiryReply
     */
    protected $inquiryReply = null;

    /**
     * @var ArrayOfString1 $invalidFields
     */
    protected $invalidFields = null;

    /**
     * @var LoyaltyReply $loyaltyReply
     */
    protected $loyaltyReply = null;

    /**
     * @var string $magicCookie
     */
    protected $magicCookie = null;

    /**
     * @var string $merchantReferenceCode
     */
    protected $merchantReferenceCode = null;

    /**
     * @var MessageReply $messageReply
     */
    protected $messageReply = null;

    /**
     * @var ArrayOfString2 $missingFields
     */
    protected $missingFields = null;

    /**
     * @var MobileReply $mobileReply
     */
    protected $mobileReply = null;

    /**
     * @var NetworkData $networkData
     */
    protected $networkData = null;

    /**
     * @var PromoReply $promoReply
     */
    protected $promoReply = null;

    /**
     * @var int $reasonCode
     */
    protected $reasonCode = null;

    /**
     * @var ReceiptData $receiptData
     */
    protected $receiptData = null;

    /**
     * @var CheckReceiptData $checkReceiptData
     */
    protected $checkReceiptData = null;

    /**
     * @var string $requestID
     */
    protected $requestID = null;

    /**
     * @var string $requestToken
     */
    protected $requestToken = null;

    /**
     * @var SessionReply $sessionReply
     */
    protected $sessionReply = null;

    /**
     * @var TokenCreateReply $tokenCreateReply
     */
    protected $tokenCreateReply = null;

    /**
     * @var TokenInformation $tokenInformation
     */
    protected $tokenInformation = null;

    /**
     * @var VendControlReply $vendControlReply
     */
    protected $vendControlReply = null;

    /**
     * @var VoidReply $voidReply
     */
    protected $voidReply = null;

    /**
     * @var TORReply $torReply
     */
    protected $torReply = null;

    /**
     * @var EodReply $eodReply
     */
    protected $eodReply = null;

    /**
     * @var IncentiveReply $incentiveReply
     */
    protected $incentiveReply = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdminReply
     */
    public function getAdminReply()
    {
      return $this->adminReply;
    }

    /**
     * @param AdminReply $adminReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setAdminReply($adminReply)
    {
      $this->adminReply = $adminReply;
      return $this;
    }

    /**
     * @return CCAuthReply
     */
    public function getCcAuthReply()
    {
      return $this->ccAuthReply;
    }

    /**
     * @param CCAuthReply $ccAuthReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setCcAuthReply($ccAuthReply)
    {
      $this->ccAuthReply = $ccAuthReply;
      return $this;
    }

    /**
     * @return CCCaptureReply
     */
    public function getCcCaptureReply()
    {
      return $this->ccCaptureReply;
    }

    /**
     * @param CCCaptureReply $ccCaptureReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setCcCaptureReply($ccCaptureReply)
    {
      $this->ccCaptureReply = $ccCaptureReply;
      return $this;
    }

    /**
     * @return CCCreditReply
     */
    public function getCcCreditReply()
    {
      return $this->ccCreditReply;
    }

    /**
     * @param CCCreditReply $ccCreditReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setCcCreditReply($ccCreditReply)
    {
      $this->ccCreditReply = $ccCreditReply;
      return $this;
    }

    /**
     * @return CCFollowupReply
     */
    public function getCcFollowupReply()
    {
      return $this->ccFollowupReply;
    }

    /**
     * @param CCFollowupReply $ccFollowupReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setCcFollowupReply($ccFollowupReply)
    {
      $this->ccFollowupReply = $ccFollowupReply;
      return $this;
    }

    /**
     * @return DccReply
     */
    public function getDccReply()
    {
      return $this->dccReply;
    }

    /**
     * @param DccReply $dccReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setDccReply($dccReply)
    {
      $this->dccReply = $dccReply;
      return $this;
    }

    /**
     * @return string
     */
    public function getDecision()
    {
      return $this->decision;
    }

    /**
     * @param string $decision
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setDecision($decision)
    {
      $this->decision = $decision;
      return $this;
    }

    /**
     * @return DiscountReply
     */
    public function getDiscountReply()
    {
      return $this->discountReply;
    }

    /**
     * @param DiscountReply $discountReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setDiscountReply($discountReply)
    {
      $this->discountReply = $discountReply;
      return $this;
    }

    /**
     * @return FraudCheckReply
     */
    public function getFraudCheckReply()
    {
      return $this->fraudCheckReply;
    }

    /**
     * @param FraudCheckReply $fraudCheckReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setFraudCheckReply($fraudCheckReply)
    {
      $this->fraudCheckReply = $fraudCheckReply;
      return $this;
    }

    /**
     * @return InquiryReply
     */
    public function getInquiryReply()
    {
      return $this->inquiryReply;
    }

    /**
     * @param InquiryReply $inquiryReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setInquiryReply($inquiryReply)
    {
      $this->inquiryReply = $inquiryReply;
      return $this;
    }

    /**
     * @return ArrayOfString1
     */
    public function getInvalidFields()
    {
      return $this->invalidFields;
    }

    /**
     * @param ArrayOfString1 $invalidFields
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setInvalidFields($invalidFields)
    {
      $this->invalidFields = $invalidFields;
      return $this;
    }

    /**
     * @return LoyaltyReply
     */
    public function getLoyaltyReply()
    {
      return $this->loyaltyReply;
    }

    /**
     * @param LoyaltyReply $loyaltyReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setLoyaltyReply($loyaltyReply)
    {
      $this->loyaltyReply = $loyaltyReply;
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
     * @return \FreedomPay\Freeway\ReplyMessage
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
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setMerchantReferenceCode($merchantReferenceCode)
    {
      $this->merchantReferenceCode = $merchantReferenceCode;
      return $this;
    }

    /**
     * @return MessageReply
     */
    public function getMessageReply()
    {
      return $this->messageReply;
    }

    /**
     * @param MessageReply $messageReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setMessageReply($messageReply)
    {
      $this->messageReply = $messageReply;
      return $this;
    }

    /**
     * @return ArrayOfString2
     */
    public function getMissingFields()
    {
      return $this->missingFields;
    }

    /**
     * @param ArrayOfString2 $missingFields
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setMissingFields($missingFields)
    {
      $this->missingFields = $missingFields;
      return $this;
    }

    /**
     * @return MobileReply
     */
    public function getMobileReply()
    {
      return $this->mobileReply;
    }

    /**
     * @param MobileReply $mobileReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setMobileReply($mobileReply)
    {
      $this->mobileReply = $mobileReply;
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
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setNetworkData($networkData)
    {
      $this->networkData = $networkData;
      return $this;
    }

    /**
     * @return PromoReply
     */
    public function getPromoReply()
    {
      return $this->promoReply;
    }

    /**
     * @param PromoReply $promoReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setPromoReply($promoReply)
    {
      $this->promoReply = $promoReply;
      return $this;
    }

    /**
     * @return int
     */
    public function getReasonCode()
    {
      return $this->reasonCode;
    }

    /**
     * @param int $reasonCode
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setReasonCode($reasonCode)
    {
      $this->reasonCode = $reasonCode;
      return $this;
    }

    /**
     * @return ReceiptData
     */
    public function getReceiptData()
    {
      return $this->receiptData;
    }

    /**
     * @param ReceiptData $receiptData
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setReceiptData($receiptData)
    {
      $this->receiptData = $receiptData;
      return $this;
    }

    /**
     * @return CheckReceiptData
     */
    public function getCheckReceiptData()
    {
      return $this->checkReceiptData;
    }

    /**
     * @param CheckReceiptData $checkReceiptData
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setCheckReceiptData($checkReceiptData)
    {
      $this->checkReceiptData = $checkReceiptData;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestID()
    {
      return $this->requestID;
    }

    /**
     * @param string $requestID
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setRequestID($requestID)
    {
      $this->requestID = $requestID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestToken()
    {
      return $this->requestToken;
    }

    /**
     * @param string $requestToken
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setRequestToken($requestToken)
    {
      $this->requestToken = $requestToken;
      return $this;
    }

    /**
     * @return SessionReply
     */
    public function getSessionReply()
    {
      return $this->sessionReply;
    }

    /**
     * @param SessionReply $sessionReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setSessionReply($sessionReply)
    {
      $this->sessionReply = $sessionReply;
      return $this;
    }

    /**
     * @return TokenCreateReply
     */
    public function getTokenCreateReply()
    {
      return $this->tokenCreateReply;
    }

    /**
     * @param TokenCreateReply $tokenCreateReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setTokenCreateReply($tokenCreateReply)
    {
      $this->tokenCreateReply = $tokenCreateReply;
      return $this;
    }

    /**
     * @return TokenInformation
     */
    public function getTokenInformation()
    {
      return $this->tokenInformation;
    }

    /**
     * @param TokenInformation $tokenInformation
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setTokenInformation($tokenInformation)
    {
      $this->tokenInformation = $tokenInformation;
      return $this;
    }

    /**
     * @return VendControlReply
     */
    public function getVendControlReply()
    {
      return $this->vendControlReply;
    }

    /**
     * @param VendControlReply $vendControlReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setVendControlReply($vendControlReply)
    {
      $this->vendControlReply = $vendControlReply;
      return $this;
    }

    /**
     * @return VoidReply
     */
    public function getVoidReply()
    {
      return $this->voidReply;
    }

    /**
     * @param VoidReply $voidReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setVoidReply($voidReply)
    {
      $this->voidReply = $voidReply;
      return $this;
    }

    /**
     * @return TORReply
     */
    public function getTorReply()
    {
      return $this->torReply;
    }

    /**
     * @param TORReply $torReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setTorReply($torReply)
    {
      $this->torReply = $torReply;
      return $this;
    }

    /**
     * @return EodReply
     */
    public function getEodReply()
    {
      return $this->eodReply;
    }

    /**
     * @param EodReply $eodReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setEodReply($eodReply)
    {
      $this->eodReply = $eodReply;
      return $this;
    }

    /**
     * @return IncentiveReply
     */
    public function getIncentiveReply()
    {
      return $this->incentiveReply;
    }

    /**
     * @param IncentiveReply $incentiveReply
     * @return \FreedomPay\Freeway\ReplyMessage
     */
    public function setIncentiveReply($incentiveReply)
    {
      $this->incentiveReply = $incentiveReply;
      return $this;
    }

}
