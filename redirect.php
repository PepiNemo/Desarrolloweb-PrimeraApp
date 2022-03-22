<?php
session_start();
require 'vendor/autoload.php';
$client= new MongoDB\Client("mongodb://localhost");

$collection=$client->StolenShop->Usuarios;

$usuarios=$collection->find([]);


foreach($usuarios as $entry){
    if($entry['name']==$_POST['usuario']){
        echo "121";
        if($entry['password']==$_POST['pass']){
            echo 222;
            $_SESSION['usuario']=$_POST['usuario'];
            header("Location: /index.php");
        }else{
            ?>
            <script>
            alert('Usuario y contraseÃ±a no coinciden');
            window.location.href='login.php';
            </script>
            <?php
            
        }
    }
}

?>
            <script>
            alert('Usuario No registrado');
            window.location.href='index.php';
            </script>