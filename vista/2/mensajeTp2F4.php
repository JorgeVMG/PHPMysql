<?php
    $mensaje = $_SESSION['mensaje'] ?? "<h3>No hay mensaje para mostrar</h3>";
    unset($_SESSION['mensaje']);
    echo $mensaje ;
?>