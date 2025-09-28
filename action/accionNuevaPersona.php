<?php
include_once __DIR__ . '/../control/controlPersona.php';
function agregarPersona(){
    $method = $_SERVER['REQUEST_METHOD'];
    $data   = $method === 'POST' ? $_POST : $_GET;
    //NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio
    $nombre = $data["nombre"];
    $apellido = $data["apellido"];
    $dni = $data["DNI"];
    $fechaNacimiento = $data["fechaNacimiento"];
    $telefono = $data["telefono"];
    $domicilio = $data["domicilio"];
    $p = new controlPersona();
    $resp = $p->buscarPersona($dni);
    $mensaje= "";
    if($resp == null){
        $personaNueva = new tablaPersona($dni,$apellido,$nombre,$fechaNacimiento,$telefono,$domicilio);
        $personaNueva->insertarPersona();
        $mensaje = "<div class='card-header text-success'>
                            <h1 class='h4 mb-0'>Persona Nueva Ingresada</h1>
                        </div>
                        <div class='card-body text-success'>
                            <p class='mb-2'><strong>DNI:</strong> <span class='text-dark'>".$dni."</span></p> 
                            <p class='mb-2'><strong>Nombre Y apellido:</strong> <span class='text-dark'>".$apellido." ".$nombre."</span></p>
                            <p class='mb-2'><strong>Fecha Nacimiento:</strong> <span class='text-dark'>".$fechaNacimiento."</span></p>
                            <p class='mb-2'><strong>Telefono:</strong> <span class='text-dark'>".$telefono."</span></p> 
                            <p class='mb-2'><strong>Domicilio:</strong> <span class='text-dark'>".$domicilio."</span></p>  
                            
                        </div>";
    }else{
        $mensaje = "<div class='card-header text-success'>
                            <h1 class='h4 mb-0'>La persona Ingresada ya existe</h1>
                        </div>";
    }
    return $mensaje;
}
include_once  __DIR__ ."/../vista/estructura/cabecera/incio.php";
?>
<div class="container mt-4 ">
    <div class="row col-6 ">
        <?php 
            session_start();
            $men = agregarPersona();
            if (isset($_SESSION['autoPendiente'])) {
                header("Location: accionNuevoAuto.php");
                exit;
            }else{    
                $men = agregarPersona();
                echo $men;
            }

        ?>
    </div>
</div>
<?php
include_once  __DIR__ ."/../vista/estructura/pie/footer.php";