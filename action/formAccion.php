<?php
$method = $_SERVER['REQUEST_METHOD'];
$data   = $method === 'POST' ? $_POST : $_GET;

$eje = $data['ejercicio'] ?? null;       
switch($eje){
    case "1":
        require_once "../control/accion/accionBuscarAuto.php";
        $mensaje = mensajeListado();
        session_start();
        $_SESSION['mensaje'] = $mensaje;
        header("Location: ../vista/4/verAutos.php");
        exit;
}