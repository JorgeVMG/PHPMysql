<?php
include_once('configuracion/configuracion.php');

$page = $_GET['page'] ?? 'presentacion';
switch ($page) {

    // --- TP1 ---
    case "TP1Ej1":
        $url = 'vista/1/formulario1.php';
        break;
    case "TP1Ej2":
        $url = 'vista/1/formulario2.php';
        break;
    case "TP1Ej3get":
        $url = 'vista/1/formulario3Get.php';
        break;
    case "TP1Ej3post":
        $url = 'vista/1/formulario3Post.php';
        break;
    case "TP1Ej4":
        $url = 'vista/1/formulario4.php';
        break;
    case "TP1Ej5":
        $url = 'vista/1/formulario5.php';
        break;
    case "TP1Ej6":
        $url = 'vista/1/formulario6.php';
        break;
    case "TP1Ej7":
        $url = 'vista/1/formulario7.php';
        break;
    case "TP1Ej8":
        $url = 'vista/1/formulario8.php';
        break;

    // --- TP2 ---
    case "TP2Ej1":
        $url = 'vista/2/formulario1.php';
        break;
    case "TP2Ej3":
        $url = 'vista/2/formulario3.php';
        break;
    case "TP2Ej4":
        $url = 'vista/2/formulario4.php';
        break;

    // --- TP3 ---
    case "TP3Ej1":
        $url = 'vista/3/formulario1.php';
        break;
    case "TP3Ej2":
        $url = 'vista/3/formulario2.php';
        break;
    case "TP3Ej3":
        $url = 'vista/3/formulario3.php';
        break;

    // --- TP4 ---
    case "TP4Ej1":
        include_once($_SESSION['ROOT'] . 'control/4/accionListarAutos.php');
        $url = 'vista/4/verAuto.php';
        break;
    case "TP4Ej2":
        $url = 'vista/4/buscarAuto.php';
        break;
    case "TP4Ej3":
        include_once($_SESSION['ROOT'] . 'control/4/accionListarPersonas.php');
        $url = 'vista/4/listarPersonas.php';
        break;
    case "autosPersona":
        include_once($_SESSION['ROOT'] . 'control/4/accionListarPersonas.php');
        $url = 'vista/4/autosPersona.php';
        break;
    case "TP4Ej4":
        $url = 'vista/4/nuevaPersona.php';
        break;
    case "TP4Ej5":
        $url = 'vista/4/NuevoAuto.php';
        break;
    case "TP4Ej6":
        $url = 'vista/4/CambioDuenio.php';
        break;
    case "TP4Ej7":
        $url = 'vista/4/BuscarPersona.html';
        break;
    case "mensaje4":
        $url = 'vista/4/mensaje.php';
        break;
    // --- Páginas principales ---
    case 'presentacion':
        $url = 'vista/home/presentacion.php';
        break;
    case 'home':
        $url = 'vista/home/home.php';
        break;
    case "action":
        $url = 'control/action/action.php';
        break;
    default:
        $url = 'vista/home/home.php';
        break;
}
    session_start();
    include_once 'vista/estructura/cabecera/incio.php'; 

    if ($url != 'vista/home/home.php' && $url != 'vista/home/presentacion.php' && $url != 'control/action/action.php') {
        include 'vista/estructura/cabecera/barraNavegacion.php';
    }
    require $url;
    include_once 'vista/estructura/pie/footer.php';
