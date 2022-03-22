<?php

require '../../vendor/autoload.php';

$uri = "mongodb://localhost";
$client = new MongoDB\Client($uri);

$prod = $_GET['prod'];

$producto = $client->StolenShop->productos->findOne(['_id' => new MongoDB\BSON\ObjectID($prod)]);

$nombre = $producto['name'];
$desc = $producto['desc'];
$img = $producto['ima'];
$precio = $producto['precio'];

$arr = ["nombre" => $nombre, "id" => $prod, "desc" => $desc, "img" => $img, "valor" => $precio];
header("Access-Control-Allow-Origin: *");
echo json_encode($arr);


?>
