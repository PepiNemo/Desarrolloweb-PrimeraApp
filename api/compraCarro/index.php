<?php
session_start();
require '../../vendor/autoload.php';
$client = new MongoDB\Client("mongodb://localhost");

$collection = $client->StolenShop->OrdCompra;



if (!empty($_POST['ids'])) {
    $insertOneResult = $collection->insertOne([
        'idProductos' => $_POST['ids'],
        'cantidades' => $_POST['cantidades'],
        'Total' => $_POST['Total'],
    ]);

    if ($insertOneResult) {
        session_unset();
        session_destroy();
        header("Access-Control-Allow-Origin: *");
        echo json_encode(true);
    } else {
        header("Access-Control-Allow-Origin: *");
        echo json_encode(false);
    }

} else {
    header("Access-Control-Allow-Origin: *");
    echo json_encode(false);
}
