<?php
    session_start();
    $mensaje = $_SESSION['mensaje'] ?? "<h3>No hay mensaje para mostrar</h3>";
    include "../estructura/cabecera/incio.php";
    ?>
    <div class='container mt-4'>
        <div class='row col-6 '>
            <?php 
                echo $mensaje;
            ?>
        </div>
    </div>
<?php
    include "../estructura/pie/footer.php";
?>