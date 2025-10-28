<?php
    $mensaje = $_SESSION['mensaje'] ?? "<h3>No hay mensaje para mostrar</h3>";
    unset($_SESSION['mensaje']);
    echo "<div class='presentacion'>
        <div class='respuesta'>
            <h2>Resultado</h2> 
            $mensaje </h3>
            <input type='button' value='Regresar' onclick='history.back()'>
        </div>
    </div>";
?>
    