<?php

class commonResponse
{
  public $responseCode; // int
  public $responseCodeDetail; // string
  public $transactionStatusLabel; // string
  public $shopId; // string
  public $paymentSource; // string
  public $submissionDate; // dateTime
  public $contractNumber; // string
  public $paymentToken; // string
}

class shippingDetailsRequest
{
  public $type; // custStatus
  public $firstName; // string
  public $lastName; // string
  public $phoneNumber; // string
  public $streetNumber; // string
  public $address; // string
  public $address2; // string
  public $district; // string
  public $zipCode; // string
  public $city; // string
  public $state; // string
  public $country; // string
  public $deliveryCompanyName; // string
  public $shippingSpeed; // deliverySpeed
  public $shippingMethod; // deliveryType
  public $legalName; // string
  public $identityCode; // string
}

class shoppintCartRequest
{
  public $insuranceNumber; // long
  public $shippingAmount; // long
  public $taxAmount; // long
  public $cartItemInfo; // cartItemInfo
}

class cartItemInfo
{
  public $productLabel; // string
  public $productType; // productType
  public $productRef; // string
  public $productQty; // int
  public $productAmount; // string
  public $productVat; // string
}

class paymentResponse
{
  public $transactionId; // string
  public $amount; // long
  public $currency; // int
  public $effectiveAmount; // long
  public $effectiveCurrency; // int
  public $expectedCaptureDate; // dateTime
  public $manualValidation; // int
  public $operationType; // int
  public $creationDate; // dateTime
  public $externalTransactionId; // string
  public $liabilityShift; // string
  public $sequenceNumber; // int
  public $paymentType; // paymentType
  public $paymentError; // int
}

class orderResponse
{
  public $orderId; // string
  public $extInfo; // extInfo
}

class extInfo
{
  public $key; // string
  public $value; // string
}

class cardResponse
{
  public $number; // string
  public $scheme; // string
  public $brand; // string
  public $country; // string
  public $productCode; // string
  public $bankCode; // string
  public $expiryMonth; // int
  public $expiryYear; // int
}

class authorizationResponse
{
  public $mode; // string
  public $amount; // long
  public $currency; // int
  public $date; // dateTime
  public $number; // string
  public $result; // int
}

class captureResponse
{
  public $date; // dateTime
  public $number; // int
  public $reconciliationStatus; // int
  public $refundAmount; // long
  public $refundCurrency; // int
  public $chargeback; // boolean
}

class customerResponse
{
  public $billingDetails; // billingDetailsResponse
  public $shippingDetails; // shippingDetailsResponse
  public $extraDetails; // extraDetailsResponse
}

class billingDetailsResponse
{
  public $reference; // string
  public $title; // string
  public $type; // custStatus
  public $firstName; // string
  public $lastName; // string
  public $phoneNumber; // string
  public $email; // string
  public $streetNumber; // string
  public $address; // string
  public $district; // string
  public $zipCode; // string
  public $city; // string
  public $state; // string
  public $country; // string
  public $language; // string
  public $cellPhoneNumber; // string
  public $legalName; // string
}

class shippingDetailsResponse
{
  public $type; // custStatus
  public $firstName; // string
  public $lastName; // string
  public $phoneNumber; // string
  public $streetNumber; // string
  public $address; // string
  public $address2; // string
  public $district; // string
  public $zipCode; // string
  public $city; // string
  public $state; // string
  public $country; // string
  public $deliveryCompanyName; // string
  public $shippingSpeed; // deliverySpeed
  public $shippingMethod; // deliveryType
  public $legalName; // string
  public $identityCode; // string
}

class extraDetailsResponse
{
  public $ipAddress; // string
}

class markResponse
{
  public $amount; // long
  public $currency; // int
  public $date; // dateTime
  public $number; // string
  public $result; // int
}

class threeDSResponse
{
  public $authenticationRequestData; // authenticationRequestData
  public $authenticationResultData; // authenticationResultData
}

class authenticationRequestData
{
  public $threeDSAcctId; // string
  public $threeDSAcsUrl; // string
  public $threeDSBrand; // string
  public $threeDSEncodedPareq; // string
  public $threeDSEnrolled; // string
  public $threeDSRequestId; // string
}

