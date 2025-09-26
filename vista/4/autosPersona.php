<?php 
include "../estructura/cabecera/incio.php";
include "../../action/accionListarPersonas.php";

?>
    <div class="container col-6">
        <div class="row mt-4">
            <?php 
                $resp = mostrarAutosPers();
                echo $resp;
            ?>
        </div>
    </div>
<?php include "../estructura/pie/footer.php";?>