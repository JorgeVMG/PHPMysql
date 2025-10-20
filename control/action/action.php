<?php
$method = $_SERVER['REQUEST_METHOD'];
$data   = $method === 'POST' ? $_POST : $_GET;

$tp = $data['tp'] ?? null;          
$ej = $data['ejercicio'] ?? null;   
switch ($tp) {
    case 'TP1':
        require_once '../1/controlFormularioTp1.php';
        $controller = new controlFormulario();
        $func = "formulario".$ej;       
        $respuesta = $controller->$func($data);
        session_start();
        $_SESSION['mensaje'] = $respuesta;

        header("Location: ../../vista/1/mensaje.php");
        exit;

    case 'TP2':
        require_once '../2/controlFormularioTp2.php';
        $controller = new controlFormulario();
        $func = "formulario".$ej;
        $respuesta = $controller->$func($data);
        $_SESSION['mensaje'] = $respuesta;
        if($ej == "4"){
            header("Location: ../../vista/2/mensajeTp2F4.php");
        }else{
            header("Location: ../../vista/2/mensajeTp2.php");
        }
        
        exit;

    case 'TP3':
        require_once '../3/controlFormularioTp3.php';
        $controller = new controlFormulario();
        $func = "formulario".$ej;       
        $respuesta = $controller->$func($data);
        $_SESSION['mensaje'] = $respuesta;
        if($ej == "3"){
            header("Location: ../../vista/3/mensajeTp3F3.php");
        }else{
            header("Location: ../../vista/3/mensaje.php");
        }
        
        exit;
    case 'TP4':
        switch ($ej) {
            case '2':
                include_once(ROOT_PATH  . 'control/4/accionBuscarAuto.php');
                $respuesta = mostrarAutoElegido();
                $_SESSION['mensaje'] = $respuesta;
                header("Location:  index.php?page=mensaje4");
                exit();
            case '4':
                include_once(ROOT_PATH.'control/4/accionNuevaPersona.php');
                $respuesta = agregarPersona();
                $_SESSION['mensaje'] = $respuesta;
                if($_SESSION["autoPendiente"]){
                    include_once(ROOT_PATH.'control/4/accionNuevoAuto.php');
                    $respuesta = agregarAuto();
                    $_SESSION['mensaje'] = $respuesta;
                    header("Location: index.php?page=mensaje4");
                }
                header("Location:  index.php?page=mensaje4");
                exit;
            case '5':
                include_once(ROOT_PATH.'control/4/accionNuevoAuto.php');
                $respuesta = agregarAuto();
                $_SESSION['mensaje'] = $respuesta;
                header("Location:  index.php?page=mensaje4");
                exit;
            case '6':
                include_once(ROOT_PATH.'control/4/accionCambioDuenio.php');
                $respuesta = cambioDuenio();
                $_SESSION['mensaje'] = $respuesta;
                header("Location:  index.php?page=mensaje4");
                exit;
            case '7':
                include_once(ROOT_PATH.'control/4/accionBuscarPersona.php');
                $respuesta = buscarPersonaModificar();
                $_SESSION['mensaje'] = $respuesta;
                header("Location:  index.php?page=mensaje4");
                exit;
            case '7.A':
                include_once(ROOT_PATH.'control/4/ActualizarDatosPersona.php');
                $respuesta = ActualizarDatosPersona();
                $_SESSION['mensaje'] = $respuesta;
                header("Location:  index.php?page=mensaje4");
        }
        exit;
}