class authenticationResultData
{
  public $brand; // string
  public $enrolled; // string
  public $status; // string
  public $eci; // string
  public $xid; // string
  public $cavv; // string
  public $cavvAlgorithm; // string
  public $signValid; // string
  public $transactionCondition; // string
}

class extraResponse
{
  public $paymentOptionCode; // string
  public $paymentOptionOccNumber; // int
}

class fraudManagementResponse
{
  public $riskControl; // riskControl
  public $riskAnalysis; // riskAnalysis
  public $riskAssessments; // riskAssessments
}

class shoppingCartResponse
{
  public $cartItemInfo; // cartItemInfo
}

class riskControl
{
  public $name; // string
  public $result; // string
}

class riskAnalysis
{
  public $score; // string
  public $resultCode; // string
  public $status; // vadRiskAnalysisProcessingStatus
  public $requestId; // string
  public $extraInfo; // extInfo
}

class riskAssessments
{
  public $results; // string
}

class cancelToken
{
  public $commonRequest; // commonRequest
  public $queryRequest; // queryRequest
}

class cancelTokenResponse
{
  public $cancelTokenResult; // cancelTokenResult
}

class cancelTokenResult
{
  public $commonResponse; // commonResponse
}

class wsResponse
{
  public $requestId; // string
}

class createToken
{
  public $commonRequest; // commonRequest
  public $cardRequest; // cardRequest
  public $customerRequest; // customerRequest
}

class createTokenResponse
{
  public $createTokenResult; // createTokenResult
}

class createTokenResult
{
  public $commonResponse; // commonResponse
  public $paymentResponse; // paymentResponse
  public $orderResponse; // orderResponse
  public $cardResponse; // cardResponse
  public $authorizationResponse; // authorizationResponse
  public $captureResponse; // captureResponse
  public $customerResponse; // customerResponse
  public $markResponse; // markResponse
  public $threeDSResponse; // threeDSResponse
  public $extraResponse; // extraResponse
  public $subscriptionResponse; // subscriptionResponse
  public $fraudManagementResponse; // fraudManagementResponse
  public $shoppingCartResponse; // shoppingCartResponse
}

class subscriptionResponse
{
  public $subscriptionId; // string
  public $effectDate; // dateTime
  public $cancelDate; // dateTime
  public $initialAmount; // long
  public $rrule; // string
  public $description; // string
  public $initialAmountNumber; // int
  public $pastPaymentNumber; // int
  public $totalPaymentNumber; // int
  public $amount; // long
  public $currency; // int
}

class getTokenDetails
{
  public $queryRequest; // queryRequest
}

class getTokenDetailsResponse
{
  public $getTokenDetailsResult; // getTokenDetailsResult
}

class getTokenDetailsResult
{
  public $commonResponse; // commonResponse
  public $paymentResponse; // paymentResponse
  public $orderResponse; // orderResponse
  public $cardResponse; // cardResponse
  public $authorizationResponse; // authorizationResponse
  public $captureResponse; // captureResponse
  public $customerResponse; // customerResponse
  public $markResponse; // markResponse
  public $subscriptionResponse; // subscriptionResponse
  public $extraResponse; // extraResponse
  public $fraudManagementResponse; // fraudManagementResponse
  public $threeDSResponse; // threeDSResponse
  public $tokenResponse; // tokenResponse
}

class updateSubscription
{
  public $commonRequest; // commonRequest
  public $queryRequest; // queryRequest
  public $subscriptionRequest; // subscriptionRequest
}

class subscriptionRequest
{
  public $subscriptionId; // string
  public $effectDate; // dateTime
  public $amount; // long
  public $currency; // int
  public $initialAmount; // long
  public $initialAmountNumber; // int
  public $rrule; // string
  public $description; // string
}

class updateSubscriptionResponse
{
  public $updateSubscriptionResult; // updateSubscriptionResult
}

