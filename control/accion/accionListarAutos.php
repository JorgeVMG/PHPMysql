<?php 
include "../controlTablas/controlAuto.php";
include "../controlTablas/controlPersona.php";
function mensajeListado(){
    $control = new controlAuto(); 
    $list = $control->listarAutos();
    $mensaje = "<div class='row justify-content-center'>
                <div class='col-8' >
                <div class='card border-success shadow' style='background-color: rgba(144, 229, 144, 1)'>";
    $a = 0;
    if($list != null){
        $p = new controlPersona();
        foreach ($list as $aut){
            $a++;
            $duenio = $p->buscarPersona($aut["DniDuenio"]);
            $mensaje .= "<div class='card-header text-success'>
                            <h1 class='h4 mb-0'>Auto $a:</h1>
                        </div>
                        <div class='card-body text-success'>
                            <p class='mb-2'><strong>Pantente:</strong> <span class='text-dark'>".$aut['Patente']."</span></p>
                            <p class='mb-2'><strong>Marca:</strong> <span class='text-dark'>".$aut['Marca']."</span></p>
                            <p class='mb-2'><strong>Modelo:</strong> <span class='text-dark'>".$aut['Modelo']."</span></p>
                            <p class='mb-2'><strong>Dueño:</strong> <span class='text-dark'>".$duenio["Apellido"]." ".$duenio["Nombre"]."</span></p>
                        </div>" ;
        }  
    }else{
        $mensaje .= "<div class='card-header text-success'>
                            <h1 class='h4 mb-0'>No hay autos registrados</h1>
                        </div>";
    }
    $mensaje .= "</div>
            </div>
    </div>";
    return $mensaje;
}