<?php

include('Product.php');
include ('arrays.php');

// HTTP-header med innehållstypen JSON (Content-Type).
header("Content-Type: application/json; charset=UTF-8");

$limit = isset($_GET["limit"]) ? $_GET["limit"] : 10;

if ($limit > count($name) || $limit < 1 || !is_numeric($limit)){
    $products = new \stdClass();
    $error = " 400: Antal produkter att visa måste anges i heltal mellan 1 och " . count($name) ."!";
    $products->Error = $error;
   
}
else {
    $products = array();
   
for ($i=0; $i < $limit; $i++) {
    $product = new Product($name[$i], $img[$i], $description[$i], $price[$i]);
    array_push($products, $product->toArray());
}
}

echo $json = json_encode($products, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