class updateSubscriptionResult
{
  public $commonResponse; // commonResponse
  public $paymentResponse; // paymentResponse
  public $orderResponse; // orderResponse
  public $cardResponse; // cardResponse
  public $authorizationResponse; // authorizationResponse
  public $captureResponse; // captureResponse
  public $customerResponse; // customerResponse
  public $markResponse; // markResponse
  public $threeDSResponse; // threeDSResponse
  public $extraResponse; // extraResponse
  public $subscriptionResponse; // subscriptionResponse
  public $fraudManagementResponse; // fraudManagementResponse
}

class capturePayment
{
  public $settlementRequest; // settlementRequest
}

class settlementRequest
{
  public $transactionUuids; // string
  public $commission; // double
  public $date; // dateTime
}

class capturePaymentResponse
{
  public $capturePaymentResult; // capturePaymentResult
}

class capturePaymentResult
{
  public $commonResponse; // commonResponse
}

class transactionItem
{
  public $transactionUuid; // string
  public $transactionStatusLabel; // string
  public $amount; // long
  public $currency; // int
  public $expectedCaptureDate; // dateTime
}

class refundPayment
{
  public $commonRequest; // commonRequest
  public $paymentRequest; // paymentRequest
  public $queryRequest; // queryRequest
}

class refundPaymentResponse
{
  public $refundPaymentResult; // refundPaymentResult
}

class refundPaymentResult
{
  public $commonResponse; // commonResponse
  public $paymentResponse; // paymentResponse
  public $orderResponse; // orderResponse
  public $cardResponse; // cardResponse
  public $authorizationResponse; // authorizationResponse
  public $captureResponse; // captureResponse
  public $customerResponse; // customerResponse
  public $markResponse; // markResponse
  public $threeDSResponse; // threeDSResponse
  public $extraResponse; // extraResponse
  public $fraudManagementResponse; // fraudManagementResponse
}

class verifyThreeDSEnrollment
{
  public $commonRequest; // commonRequest
  public $paymentRequest; // paymentRequest
  public $cardRequest; // cardRequest
  public $techRequest; // techRequest
}

class verifyThreeDSEnrollmentResponse
{
  public $verifyThreeDSEnrollmentResult; // verifyThreeDSEnrollmentResult
}

class verifyThreeDSEnrollmentResult
{
  public $commonResponse; // commonResponse
  public $threeDSResponse; // threeDSResponse
}

class reactivateToken
{
  public $queryRequest; // queryRequest
}

class reactivateTokenResponse
{
  public $reactivateTokenResult; // reactivateTokenResult
}

class reactivateTokenResult
{
  public $commonResponse; // commonResponse
}

class createSubscription
{
  public $commonRequest; // commonRequest
  public $orderRequest; // orderRequest
  public $subscriptionRequest; // subscriptionRequest
  public $cardRequest; // cardRequest
}

class createSubscriptionResponse
{
  public $createSubscriptionResult; // createSubscriptionResult
}

class createSubscriptionResult
{
  public $commonResponse; // commonResponse
  public $paymentResponse; // paymentResponse
  public $orderResponse; // orderResponse
  public $cardResponse; // cardResponse
  public $authorizationResponse; // authorizationResponse
  public $captureResponse; // captureResponse
  public $customerResponse; // customerResponse
  public $markResponse; // markResponse
  public $threeDSResponse; // threeDSResponse
  public $extraResponse; // extraResponse
  public $subscriptionResponse; // subscriptionResponse
  public $fraudManagementResponse; // fraudManagementResponse
  public $shoppingCartResponse; // shoppingCartResponse
}

class cancelSubscription
{
  public $commonRequest; // commonRequest
  public $queryRequest; // queryRequest
}

class cancelSubscriptionResponse
{
  public $cancelSubscriptionResult; // cancelSubscriptionResult
}

class cancelSubscriptionResult
{
  public $commonResponse; // commonResponse
}

class updatePayment
{
  public $commonRequest; // commonRequest
  public $queryRequest; // queryRequest
  public $paymentRequest; // paymentRequest
}

class updatePaymentResponse
{
  public $updatePaymentResult; // updatePaymentResult
}

