<?php

session_start();

if($_POST['cantidad'] <0){
    die("Maldito Hacker");
}


if(!isset($_SESSION['carrito'])){
    $_SESSION['carrito']=Array();

}
$KeyProducto=$_POST['producto'];
if(isset($_SESSION['carrito'][$KeyProducto])){
    $_SESSION['carrito'][$KeyProducto]+=$_POST['cantidad'];


}else{
    $_SESSION['carrito'][$_POST['producto']]=$_POST['cantidad'];
}



header("Location: /prod.php?key=$KeyProducto");



?>



