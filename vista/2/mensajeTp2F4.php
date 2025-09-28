<?php
    session_start();
    $mensaje = $_SESSION['mensaje'] ?? "<h3>No hay mensaje para mostrar</h3>";
    include "../estructura/cabecera/incio.php";
        echo $mensaje ;
    include "../estructura/pie/footer.php";
?>