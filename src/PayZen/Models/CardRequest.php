<?php

namespace PayZen\Models;

class CardRequest
{
    public $number; // string
    public $scheme; // string
    public $expiryMonth; // int
    public $expiryYear; // int
    public $cardSecurityCode; // string
    public $cardHolderBirthDay; // dateTime
    public $paymentToken; // string
    public $cardHolderName;
}
