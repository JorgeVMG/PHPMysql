<?php
    $mensaje = $_SESSION['mensaje'] ?? "<h3>No hay mensaje para mostrar</h3>";
        echo "<div class='presentacion'>
        <div class='respuesta'>
            <h2>Resultado 3</h2> 
            $mensaje </h3>
            <input type='button' value='Regresar' onclick='history.back()'>
        </div>
    </div>";
?>
    