<?php
    include_once "../../control/accion/accionListarAutos.php";
    include "../estructura/cabecera/incio.php";
    $rep = mensajeListado();
    echo $rep;
    include "../estructura/pie/footer.php";
?>