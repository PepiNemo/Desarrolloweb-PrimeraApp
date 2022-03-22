<?php

require '../../vendor/autoload.php';

$uri = "mongodb://localhost";
$client = new MongoDB\Client($uri);


session_start();

$ret = array();


foreach ($_SESSION['carrito'] as $prod => $cantidad) {
    $ret2 = array();
    $producto = $client->StolenShop->productos->findOne(['_id' => new MongoDB\BSON\ObjectID($prod)]);
    array_push($ret2, $prod, $producto['name'], $cantidad, $producto['precio']);
    array_push($ret, $ret2);
}

header("Access-Control-Allow-Origin: *");
echo json_encode($ret);




?>
