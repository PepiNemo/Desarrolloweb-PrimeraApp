<?php

session_start();

if($_POST['cant'] <=0){
    header("Access-Control-Allow-Origin: *");
    echo json_encode(false);
}else{
    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito']=array();
    
    }
    $KeyProducto=$_POST['idprod'];
    if(isset($_SESSION['carrito'][$KeyProducto])){
        $_SESSION['carrito'][$KeyProducto]+=$_POST['cant'];
        header("Access-Control-Allow-Origin: *");
        echo json_encode(true);
    
    
    }else{
        $_SESSION['carrito'][$_POST['idprod']]=$_POST['cant'];
        header("Access-Control-Allow-Origin: *");
        echo json_encode(true);
    }


}

?>