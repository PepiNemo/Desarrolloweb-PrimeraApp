<?php

include_once ("header.php");
require 'vendor/autoload.php';

$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$cat=$_GET['key'];
$collection=$client->StolenShop->productos->find(['categoria'=>$cat]);
$prods= array();

foreach($collection as $entry){

        $prods [ $entry['_id']->__toString()]=$entry['name'];
        }
?>



<div class=cuerpo>
        <h3>Productos</h3>
        <ul>
                <?php
                foreach($prods as $key => $value){
                        echo "<li><a href='prod.php?key=$key'>$value</a></li>";
                        }
                ?>
        </ul>

</div>




<?php
include_once("footer.php");
?>
