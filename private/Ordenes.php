<?php
        session_start();
        if(isset($_SESSION['usuario'])){
            if((strcmp ( $_SESSION['usuario'] , "Vendedor" ))==0){
                require '../vendor/autoload.php';
                $client= new MongoDB\Client("mongodb://localhost");
                $collection=$client->StolenShop->OrdCompra;
        
                $Ordenes=$collection->find([]);
        
                foreach($Ordenes as $entry){
                    ?>
                    <p><b>Productos:</b>
                    <?php 
                    foreach($entry['idProductos'] as $id){
                        echo $id." ; "; 
                 
                    } ?>
                    </p>
                    
                    <p><b>Cantidades :</b>
                    <?php 
                    foreach($entry['cantidades'] as $cant){
                        echo $cant." ; "; 
                 
                    }?>
                    </p>
        
                    <p><b>Total : </b> <?php echo $entry['Total']; ?> </p>
                    <hr>
                    <?php
        
                }
    
            }else{
                ?>
                <script>
                alert('Solo puede acceder el vendedor');
                window.location.href='../login.php';
                </script>
                <?php
            }

        }
        else{
            ?>
            <script>
            alert('Solo puede acceder el vendedor');
            window.location.href='../login.php';
            </script>
            <?php
        }



?>