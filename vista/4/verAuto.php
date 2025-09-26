<?php
    include_once "../../action/accionListarAutos.php";
    include "../estructura/cabecera/incio.php";
    $rep = mensajeListado();
    echo $rep;
    include "../estructura/pie/footer.php";
?>