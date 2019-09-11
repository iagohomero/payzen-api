<?php

namespace PayZen\Models;

class PaymentRequest
{
    public $transactionId; // string
    public $amount; // long
    public $currency; // int
    public $expectedCaptureDate; // dateTime
    public $manualValidation; // int
    public $paymentOptionCode; // string
    public $retryUuid; // string
}
