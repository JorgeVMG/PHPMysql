<?php 
include_once __DIR__ . "/../modelo/tablaPersona.php";
include_once __DIR__ . "/controlAuto.php";
class controlPersona{

    public function buscarPersona($dni){
        $lista = $this->listarPersonas();
        $personaElegida = null; 
        if($lista != null){
            foreach ($lista as $pers){
                if($pers["NroDni"] == $dni){
                    $personaElegida = $pers;
                }
            }
        }  
        
        return $personaElegida;
    }
    public function listarPersonas(){
        $p = new tablaPersona("","","","","","");
        $lista = $p->selecionarPersonas();
        return $lista;
    }
    public function listadoAutosPersona($dni){
        $a = new controlAuto();
        $list = $a->listarAutos();
        $autosPersona = [];
        if($list != null){
            foreach ($list as $aut){
                if($aut["DniDuenio"] == $dni){
                    $cant = count($autosPersona);
                    $autosPersona[$cant] = $aut;
                }
            }
        }
        return $autosPersona;
    }
}