<?php

include_once __DIR__ . '/../control/controlAuto.php';
include_once __DIR__ . '/../control/controlPersona.php';
function buscarPersonaModificar(){
    $method = $_SERVER['REQUEST_METHOD'];
    $data   = $method === 'POST' ? $_POST : $_GET;
    $dni = $data["dniEcont"];
    $p = new controlPersona();
    $personaEncot = $p->buscarPersona($dni);
    if($personaEncot != null){
        $mensaje = "<div class='container mt-5'>
    <div class='row justify-content-center'>
        <div class='col-lg-6 col-md-8 col-sm-10'>
            <div class='card shadow-sm'>
                <div class='card-body'>
                    <h1 class='h4 text-center mb-4'>Persona Encontrada</h1>
                    <h1 class='h4 text-center mb-4'>Modificacion de Datos</h1>
                    <form class='needs-validation' novalidate action='ActualizarDatosPersona.php' method='post'>
                        <div class='row mb-3'>
                            <input type='hidden' name='dniEcont' value='$dni'>
                            <div class='col-md-6 mb-3'>

                                <label for='nombre' class='form-label'>Nuevo Nombre</label>
                                <input type='text' class='form-control' name='nombre' id='nombre' placeholder='".$personaEncot["Nombre"]."' required>
                                <div class='valid-feedback'>¡Correcto!</div>
                                <div class='invalid-feedback'>Ingrese el nombre.</div>
                            </div>
                            <div class='col-md-6 mb-3'>
                                <label for='apellido' class='form-label'>Nuevo Apellido</label>
                                <input type='text' class='form-control' name='apellido' id='apellido' placeholder='".$personaEncot["Apellido"]."' required>
                                <div class='valid-feedback'>¡Correcto!</div>
                                <div class='invalid-feedback'>Ingrese el apellido.</div>
                            </div>
                        </div>

                        <div class='row mb-3'>
                            <div class='col-md-6 mb-3'>
                                <label for='DNI' class='form-label'>DNI</label>
                                <input type='text' class='form-control' name='DNI' id='DNI' value='$dni' disabled>
                                <div class='valid-feedback'>¡Correcto!</div>
                                <div class='invalid-feedback'>Ingrese el DNI.</div>
                            </div>
                            <div class='col-md-6 mb-3'>
                                <label for='fechaNacimiento' class='form-label'>Fecha de Nacimiento</label>
                                <input type='date' class='form-control' name='fechaNacimiento' id='fechaNacimiento'  required>
                                <div class='valid-feedback'>¡Correcto!</div>
                                <div class='invalid-feedback'>Ingrese la fecha de nacimiento.</div>
                            </div>
                        </div>

                        <div class='row mb-3'>
                            <div class='col-md-6 mb-3'>
                                <label for='telefono' class='form-label'>Teléfono</label>
                                <input type='text' class='form-control' name='telefono' id='telefono' placeholder='".$personaEncot["Telefono"]."' required>
                                <div class='valid-feedback'>¡Correcto!</div>
                                <div class='invalid-feedback'>Ingrese el teléfono.</div>
                            </div>
                            <div class='col-md-6 mb-3'>
                                <label for='domicilio' class='form-label'>Domicilio</label>
                                <input type='text' class='form-control' name='domicilio' id='domicilio' placeholder='".$personaEncot["Domicilio"]."' required>
                                <div class='valid-feedback'>¡Correcto!</div>
                                <div class='invalid-feedback'>Ingrese el domicilio.</div>
                            </div>
                        </div>

                        <button type='submit' class='btn btn-primary w-100 mt-3'>Guardar Modificaciones</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>";
    }else{
         $mensaje = "<div class='card-header text-warning'>
            <h1 class='h4 mb-0'>La persona Ingresa no esta ingresada</h1>
        </div>
        <div class='card-body'>
            <a href='../vista/4/nuevaPersona.php' class='btn btn-primary'>Cargar persona</a>
        </div>";
    }
    return $mensaje;
}

include_once  __DIR__ ."/../vista/estructura/cabecera/incio.php";
?>
<?php 
    $men = buscarPersonaModificar();
    echo $men;
?>
    
<?php
include_once  __DIR__ ."/../vista/estructura/pie/footer.php";