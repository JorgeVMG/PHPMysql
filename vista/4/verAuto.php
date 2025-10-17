<?php
    include_once('../../configuracion/configuracion.php');
    include "../estructura/cabecera/incio.php";
    $rep = mensajeListado();
    echo $rep;
    include "../estructura/pie/footer.php";
?>