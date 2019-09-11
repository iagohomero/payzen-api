<?php

namespace PayZen\Resource;

use DateTime;
use DateTimeZone;
use PayZen\Models\CommonRequest;
use PayZen\Models\ThreeDSRequest;
use PayZen\Models\PaymentRequest;
use PayZen\Models\OrderRequest;
use PayZen\Models\CardRequest;
use PayZen\Models\CustomerRequest;
use PayZen\Models\BillingDetailsRequest;
use PayZen\Models\ExtraDetailsRequest;
use PayZen\Models\TechRequest;
use PayZen\Models\CreatePayment;
use PayZen\Models\CreatePaymentResponse;
use PayZen\Models\QueryRequest;
use PayZen\Models\FindPayments;
use PayZen\Models\CancelPayment;
use Exception;

class Payment
{
    private $payzen;

    public function __construct($payzen){
        $this->payzen = $payzen;
    }

    public function createPayment($amount, $holderEmail, $cardHolderName, $cardNumber, $cardScheme, $cardExpiryMonth, $cardExpiryYear, $cardSecurityCode, $currency = '986'){
        $this->payzen->genHeaders();

        //Geração do body
        $commonRequest = new CommonRequest;
        $commonRequest->paymentSource = 'EC';
        $commonRequest->submissionDate = new DateTime('now', new DateTimeZone('UTC'));

        $paymentRequest = new PaymentRequest;
        $paymentRequest->amount = $amount;
        $paymentRequest->currency = $currency;
        $paymentRequest->manualValidation = '0';

        $orderRequest = new orderRequest;
        $orderRequest->orderId = $this->payzen->getClient()->__default_headers[1]->data;

        $cardRequest = new CardRequest;
        $cardRequest->number = $cardNumber;
        $cardRequest->scheme = $cardScheme;
        $cardRequest->expiryMonth = $cardExpiryMonth;
        $cardRequest->expiryYear = $cardExpiryYear;
        $cardRequest->cardSecurityCode = $cardSecurityCode;
        $cardRequest->cardHolderName = $cardHolderName;

        $customerRequest = new CustomerRequest;
        $customerRequest->billingDetails = new BillingDetailsRequest;
        $customerRequest->billingDetails->email = $holderEmail;

        //	Chamada da operação createPayment	
        try {
            $createPaymentRequest = new CreatePayment;
            $createPaymentRequest->commonRequest = $commonRequest;
            $createPaymentRequest->paymentRequest = $paymentRequest;
            $createPaymentRequest->orderRequest = $orderRequest;
            $createPaymentRequest->cardRequest = $cardRequest;
            $createPaymentRequest->customerRequest = $customerRequest;
            $createPaymentRequest->commonRequest->submissionDate = $createPaymentRequest->commonRequest->submissionDate->format(dateTime::W3C);
            $createPaymentResponse = new CreatePaymentResponse();
            $createPaymentResponse = $this->payzen->getClient()->createPayment($createPaymentRequest);
            return $createPaymentResponse;
        } catch (SoapFault $fault) {
            throw new SoapFault($fault);	
        }
    }

    public function findPayment($orderId = null){
        $this->payzen->genHeaders();

        //Geração do body
        $queryRequest = new queryRequest;
        $queryRequest->orderId = $orderId;

        try {
            $findPaymentsRequest = new FindPayments;
            $findPaymentsRequest->queryRequest = $queryRequest;
            $findPaymentsResponse = $this->payzen->getClient()->findPayments($findPaymentsRequest);
            return $findPaymentsResponse;
        } catch (SoapFault $fault) {
            throw new SoapFault($fault);	
        }
    }

    public function cancelPayment($uuid){
        $this->payzen->genHeaders();

        //Geração do body
        $queryRequest = new QueryRequest;
        $queryRequest->uuid = $uuid;

        //	 Chamada da operação cancelPayment		
        try {
            $cancelPaymentRequest = new CancelPayment;
            // $cancelPaymentRequest->commonRequest = $commonRequest;
            $cancelPaymentRequest->queryRequest = $queryRequest;
            $cancelPaymentResponse = $this->payzen->getClient()->cancelPayment($cancelPaymentRequest);
            return $cancelPaymentResponse;
        } catch (SoapFault $fault) {
            throw new SoapFault($fault);	
        }
    }
}
