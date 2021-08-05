<?php

namespace FreedomPay\Freeway;

class Item
{

    /**
     * @var string $discountAmount
     */
    protected $discountAmount = null;

    /**
     * @var string $discountFlag
     */
    protected $discountFlag = null;

    /**
     * @var string $taxIncludedFlag
     */
    protected $taxIncludedFlag = null;

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $productUPC
     */
    protected $productUPC = null;

    /**
     * @var string $productSKU
     */
    protected $productSKU = null;

    /**
     * @var string $productName
     */
    protected $productName = null;

    /**
     * @var string $productDescription
     */
    protected $productDescription = null;

    /**
     * @var string $productMake
     */
    protected $productMake = null;

    /**
     * @var string $productModel
     */
    protected $productModel = null;

    /**
     * @var string $productPartNumber
     */
    protected $productPartNumber = null;

    /**
     * @var string $commodityCode
     */
    protected $commodityCode = null;

    /**
     * @var string $productYear
     */
    protected $productYear = null;

    /**
     * @var string $productSerial1
     */
    protected $productSerial1 = null;

    /**
     * @var string $productSerial2
     */
    protected $productSerial2 = null;

    /**
     * @var string $productSerial3
     */
    protected $productSerial3 = null;

    /**
     * @var string $customerAssetId
     */
    protected $customerAssetId = null;

    /**
     * @var string $category
     */
    protected $category = null;

    /**
     * @var string $subCategory
     */
    protected $subCategory = null;

    /**
     * @var string $unitPrice
     */
    protected $unitPrice = null;

    /**
     * @var string $quantity
     */
    protected $quantity = null;

    /**
     * @var string $totalAmount
     */
    protected $totalAmount = null;

    /**
     * @var string $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var string $promoCode
     */
    protected $promoCode = null;

    /**
     * @var string $freightAmount
     */
    protected $freightAmount = null;

    /**
     * @var string $unitOfMeasure
     */
    protected $unitOfMeasure = null;

    /**
     * @var string $saleCode
     */
    protected $saleCode = null;

    /**
     * @var string $customFormatId
     */
    protected $customFormatId = null;

    /**
     * @var string $custom1
     */
    protected $custom1 = null;

    /**
     * @var string $custom2
     */
    protected $custom2 = null;

    /**
     * @var string $custom3
     */
    protected $custom3 = null;

    /**
     * @var string $custom4
     */
    protected $custom4 = null;

    /**
     * @var string $custom5
     */
    protected $custom5 = null;

    /**
     * @var string $custom6
     */
    protected $custom6 = null;

    /**
     * @var string $custom7
     */
    protected $custom7 = null;

    /**
     * @var string $custom8
     */
    protected $custom8 = null;

    /**
     * @var string $custom9
     */
    protected $custom9 = null;

    /**
     * @var string $payAlloc
     */
    protected $payAlloc = null;

    /**
     * @var string $allocCode
     */
    protected $allocCode = null;

    /**
     * @var string $eidIndicator
     */
    protected $eidIndicator = null;

    /**
     * @var string $origUnitPrice
     */
    protected $origUnitPrice = null;

    /**
     * @var string $origTotalAmount
     */
    protected $origTotalAmount = null;

    /**
     * @var ArrayOfEIDDetail $eidDetail
     */
    protected $eidDetail = null;

    /**
     * @var TaxDetail $taxDetail
     */
    protected $taxDetail = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $tag
     */
    protected $tag = null;

    /**
     * @param string $id
     * @param string $tag
     */
    public function __construct($id, $tag)
    {
      $this->id = $id;
      $this->tag = $tag;
    }

    /**
     * @return string
     */
    public function getDiscountAmount()
    {
      return $this->discountAmount;
    }

