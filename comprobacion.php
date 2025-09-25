<?php
include_once "modelo/conexion/baseDatos.php";
include_once "modelo/tablaPersona.php";
include_once "modelo/tablaAuto.php";

$pate = "AJM 132";
$marca = "for miercoles";
$modelo = 30;
$dniDuen = "30875962";
$aut = new tablaAuto("", "", "", "");
$resp = $aut->eliminarAuto($pate);
if($resp == true){
    echo "se elimino correctamente";
}else{
    echo "algo salio mal";
}