class updatePaymentResult
{
  public $commonResponse; // commonResponse
  public $paymentResponse; // paymentResponse
  public $orderResponse; // orderResponse
  public $cardResponse; // cardResponse
  public $authorizationResponse; // authorizationResponse
  public $captureResponse; // captureResponse
  public $customerResponse; // customerResponse
  public $markResponse; // markResponse
  public $threeDSResponse; // threeDSResponse
  public $extraResponse; // extraResponse
  public $subscriptionResponse; // subscriptionResponse
  public $fraudManagementResponse; // fraudManagementResponse
}

class validatePayment
{
  public $commonRequest; // commonRequest
  public $queryRequest; // queryRequest
}

class validatePaymentResponse
{
  public $validatePaymentResult; // validatePaymentResult
}

class validatePaymentResult
{
  public $commonResponse; // commonResponse
}

class cancelPayment
{
  public $commonRequest; // commonRequest
  public $queryRequest; // queryRequest
}

class cancelPaymentResponse
{
  public $cancelPaymentResult; // cancelPaymentResult
}

class cancelPaymentResult
{
  public $commonResponse; // commonResponse
}

class checkThreeDSAuthentication
{
  public $commonRequest; // commonRequest
  public $threeDSRequest; // threeDSRequest
}

class checkThreeDSAuthenticationResponse
{
  public $checkThreeDSAuthenticationResult; // checkThreeDSAuthenticationResult
}

class checkThreeDSAuthenticationResult
{
  public $commonResponse; // commonResponse
  public $threeDSResponse; // threeDSResponse
}

class getPaymentDetails
{
  public $queryRequest; // queryRequest
}

class getPaymentDetailsResponse
{
  public $getPaymentDetailsResult; // getPaymentDetailsResult
}

class getPaymentDetailsResult
{
  public $commonResponse; // commonResponse
  public $paymentResponse; // paymentResponse
  public $orderResponse; // orderResponse
  public $cardResponse; // cardResponse
  public $authorizationResponse; // authorizationResponse
  public $captureResponse; // captureResponse
  public $customerResponse; // customerResponse
  public $markResponse; // markResponse
  public $subscriptionResponse; // subscriptionResponse
  public $extraResponse; // extraResponse
  public $fraudManagementResponse; // fraudManagementResponse
  public $threeDSResponse; // threeDSResponse
  public $tokenResponse; // tokenResponse
}

class duplicatePayment
{
  public $commonRequest; // commonRequest
  public $paymentRequest; // paymentRequest
  public $orderRequest; // orderRequest
  public $queryRequest; // queryRequest
}

class duplicatePaymentResponse
{
  public $duplicatePaymentResult; // duplicatePaymentResult
}

class duplicatePaymentResult
{
  public $commonResponse; // commonResponse
  public $paymentResponse; // paymentResponse
  public $orderResponse; // orderResponse
  public $cardResponse; // cardResponse
  public $authorizationResponse; // authorizationResponse
  public $captureResponse; // captureResponse
  public $customerResponse; // customerResponse
  public $markResponse; // markResponse
  public $threeDSResponse; // threeDSResponse
  public $extraResponse; // extraResponse
  public $fraudManagementResponse; // fraudManagementResponse
}

class updateToken
{
  public $commonRequest; // commonRequest
  public $queryRequest; // queryRequest
  public $cardRequest; // cardRequest
  public $customerRequest; // customerRequest
}

class updateTokenResponse
{
  public $updateTokenResult; // updateTokenResult
}

class updateTokenResult
{
  public $commonResponse; // commonResponse
  public $paymentResponse; // paymentResponse
  public $orderResponse; // orderResponse
  public $cardResponse; // cardResponse
  public $authorizationResponse; // authorizationResponse
  public $captureResponse; // captureResponse
  public $customerResponse; // customerResponse
  public $markResponse; // markResponse
  public $threeDSResponse; // threeDSResponse
  public $extraResponse; // extraResponse
  public $subscriptionResponse; // subscriptionResponse
  public $fraudManagementResponse; // fraudManagementResponse
}

class getPaymentUuid
{
  public $legacyTransactionKeyRequest; // legacyTransactionKeyRequest
}

class legacyTransactionKeyRequest
{
  public $transactionId; // string
  public $sequenceNumber; // int
  public $creationDate; // dateTime
}

