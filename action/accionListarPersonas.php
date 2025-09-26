<?php
include_once __DIR__ . '/../control/controlAuto.php';
include_once __DIR__ . '/../control/controlPersona.php';

function mostrarPersonas(){
    $p = new controlPersona();
    $list = $p->listarPersonas();
    $a = 0;
    $mensaje = "";
    $urlAutos = "";
    if($list != null){
        foreach ($list as $pers){
            $a++;
            $lisAut = $p->listadoAutosPersona($pers["NroDni"]);
            if(count($lisAut) != 0 ){
                $urlAutos = "<p class='mb-2'><strong>Autos:</strong></p><a href='autosPersona.php?dni=".$pers["NroDni"]."' class='btn btn-primary'>Autos</a>";
            }else{
                $urlAutos = "<p class='mb-2'><strong>Autos:<span class='text-dark'>No posee autos</span></p>";
            }
            $mensaje .= "<div class='card-header text-success'>
                            <h1 class='h4 mb-0'>Persona $a</h1>
                        </div>
                        <div class='card-body text-success'>
                            <p class='mb-2'><strong>Nombre Y apellido</strong> <span class='text-dark'>".$pers["Apellido"]." ".$pers["Nombre"]."</span></p>
                            <p class='mb-2'><strong>Telefono</strong> <span class='text-dark'>".$pers["Telefono"]."</span></p> 
                            <p class='mb-2'><strong>Domicilio</strong> <span class='text-dark'>".$pers["Domicilio"]."</span> ".$urlAutos."</p>  
                            
                        </div>"; 
        }
    }else{
        $mensaje = "<div class='card-header text-success'>
                            <h1 class='h4 mb-0'>No hay personas Cargadas</h1>
                        </div>";
    }
    return $mensaje;
}
function mostrarAutosPers(){
    $dni = $_GET['dni'] ?? null;
    $p = new controlPersona();
    $list = $p->listadoAutosPersona($dni);
    $mensaje = "";
    $a = 0;
    foreach ($list as $aut){
        $a++;
        $mensaje .= "<div class='card-header text-success'>
                        <h1 class='h4 mb-0'>Auto $a</h1>
                    </div>
                    <div class='card-body text-success'>
                        <p class='mb-2'><strong>Pantente:</strong> <span class='text-dark'>".$aut['Patente']."</span></p>
                        <p class='mb-2'><strong>Marca:</strong> <span class='text-dark'>".$aut['Marca']."</span></p>
                        <p class='mb-2'><strong>Modelo:</strong> <span class='text-dark'>".$aut['Modelo']."</span></p> 
                    </div>";
    }
    $mensaje .= "<input type='button' value='Regresar' onclick='history.back()'>";
    return $mensaje;
}