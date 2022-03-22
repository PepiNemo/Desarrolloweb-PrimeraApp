<?php
        //print_r($_POST);
        require '../vendor/autoload.php';
        $client= new MongoDB\Client("mongodb://localhost");

        $collection=$client->StolenShop->contact;

        $mensajes=$collection->find([]);

        foreach($mensajes as $entry){
            ?>
            <p><b>Nombre: </b> <?php echo $entry['name'] ?> </p>
            <p><b>Correo: </b> <?php echo $entry['email'] ?> </p>
            <p><b>Comentario: </b> <?php echo $entry['comment'] ?> </p>
            <hr>
            <?php

        }




?>