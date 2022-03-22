<?php

session_start();


$valor=$_POST['idprod'];
if(isset($_SESSION['carrito'][$valor])){
    unset($_SESSION['carrito'][$valor]);
    header("Access-Control-Allow-Origin: *");
    echo json_encode(true);
}else{
    header("Access-Control-Allow-Origin: *");
    echo json_encode(false);
}
?>