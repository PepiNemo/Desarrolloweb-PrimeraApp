<?php
include_once ("header.php");
?>



<div class=cuerpo>



    <?php
        //print_r($_POST);
        require 'vendor/autoload.php';
        $client= new MongoDB\Client("mongodb://localhost");

        $collection=$client->StolenShop->contact;

        $insertOneResult=$collection->insertOne([
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'comment'=>$_POST['comment'],

        ]);
        
        //print_r($insertOneResult);

    ?>


    <p>Gracias por contactarnos, Te contactaremos lo mas pronto posible.</p>


</div>



<?php
include_once("footer.php");
?>
