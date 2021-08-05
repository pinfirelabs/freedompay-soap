<?php

namespace FreedomPay\Freeway;

class FreewayService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Submit' => 'FreedomPay\\Freeway\\Submit',
      'RequestMessage' => 'FreedomPay\\Freeway\\RequestMessage',
      'AdminService' => 'FreedomPay\\Freeway\\AdminService',
      'AutoRentalData' => 'FreedomPay\\Freeway\\AutoRentalData',
      'HealthcareDataWeb' => 'FreedomPay\\Freeway\\HealthcareDataWeb',
      'BillTo' => 'FreedomPay\\Freeway\\BillTo',
      'Card' => 'FreedomPay\\Freeway\\Card',
      'CCAuthService' => 'FreedomPay\\Freeway\\CCAuthService',
      'CCCaptureService' => 'FreedomPay\\Freeway\\CCCaptureService',
      'CCCreditService' => 'FreedomPay\\Freeway\\CCCreditService',
      'CCFollowupService' => 'FreedomPay\\Freeway\\CCFollowupService',
      'DccService' => 'FreedomPay\\Freeway\\DccService',
      'DccInfo' => 'FreedomPay\\Freeway\\DccInfo',
      'Check' => 'FreedomPay\\Freeway\\Check',
      'ClientMetadata' => 'FreedomPay\\Freeway\\ClientMetadata',
      'DiscountService' => 'FreedomPay\\Freeway\\DiscountService',
      'EfvOptions' => 'FreedomPay\\Freeway\\EfvOptions',
      'FleetData' => 'FreedomPay\\Freeway\\FleetData',
      'FraudCheckService' => 'FreedomPay\\Freeway\\FraudCheckService',
      'ArrayOfUserDefinedField' => 'FreedomPay\\Freeway\\ArrayOfUserDefinedField',
      'UserDefinedField' => 'FreedomPay\\Freeway\\UserDefinedField',
      'ArrayOfString' => 'FreedomPay\\Freeway\\ArrayOfString',
      'InquiryService' => 'FreedomPay\\Freeway\\InquiryService',
      'HotelData' => 'FreedomPay\\Freeway\\HotelData',
      'InvoiceDiscountDetail' => 'FreedomPay\\Freeway\\InvoiceDiscountDetail',
      'EIDDetail' => 'FreedomPay\\Freeway\\EIDDetail',
      'InvoiceHeader' => 'FreedomPay\\Freeway\\InvoiceHeader',
      'ArrayOfItem' => 'FreedomPay\\Freeway\\ArrayOfItem',
      'Item' => 'FreedomPay\\Freeway\\Item',
      'ArrayOfEIDDetail' => 'FreedomPay\\Freeway\\ArrayOfEIDDetail',
      'TaxDetail' => 'FreedomPay\\Freeway\\TaxDetail',
      'TaxDetailItem' => 'FreedomPay\\Freeway\\TaxDetailItem',
      'LoyaltyService' => 'FreedomPay\\Freeway\\LoyaltyService',
      'MerchantDefinedData' => 'FreedomPay\\Freeway\\MerchantDefinedData',
      'MessageService' => 'FreedomPay\\Freeway\\MessageService',
      'MobileService' => 'FreedomPay\\Freeway\\MobileService',
      'NetworkData' => 'FreedomPay\\Freeway\\NetworkData',
      'ArrayOfNetworkCustomData' => 'FreedomPay\\Freeway\\ArrayOfNetworkCustomData',
      'NetworkCustomData' => 'FreedomPay\\Freeway\\NetworkCustomData',
      'OfflineControl' => 'FreedomPay\\Freeway\\OfflineControl',
      'Pos' => 'FreedomPay\\Freeway\\Pos',
      'PromoService' => 'FreedomPay\\Freeway\\PromoService',
      'PurchaseTotals' => 'FreedomPay\\Freeway\\PurchaseTotals',
      'RestaurantData' => 'FreedomPay\\Freeway\\RestaurantData',
      'SessionService' => 'FreedomPay\\Freeway\\SessionService',
      'ShipFrom' => 'FreedomPay\\Freeway\\ShipFrom',
      'ShipTo' => 'FreedomPay\\Freeway\\ShipTo',
      'TokenCreateService' => 'FreedomPay\\Freeway\\TokenCreateService',
      'VendControlService' => 'FreedomPay\\Freeway\\VendControlService',
      'VendProductList' => 'FreedomPay\\Freeway\\VendProductList',
      'VendProduct' => 'FreedomPay\\Freeway\\VendProduct',
      'VoidService' => 'FreedomPay\\Freeway\\VoidService',
      'TORService' => 'FreedomPay\\Freeway\\TORService',
      'EodService' => 'FreedomPay\\Freeway\\EodService',
      'IncentiveService' => 'FreedomPay\\Freeway\\IncentiveService',
      'IncentiveIncentive' => 'FreedomPay\\Freeway\\IncentiveIncentive',
      'MemberData' => 'FreedomPay\\Freeway\\MemberData',
      'SubmitResponse' => 'FreedomPay\\Freeway\\SubmitResponse',
      'ReplyMessage' => 'FreedomPay\\Freeway\\ReplyMessage',
      'AdminReply' => 'FreedomPay\\Freeway\\AdminReply',
      'CCAuthReply' => 'FreedomPay\\Freeway\\CCAuthReply',
      'CCCaptureReply' => 'FreedomPay\\Freeway\\CCCaptureReply',
      'CCCreditReply' => 'FreedomPay\\Freeway\\CCCreditReply',
      'CCFollowupReply' => 'FreedomPay\\Freeway\\CCFollowupReply',
      'DccReply' => 'FreedomPay\\Freeway\\DccReply',
      'DiscountReply' => 'FreedomPay\\Freeway\\DiscountReply',
      'ArrayOfDiscountMeta' => 'FreedomPay\\Freeway\\ArrayOfDiscountMeta',
      'DiscountMeta' => 'FreedomPay\\Freeway\\DiscountMeta',
      'ArrayOfDiscountInfo' => 'FreedomPay\\Freeway\\ArrayOfDiscountInfo',
      'DiscountInfo' => 'FreedomPay\\Freeway\\DiscountInfo',
      'ArrayOfItemDiscounts' => 'FreedomPay\\Freeway\\ArrayOfItemDiscounts',
      'ItemDiscounts' => 'FreedomPay\\Freeway\\ItemDiscounts',
      'FraudCheckReply' => 'FreedomPay\\Freeway\\FraudCheckReply',
      'InquiryReply' => 'FreedomPay\\Freeway\\InquiryReply',
      'ArrayOfString1' => 'FreedomPay\\Freeway\\ArrayOfString1',
      'LoyaltyReply' => 'FreedomPay\\Freeway\\LoyaltyReply',
      'ArrayOfLoyaltyProgramData' => 'FreedomPay\\Freeway\\ArrayOfLoyaltyProgramData',
      'LoyaltyProgramData' => 'FreedomPay\\Freeway\\LoyaltyProgramData',
      'MessageReply' => 'FreedomPay\\Freeway\\MessageReply',
      'ArrayOfMessageInfo' => 'FreedomPay\\Freeway\\ArrayOfMessageInfo',
      'MessageInfo' => 'FreedomPay\\Freeway\\MessageInfo',
      'ArrayOfString2' => 'FreedomPay\\Freeway\\ArrayOfString2',
      'MobileReply' => 'FreedomPay\\Freeway\\MobileReply',
      'PromoReply' => 'FreedomPay\\Freeway\\PromoReply',
      'ArrayOfPromoInfo' => 'FreedomPay\\Freeway\\ArrayOfPromoInfo',
      'PromoInfo' => 'FreedomPay\\Freeway\\PromoInfo',
      'InvoicePromos' => 'FreedomPay\\Freeway\\InvoicePromos',
      'ArrayOfItemPromos' => 'FreedomPay\\Freeway\\ArrayOfItemPromos',
      'ItemPromos' => 'FreedomPay\\Freeway\\ItemPromos',
      'ReceiptData' => 'FreedomPay\\Freeway\\ReceiptData',
      'ArrayOfString3' => 'FreedomPay\\Freeway\\ArrayOfString3',
      'CheckReceiptData' => 'FreedomPay\\Freeway\\CheckReceiptData',
      'SessionReply' => 'FreedomPay\\Freeway\\SessionReply',
      'TokenCreateReply' => 'FreedomPay\\Freeway\\TokenCreateReply',
      'TokenInformation' => 'FreedomPay\\Freeway\\TokenInformation',
      'VendControlReply' => 'FreedomPay\\Freeway\\VendControlReply',
      'VoidReply' => 'FreedomPay\\Freeway\\VoidReply',
      'TORReply' => 'FreedomPay\\Freeway\\TORReply',
      'EodReply' => 'FreedomPay\\Freeway\\EodReply',
      'IncentiveReply' => 'FreedomPay\\Freeway\\IncentiveReply',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://cs.uat.freedompay.com/Freeway/Service.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param Submit $parameters
     * @return SubmitResponse
     */
    public function Submit(Submit $parameters)
    {
      return $this->__soapCall('Submit', array($parameters));
    }

}
