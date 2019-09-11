<?php 
// phpinfo();
require '../vendor/autoload.php';

use PayZen\PayZen;

$payzen = new Payzen("shopId", "key");
try{
    $payment = $payzen->payment()->createPayment("2990", "test.payzen@gmail.com", "", "4970100000000000", "VISA", "12", "2023", "123");
    var_dump($payment);
}catch(Exception $fault){
    var_dump($fault);
}
// $payzen->payment()->findPayment("");
// $payzen->payment()->cancelPayment("");

?>