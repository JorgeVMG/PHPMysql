<?php 
include "../estructura/cabecera/incio.php";
include "../../control/4/accionListarPersonas.php";

?>
    <div class="container col-6">
        <div class="row mt-4">
            <?php 
                $rep = mostrarPersonas();
                echo $rep;
            ?>
        </div>
    </div>
<?php include "../estructura/pie/footer.php";?>