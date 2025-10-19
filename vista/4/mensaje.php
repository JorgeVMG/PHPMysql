<?php
$mensaje = $_SESSION['mensaje'] ?? "<div class='card-header text-success'><h1 class='h4 mb-0'>No hay mensaje para mostrar</h1> </div><div class='card-body text-success'><input type='button' value='volver' class='btn btn-success' onclick='history.back()'> </div>";
unset($_SESSION['mensaje']);
?>
<div class='container mt-4'>
    <div class='row col-6 '>
        <?php
            echo $mensaje;
        ?>
    </div>
</div>