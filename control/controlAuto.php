<?php
include_once __DIR__ . "/../modelo/tablaAuto.php";
include_once __DIR__ . "/controlPersona.php";
class controlAuto{
    public function buscarAuto($patente){
        $list = $this->listarAutos();
        $autoElegido= null;
        foreach ($list as $aut){
            if($aut["Patente"] == $patente){
                $autoElegido = $aut;
            }
        }
        return $autoElegido;
    }
    public function listarAutos(){
        $a = new tablaAuto("", "", "", "");
        $list = $a->selecionarAuto();
        return $list;
    }
    public function InsertarAutoNuevo($patente,$marca,$modelo,$dniDuenio){
        $autoElegido = $this->buscarAuto($patente);
        $rep = false;
        if($autoElegido==null){
            $a = new tablaAuto($patente, $marca, $modelo, $dniDuenio);
            if($a->insertarAuto()){
                $rep = true;
            }
        }
        return $rep;
    }
}