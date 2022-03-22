<?php

session_start();
require '../../vendor/autoload.php';
$client = new MongoDB\Client("mongodb://localhost");
$collection = $client->StolenShop->OrdCompra;

$Ordenes = $collection->find([]);
$ret = array();
foreach ($Ordenes as $entry) {
    $ret2 = array();
    array_push($ret2, $entry);
    array_push($ret, $ret2);
}
header("Access-Control-Allow-Origin: *");
echo json_encode($ret);


?>