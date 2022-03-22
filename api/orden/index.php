<?php

$idOrden=$_POST['KeyOrd'];
require '../../vendor/autoload.php';
$client= new MongoDB\Client("mongodb://localhost");

$Orden=$client->StolenShop->OrdCompra->findOne(['_id'=>new MongoDB\BSON\ObjectID($idOrden)]);

$ret=array();
array_push($ret, $idOrden, $Orden['idProductos'], $Orden['cantidades'], $Orden['Total']);

header("Access-Control-Allow-Origin: *");
echo json_encode($ret);

?>

     

