<?php 
include_once __DIR__ . "/../../modelo/tablaPersona.php";
class controlPersona{

    public function buscarPersona($dni){
        $p = new tablaPersona("","","","","","");
        $lista = $p->selecionarPersonas();
        $personaElegida = null;   
        foreach ($lista as $pers){
            if($pers["NroDni"] == $dni){
                $personaElegida = $pers;
            }
        }
        return $personaElegida;
    }
    public function listar(){
        $p = new tablaPersona();
        $lista = $p->selecionarPersonas();
        return $lista;
    }
}