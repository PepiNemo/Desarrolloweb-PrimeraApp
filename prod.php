<?php
include_once ("header.php");
require 'vendor/autoload.php';

$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$prod=$_GET['key'];

$producto=$client->StolenShop->productos->findOne(['_id'=>new MongoDB\BSON\ObjectID($prod)]);

$nombre=$producto['name'];
$desc=$producto['desc'];
$img=$producto['ima'];
$precio=$producto['precio'];
//print_r($categorias);
?>




<div class=cuerpo>
	<h3><?php echo $nombre;echo " ( $ "; echo $precio; echo " ) "?></h3>
	
	<img src=<?php echo $img; ?> width=500px>	
	<br>
	<br>
	<b><i><?php echo $desc;?></i></b>
	<br>
	<br>

	<form action="agregar.php" method="POST">
		Cantidad:
		<input type="hidden" name="producto" value="<?php echo $prod; ?>"/>
		<input type="number" name="cantidad" value="1"/>
		<input type="submit" value="Agregar al Carrito"/>

	</form>


</div>




<?php
include_once("footer.php");
?>