class getPaymentUuidResponse
{
  public $legacyTransactionKeyResult; // legacyTransactionKeyResult
}

class legacyTransactionKeyResult
{
  public $commonResponse; // commonResponse
  public $paymentResponse; // paymentResponse
}

class getSubscriptionDetails
{
  public $queryRequest; // queryRequest
}

class getSubscriptionDetailsResponse
{
  public $getSubscriptionDetailsResult; // getSubscriptionDetailsResult
}

class getSubscriptionDetailsResult
{
  public $commonResponse; // commonResponse
  public $paymentResponse; // paymentResponse
  public $orderResponse; // orderResponse
  public $cardResponse; // cardResponse
  public $authorizationResponse; // authorizationResponse
  public $captureResponse; // captureResponse
  public $customerResponse; // customerResponse
  public $markResponse; // markResponse
  public $subscriptionResponse; // subscriptionResponse
  public $extraResponse; // extraResponse
  public $fraudManagementResponse; // fraudManagementResponse
  public $threeDSResponse; // threeDSResponse
  public $tokenResponse; // tokenResponse
}

class paymentType
{
  const SINGLE = 'SINGLE';
  const INSTALLMENT = 'INSTALLMENT';
  const SPLIT = 'SPLIT';
  const SUBSCRIPTION = 'SUBSCRIPTION';
  const RETRY = 'RETRY';
}

class custStatus
{
  const _PRIVATE = 'PRIVATE';
  const COMPANY = 'COMPANY';
}

class deliverySpeed
{
  const STANDARD = 'STANDARD';
  const EXPRESS = 'EXPRESS';
}

class deliveryType
{
  const RECLAIM_IN_SHOP = 'RECLAIM_IN_SHOP';
  const RELAY_POINT = 'RELAY_POINT';
  const RECLAIM_IN_STATION = 'RECLAIM_IN_STATION';
  const PACKAGE_DELIVERY_COMPANY = 'PACKAGE_DELIVERY_COMPANY';
  const ETICKET = 'ETICKET';
}

class vadRiskAnalysisProcessingStatus
{
  const P_TO_SEND = 'P_TO_SEND';
  const P_SEND_KO = 'P_SEND_KO';
  const P_PENDING_AT_ANALYZER = 'P_PENDING_AT_ANALYZER';
  const P_SEND_OK = 'P_SEND_OK';
  const P_MANUAL = 'P_MANUAL';
  const P_SKIPPED = 'P_SKIPPED';
  const P_SEND_EXPIRED = 'P_SEND_EXPIRED';
}

class threeDSMode
{
  const DISABLED = 'DISABLED';
  const ENABLED_CREATE = 'ENABLED_CREATE';
  const ENABLED_FINALIZE = 'ENABLED_FINALIZE';
  const MERCHANT_3DS = 'MERCHANT_3DS';
}

class productType
{
  const FOOD_AND_GROCERY = 'FOOD_AND_GROCERY';
  const AUTOMOTIVE = 'AUTOMOTIVE';
  const ENTERTAINMENT = 'ENTERTAINMENT';
  const HOME_AND_GARDEN = 'HOME_AND_GARDEN';
  const HOME_APPLIANCE = 'HOME_APPLIANCE';
  const AUCTION_AND_GROUP_BUYING = 'AUCTION_AND_GROUP_BUYING';
  const FLOWERS_AND_GIFTS = 'FLOWERS_AND_GIFTS';
  const COMPUTER_AND_SOFTWARE = 'COMPUTER_AND_SOFTWARE';
  const HEALTH_AND_BEAUTY = 'HEALTH_AND_BEAUTY';
  const SERVICE_FOR_INDIVIDUAL = 'SERVICE_FOR_INDIVIDUAL';
  const SERVICE_FOR_BUSINESS = 'SERVICE_FOR_BUSINESS';
  const SPORTS = 'SPORTS';
  const CLOTHING_AND_ACCESSORIES = 'CLOTHING_AND_ACCESSORIES';
  const TRAVEL = 'TRAVEL';
  const HOME_AUDIO_PHOTO_VIDEO = 'HOME_AUDIO_PHOTO_VIDEO';
  const TELEPHONY = 'TELEPHONY';
}
