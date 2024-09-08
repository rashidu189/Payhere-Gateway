<?php

$amount = 20000;
$merchant_id = "1228082";
$order_id = "12345SE";
$merchant_secret = "MzMxNTExNTIyMDIzODYxMzQ5OTM5MjQyNDk0NjEyODY2OTU5MDMx";
$currency = "LKR";

$hash = strtoupper(
    md5(
        $merchant_id . 
        $order_id . 
        number_format($amount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret)) 
    ) 
);

$array = [];

$array['merchant_id'] = $merchant_id;
$array['order_id'] = $order_id;
$array['currency'] = $currency;
$array['amount'] = $amount;
$array['hash'] = $hash;

$jsonObj = json_encode($array);

echo $jsonObj



?>
