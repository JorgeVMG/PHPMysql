<?php
include_once __DIR__ . '/../control/controlAuto.php';
include_once __DIR__ . '/../control/controlPersona.php';
function cambioDuenio(){
    $method = $_SERVER['REQUEST_METHOD'];
    $data   = $method === 'POST' ? $_POST : $_GET;
    $patente = $data["patente"];
    $duenioNuevo = $data["dniDuenioNuevo"];
    $p = new controlPersona();
    $a = new controlAuto();
    $autoEncont = $a->buscarAuto($patente);
    $personaEncont = $p->buscarPersona($duenioNuevo);
    $mensaje = "";
    if($autoEncont != null && $personaEncont !=null){
        $aut = new tablaAuto($autoEncont["Patente"],$autoEncont["Marca"],$autoEncont["Modelo"],$personaEncont["NroDni"]);
        $aut = $aut->modificarAuto();
        $mensaje = "<div class='card-header text-success'>
                            <h1 class='h4 mb-0'>Se hizo el correctamente el cambio de duenio</h1>
                        </div>
                        <div class='card-body text-success'>
                            <p class='mb-2'><strong>Pantente:</strong> <span class='text-dark'>".$autoEncont["Patente"]."</span></p>
                            <p class='mb-2'><strong>Marca:</strong> <span class='text-dark'>".$autoEncont["Marca"]."</span></p>
                            <p class='mb-2'><strong>Modelo:</strong> <span class='text-dark'>".$autoEncont["Modelo"]."</span></p>
                            <p class='mb-2'><strong>Dueño nuevo:</strong> <span class='text-dark'>".$personaEncont["Apellido"]." ".$personaEncont["Nombre"]."</span></p>
                        </div>";
    }else{
        $mensaje = "<div class='card-header text-warning'>
                    <h1 class='h4 mb-0'>El auto y/o el nuevo duenio no se han encontrado</h1>
                    <h3 class='h5 mb-0'>¿Desea volver a cargarlo?</h3>
                </div>
                <div class='card-body'>
                    <a href='../vista/4/CambioDuenio.php' class='btn btn-primary'>Cargar De nuevo</a>
                </div>";
    }
    return $mensaje;
}

include_once  __DIR__ ."/../vista/estructura/cabecera/incio.php";
?>
<div class="container mt-4 ">
    <div class="row col-6 ">
        <?php 
            $men = cambioDuenio();
            echo $men;
        ?>
    </div>
</div>
<?php
include_once  __DIR__ ."/../vista/estructura/pie/footer.php";