    /**
     * @param string $discountAmount
     * @return \FreedomPay\Freeway\Item
     */
    public function setDiscountAmount($discountAmount)
    {
      $this->discountAmount = $discountAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountFlag()
    {
      return $this->discountFlag;
    }

    /**
     * @param string $discountFlag
     * @return \FreedomPay\Freeway\Item
     */
    public function setDiscountFlag($discountFlag)
    {
      $this->discountFlag = $discountFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxIncludedFlag()
    {
      return $this->taxIncludedFlag;
    }

    /**
     * @param string $taxIncludedFlag
     * @return \FreedomPay\Freeway\Item
     */
    public function setTaxIncludedFlag($taxIncludedFlag)
    {
      $this->taxIncludedFlag = $taxIncludedFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return \FreedomPay\Freeway\Item
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductUPC()
    {
      return $this->productUPC;
    }

    /**
     * @param string $productUPC
     * @return \FreedomPay\Freeway\Item
     */
    public function setProductUPC($productUPC)
    {
      $this->productUPC = $productUPC;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductSKU()
    {
      return $this->productSKU;
    }

    /**
     * @param string $productSKU
     * @return \FreedomPay\Freeway\Item
     */
    public function setProductSKU($productSKU)
    {
      $this->productSKU = $productSKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->productName;
    }

    /**
     * @param string $productName
     * @return \FreedomPay\Freeway\Item
     */
    public function setProductName($productName)
    {
      $this->productName = $productName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductDescription()
    {
      return $this->productDescription;
    }

    /**
     * @param string $productDescription
     * @return \FreedomPay\Freeway\Item
     */
    public function setProductDescription($productDescription)
    {
      $this->productDescription = $productDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductMake()
    {
      return $this->productMake;
    }

    /**
     * @param string $productMake
     * @return \FreedomPay\Freeway\Item
     */
    public function setProductMake($productMake)
    {
      $this->productMake = $productMake;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductModel()
    {
      return $this->productModel;
    }

    /**
     * @param string $productModel
     * @return \FreedomPay\Freeway\Item
     */
    public function setProductModel($productModel)
    {
      $this->productModel = $productModel;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductPartNumber()
    {
      return $this->productPartNumber;
    }

    /**
     * @param string $productPartNumber
     * @return \FreedomPay\Freeway\Item
     */
    public function setProductPartNumber($productPartNumber)
    {
      $this->productPartNumber = $productPartNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommodityCode()
    {
      return $this->commodityCode;
    }

    /**
     * @param string $commodityCode
     * @return \FreedomPay\Freeway\Item
     */
    public function setCommodityCode($commodityCode)
    {
      $this->commodityCode = $commodityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductYear()
    {
      return $this->productYear;
    }

    /**
     * @param string $productYear
     * @return \FreedomPay\Freeway\Item
     */
    public function setProductYear($productYear)
    {
      $this->productYear = $productYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductSerial1()
    {
      return $this->productSerial1;
    }

    /**
     * @param string $productSerial1
     * @return \FreedomPay\Freeway\Item
     */
    public function setProductSerial1($productSerial1)
    {
      $this->productSerial1 = $productSerial1;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductSerial2()
    {
      return $this->productSerial2;
    }

    /**
     * @param string $productSerial2
     * @return \FreedomPay\Freeway\Item
     */
    public function setProductSerial2($productSerial2)
    {
      $this->productSerial2 = $productSerial2;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductSerial3()
    {
      return $this->productSerial3;
    }

    /**
     * @param string $productSerial3
     * @return \FreedomPay\Freeway\Item
     */
    public function setProductSerial3($productSerial3)
    {
      $this->productSerial3 = $productSerial3;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerAssetId()
    {
      return $this->customerAssetId;
    }

    /**
     * @param string $customerAssetId
     * @return \FreedomPay\Freeway\Item
     */
    public function setCustomerAssetId($customerAssetId)
    {
      $this->customerAssetId = $customerAssetId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param string $category
     * @return \FreedomPay\Freeway\Item
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubCategory()
    {
      return $this->subCategory;
    }

    /**
     * @param string $subCategory
     * @return \FreedomPay\Freeway\Item
     */
    public function setSubCategory($subCategory)
    {
      $this->subCategory = $subCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitPrice()
    {
      return $this->unitPrice;
    }

    /**
     * @param string $unitPrice
     * @return \FreedomPay\Freeway\Item
     */
    public function setUnitPrice($unitPrice)
    {
      $this->unitPrice = $unitPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param string $quantity
     * @return \FreedomPay\Freeway\Item
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotalAmount()
    {
      return $this->totalAmount;
    }

    /**
     * @param string $totalAmount
     * @return \FreedomPay\Freeway\Item
     */
    public function setTotalAmount($totalAmount)
    {
      $this->totalAmount = $totalAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxAmount()
    {
      return $this->taxAmount;
    }

    /**
     * @param string $taxAmount
     * @return \FreedomPay\Freeway\Item
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromoCode()
    {
      return $this->promoCode;
    }

    /**
     * @param string $promoCode
     * @return \FreedomPay\Freeway\Item
     */
    public function setPromoCode($promoCode)
    {
      $this->promoCode = $promoCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreightAmount()
    {
      return $this->freightAmount;
    }

    /**
     * @param string $freightAmount
     * @return \FreedomPay\Freeway\Item
     */
    public function setFreightAmount($freightAmount)
    {
      $this->freightAmount = $freightAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasure()
    {
      return $this->unitOfMeasure;
    }

    /**
     * @param string $unitOfMeasure
     * @return \FreedomPay\Freeway\Item
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
      $this->unitOfMeasure = $unitOfMeasure;
      return $this;
    }

    /**
     * @return string
     */
    public function getSaleCode()
    {
      return $this->saleCode;
    }

    /**
     * @param string $saleCode
     * @return \FreedomPay\Freeway\Item
     */
    public function setSaleCode($saleCode)
    {
      $this->saleCode = $saleCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomFormatId()
    {
      return $this->customFormatId;
    }

    /**
     * @param string $customFormatId
     * @return \FreedomPay\Freeway\Item
     */
    public function setCustomFormatId($customFormatId)
    {
      $this->customFormatId = $customFormatId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom1()
    {
      return $this->custom1;
    }

    /**
     * @param string $custom1
     * @return \FreedomPay\Freeway\Item
     */
    public function setCustom1($custom1)
    {
      $this->custom1 = $custom1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom2()
    {
      return $this->custom2;
    }

    /**
     * @param string $custom2
     * @return \FreedomPay\Freeway\Item
     */
    public function setCustom2($custom2)
    {
      $this->custom2 = $custom2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom3()
    {
      return $this->custom3;
    }

    /**
     * @param string $custom3
     * @return \FreedomPay\Freeway\Item
     */
    public function setCustom3($custom3)
    {
      $this->custom3 = $custom3;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom4()
    {
      return $this->custom4;
    }

    /**
     * @param string $custom4
     * @return \FreedomPay\Freeway\Item
     */
    public function setCustom4($custom4)
    {
      $this->custom4 = $custom4;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom5()
    {
      return $this->custom5;
    }

    /**
     * @param string $custom5
     * @return \FreedomPay\Freeway\Item
     */
    public function setCustom5($custom5)
    {
      $this->custom5 = $custom5;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom6()
    {
      return $this->custom6;
    }

    /**
     * @param string $custom6
     * @return \FreedomPay\Freeway\Item
     */
    public function setCustom6($custom6)
    {
      $this->custom6 = $custom6;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom7()
    {
      return $this->custom7;
    }

    /**
     * @param string $custom7
     * @return \FreedomPay\Freeway\Item
     */
    public function setCustom7($custom7)
    {
      $this->custom7 = $custom7;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom8()
    {
      return $this->custom8;
    }

    /**
     * @param string $custom8
     * @return \FreedomPay\Freeway\Item
     */
    public function setCustom8($custom8)
    {
      $this->custom8 = $custom8;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom9()
    {
      return $this->custom9;
    }

    /**
     * @param string $custom9
     * @return \FreedomPay\Freeway\Item
     */
    public function setCustom9($custom9)
    {
      $this->custom9 = $custom9;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayAlloc()
    {
      return $this->payAlloc;
    }

    /**
     * @param string $payAlloc
     * @return \FreedomPay\Freeway\Item
     */
    public function setPayAlloc($payAlloc)
    {
      $this->payAlloc = $payAlloc;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllocCode()
    {
      return $this->allocCode;
    }

    /**
     * @param string $allocCode
     * @return \FreedomPay\Freeway\Item
     */
    public function setAllocCode($allocCode)
    {
      $this->allocCode = $allocCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEidIndicator()
    {
      return $this->eidIndicator;
    }

    /**
     * @param string $eidIndicator
     * @return \FreedomPay\Freeway\Item
     */
    public function setEidIndicator($eidIndicator)
    {
      $this->eidIndicator = $eidIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrigUnitPrice()
    {
      return $this->origUnitPrice;
    }

    /**
     * @param string $origUnitPrice
     * @return \FreedomPay\Freeway\Item
     */
    public function setOrigUnitPrice($origUnitPrice)
    {
      $this->origUnitPrice = $origUnitPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrigTotalAmount()
    {
      return $this->origTotalAmount;
    }

    /**
     * @param string $origTotalAmount
     * @return \FreedomPay\Freeway\Item
     */
    public function setOrigTotalAmount($origTotalAmount)
    {
      $this->origTotalAmount = $origTotalAmount;
      return $this;
    }

    /**
     * @return ArrayOfEIDDetail
     */
    public function getEidDetail()
    {
      return $this->eidDetail;
    }

    /**
     * @param ArrayOfEIDDetail $eidDetail
     * @return \FreedomPay\Freeway\Item
     */
    public function setEidDetail($eidDetail)
    {
      $this->eidDetail = $eidDetail;
      return $this;
    }

    /**
     * @return TaxDetail
     */
    public function getTaxDetail()
    {
      return $this->taxDetail;
    }

    /**
     * @param TaxDetail $taxDetail
     * @return \FreedomPay\Freeway\Item
     */
    public function setTaxDetail($taxDetail)
    {
      $this->taxDetail = $taxDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \FreedomPay\Freeway\Item
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
      return $this->tag;
    }

    /**
     * @param string $tag
     * @return \FreedomPay\Freeway\Item
     */
    public function setTag($tag)
    {
      $this->tag = $tag;
      return $this;
    }

}
