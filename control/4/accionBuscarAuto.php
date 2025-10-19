<?php
function mostrarAutoElegido (){
    $method = $_SERVER['REQUEST_METHOD'];
    $data   = $method === 'POST' ? $_POST : $_GET;
    $control = new controlAuto(); 
    $p = new controlPersona();
    $list = $control->listarAutos();
    $autoElegido = null;
    $mesansaje = "";
    $duenio = null;

    if($list != null){
        foreach ($list as $aut){
            if($data["patente"]==$aut["Patente"]){
                $autoElegido = $aut;
            }
        }
        if($autoElegido != null){
            $duenio = $p->buscarPersona($autoElegido["DniDuenio"]);
            $mesansaje = "<div class='card-header text-success'>
                            <h1 class='h4 mb-0'>Auto Encontrado:</h1>
                        </div>
                    <div class='card-body text-success'>
                        <p class='mb-2'><strong>Pantente:</strong> <span class='text-dark'>".$autoElegido['Patente']."</span></p>
                        <p class='mb-2'><strong>Marca:</strong> <span class='text-dark'>".$autoElegido['Marca']."</span></p>
                        <p class='mb-2'><strong>Modelo:</strong> <span class='text-dark'>".$autoElegido['Modelo']."</span></p>
                        <p class='mb-2'><strong>Dueño:</strong> <span class='text-dark'>".$duenio["Apellido"]." ".$duenio["Nombre"]."</span></p>
                        <input type='button' value='volver' class='btn btn-success' onclick='history.back()'>
                    </div>";
        }else{
            $mesansaje = "<div class='card-body text-success'>
                            <p class='mb-2'>No se encontro el auto requerido</p>
                            <input type='button' value='volver' class='btn btn-success' onclick='history.back()'>
                        </div>";
        }
    }
    return $mesansaje;
}