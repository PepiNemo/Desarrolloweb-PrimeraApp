<?php 

require '../../vendor/autoload.php';

$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);


$collection=$client->StolenShop->categorias->find();
$categorias= Array();

foreach($collection as $entry){
        $categorias [ $entry['_id']->__toString()]=$entry['name'];
        }


header("Access-Control-Allow-Origin: *");
echo json_encode($categorias);

?>
