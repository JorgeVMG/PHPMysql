<?php
    session_start();
    $mensaje = $_SESSION['mensaje'] ?? "<h3>No hay mensaje para mostrar</h3>";
    include "../estructura/cabecera/incio.php";
        echo "<div class='presentacion'>
        <div class='respuesta'>
            <h2>Resultado</h2> 
            $mensaje </h3>
            <input type='button' value='Regresar' onclick='history.back()'>
        </div>
    </div>";
    include "../estructura/pie/footer.php";
?>
    