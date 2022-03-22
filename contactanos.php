<?php
include_once("header.php");
?>

<div class="cuerpo">
    <div class="formulario">
        <center>

        <h3>Contactanos para algo</h3>

        <form action="gracias.php", method="post">

            <label for="name">Nombre : </label><br>
            <input type="text" id="name" name="name" value=""><br><br>

            <label for="email">Correo : </label><br>
            <input type="email" id="email" name="email" value=""><br><br>

            <label for="comment">Comentario : </label><br>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
            <br>
            <input id= "enviar" type="submit" value="Enviar">
            
        </form> 
        </center>
    </div>
</div>


<?php
include_once("footer.php");
?>