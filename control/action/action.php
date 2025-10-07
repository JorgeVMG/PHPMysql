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
        session_start();
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
        session_start();
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
                require_once '../4/accionBuscarAuto.php';
                $respuesta = mostrarAutoElegido();
                session_start();
                $_SESSION['mensaje'] = $respuesta;
                header("Location: ../../vista/4/mensaje.php");
                exit;
            case '4':
                require_once '../4/accionNuevaPersona.php';
                $respuesta =agregarPersona();
                session_start();
                $_SESSION['mensaje'] = $respuesta;
                header("Location: ../../vista/4/mensaje.php");
                exit;
            case '5':
                require_once "../4/accionNuevoAuto.php";
                $respuesta = agregarAuto();
                session_start();
                $_SESSION['mensaje'] = $respuesta;
                header("Location: ../../vista/4/mensaje.php");
                exit;
            case '6':
                header("Location: ../4/accionCambioDuenio.php");
                exit;
            case '7':
                header("Location: ../4/accionBuscarPersona..php");
                exit;
        }
        exit;
}