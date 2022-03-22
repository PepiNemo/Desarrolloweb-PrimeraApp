<?php

session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
</head>



<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

	<a class="navbar-brand" href="index.php">StolenShop</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>


	<div class="collapse navbar-collapse" id="navbarSupportedContent">

		<ul class="navbar-nav mr-auto">

			<li class="nav-item active">
					<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
			</li>

			<li class="nav-item active">
					<a class="nav-link" href="informaciones.php">Informaciones <span class="sr-only">(current)</span></a>
			</li>

			<li class="nav-item active">
					<a class="nav-link" href="contactanos.php">Contactanos  <span class="sr-only">(current)</span></a>
			</li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item active navbar-right">
					<a class="nav-link" href="carrito.php">Carrito <span class="sr-only">(current)</span></a>
			</li>

		</ul>

	</div>

</nav>


<section class="jumbotron text-center">
	<div class="container">
		<?php
		if(isset($_SESSION['usuario'])){
			echo "<h1>Bienvenido ".$_SESSION['usuario']." </h1>";		
		}else{
			echo "<h1>Bienvenidos a StolenShop</h1>";
			echo "<a class=head href='login.php'> Ingresar</a>";
		}
		?>	
		<p>La mejor tienda del mejor pais de Chile.</p>
    </div>
</section>

