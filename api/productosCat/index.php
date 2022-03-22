<?php


require '../../vendor/autoload.php';

$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$cat=$_GET['cat'];
$collection=$client->StolenShop->productos->find(['categoria'=>$cat]);
$prods= array();

foreach($collection as $entry){

        $prods [ $entry['_id']->__toString()]=$entry['name'];
        }
header("Access-Control-Allow-Origin: *");
echo json_encode($prods);


?>