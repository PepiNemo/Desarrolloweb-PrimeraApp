<?php
include_once ("header.php");
require 'vendor/autoload.php';

$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

?>


<table class="table">
<tr>
<th>Producto</th>
<th>Cantidad</th>
<th>Precio</th>
<th>Total</th>
</tr>

<?php

if(isset($_POST['Ncantidad'])){
    $_SESSION['carrito'][$_POST['producto']]=$_POST['Ncantidad'];

}

$total=0;
foreach($_SESSION['carrito'] as $prod =>$cantidad){
    echo "<tr>";
    $producto=$client->StolenShop->productos->findOne(['_id'=>new MongoDB\BSON\ObjectID($prod)]);


?>
    <td><?php echo $producto['name']; ?> </td>
    <td>
        <?php echo $cantidad; ?> 
        <form action="carrito.php" method="POST">
            <input type="number" name="Ncantidad" value="Nueva Cantidad"/>
            <input type="hidden" name="producto" value="<?php echo $prod;?>"/>
            <input type="submit" value="Actualizar cantidad"/>
        </form>

        
    </td>
    <td><?php echo $producto['precio']; ?> </td>
    <td><?php echo $producto['precio']*$cantidad; ?> </td>

<?php
$total+=$producto['precio']*$cantidad;
echo "</tr>";
}
?>
</table>
<center>
    <b>Total a pagar: $<?php echo $total; ?>
        <form action="OrdCompra.php" method="POST">
            <?php foreach($_SESSION['carrito'] as $prod =>$cantidad){
                $producto=$client->StolenShop->productos->findOne(['_id'=>new MongoDB\BSON\ObjectID($prod)]);?>
                <input type="hidden" name="ids[]" value="<?php echo $producto['name']; ?>"/>
                <input type="hidden" name="cantidades[]" value="<?php echo $cantidad; ?>"/>
            <?php } ?>

		    <input type="hidden" name="Total" value="<?php echo $total; ?>"/>
		    <input type="submit" value="Pagar"/>

	    </form> 
    </b>
</center>

<?php
include_once("footer.php");
?>
