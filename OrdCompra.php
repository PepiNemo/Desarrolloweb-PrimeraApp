<?php
    session_start();
    require 'vendor/autoload.php';
    $client= new MongoDB\Client("mongodb://localhost");

    $collection=$client->StolenShop->OrdCompra;
      
    $insertOneResult=$collection->insertOne([
            'idProductos'=>$_POST['ids'],
            'cantidades'=>$_POST['cantidades'],
            'Total'=>$_POST['Total'],
    ]);
        
    if($insertOneResult){
        session_unset();

            // destroy the session
        session_destroy();

        ?>
        <script>
            alert('Se realizo la orden de compra');
            window.location.href='index.php';
            $_POST['OrdAprobada']=1;
        </script>

    <?php
    }else{
        ?>
        <script>
            alert('No se realizo la orden de compra');
            window.location.href='index.php';
        </script>
        <?php

    }


?>
