<?php
include_once("header.php");
?>

<div class=cuerpo>
    <center>
    <form action="redirect.php" method="POST">
        Ingrese su Usuario :
        <input type="text" name="usuario"/>
        PassWord:
        <input type="password" name="pass"/>
        <input type="submit" value="Ingresar"/>
    </form>
    </center>


</div>

<?php
include_once("footer.php");
?>