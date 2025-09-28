<?php
include_once "modelo/conexion/baseDatos.php";
include_once "modelo/tablaPersona.php";
include_once "modelo/tablaAuto.php";
include_once "control/controlPersona.php";

session_start(); // siempre al inicio
unset($_SESSION['autoPendiente']); // borra solo esa variable
// o session_destroy(); // borra TODA la sesión
