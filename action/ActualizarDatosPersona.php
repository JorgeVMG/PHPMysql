<?php

include_once __DIR__ . '/../control/controlAuto.php';
include_once __DIR__ . '/../control/controlPersona.php';

function ActualizarDatosPersona(){
    $method = $_SERVER['REQUEST_METHOD'];
    $data   = $method === 'POST' ? $_POST : $_GET;
    $dni = $data["dniEcont"];
    $mensaje = "";
    $p = new controlPersona();
    $personaEncot = $p->buscarPersona($dni);
    if($personaEncot != null){
        $modi = $p->modificarPer($dni,$data["apellido"],$data["nombre"],$data["fechaNacimiento"],$data["telefono"],$data["domicilio"]);
        
        if($modi){
            $mensaje = "<div class='card-header text-success'>
            <h1 class='h4 mb-0'>La persona fue modificada Correctamente</h1>
            <h1 class='h4 mb-0'>Nuevos Datos</h1>
                </div>
                <div class='card-body text-success'>
                            <p class='mb-2'><strong>DNI:</strong> <span class='text-dark'>".$dni."</span></p> 
                            <p class='mb-2'><strong>Nombre Y apellido:</strong> <span class='text-dark'>".$data["apellido"]." ".$data["nombre"]."</span></p>
                            <p class='mb-2'><strong>Fecha Nacimiento:</strong> <span class='text-dark'>".$data["fechaNacimiento"]."</span></p>
                            <p class='mb-2'><strong>Telefono:</strong> <span class='text-dark'>".$data["telefono"]."</span></p> 
                            <p class='mb-2'><strong>Domicilio:</strong> <span class='text-dark'>".$data["domicilio"]."</span></p>  
                            
                    </div>";
        }else{
            $mensaje = "<div class='card-header text-success'>
            <h1 class='h4 mb-0'>La persona no pudo modificarse</h1>
        </div>";
        }
    }else{
        $mensaje = "<div class='card-header text-success'>
            <h1 class='h4 mb-0'>La persona Ingresa no esta ingresada</h1>
        </div>";
    }
    return $mensaje;
}

include_once  __DIR__ ."/../vista/estructura/cabecera/incio.php";
?>
<div class="container mt-4 ">
    <div class="row col-6 ">
        <?php 
            $men = ActualizarDatosPersona();
            echo $men;
        ?>
    </div>
</div>
<?php
include_once  __DIR__ ."/../vista/estructura/pie/footer.php";