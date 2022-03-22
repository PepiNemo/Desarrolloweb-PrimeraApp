<?php
include_once ("header.php");
require 'vendor/autoload.php';

$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);


$collection=$client->StolenShop->categorias->find();
$categorias= Array();

foreach($collection as $entry){
        $categorias [ $entry['_id']->__toString()]=$entry['name'];
        }

if(isset($_POST['OrdAprobada'])){
        print($_POST['OrdAprobada']);
}
?>






<div class=cuerpo>
        <div class="alert alert-primary" role="alert">
                <h3>Categorias</h3>
                <ul class="list-group">
                        <?php
                        foreach($categorias as $key =>$cat){
                                ?>
                                <li class="list-group-item"><a href="cat.php?key=<?php echo $key ?>"><?php echo $cat?></a></li>
                                <?php
                                }
                                ?>
                </ul>
        </div>
</div>


        







<?php
include_once("footer.php");
?>
