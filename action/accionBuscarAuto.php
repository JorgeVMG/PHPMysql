<?php
include_once __DIR__ . '/../control/controlAuto.php';
include_once __DIR__ . '/../control/controlPersona.php';

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
            if($data["ingresoPatente"]==$aut["Patente"]){
                $autoElegido = $aut;
            }
        }
        if($autoElegido != null){
            $duenio = $p->buscarPersona($autoElegido["DniDuenio"]);
            $mesansaje = "<div class='card-body text-success'>
                        <p class='mb-2'><strong>Pantente:</strong> <span class='text-dark'>".$autoElegido['Patente']."</span></p>
                        <p class='mb-2'><strong>Marca:</strong> <span class='text-dark'>".$autoElegido['Marca']."</span></p>
                        <p class='mb-2'><strong>Modelo:</strong> <span class='text-dark'>".$autoElegido['Modelo']."</span></p>
                        <p class='mb-2'><strong>Dueño:</strong> <span class='text-dark'>".$duenio["Apellido"]." ".$duenio["Nombre"]."</span></p>
                    </div>";
        }else{
            $mesansaje = "<div class='card-body text-success'>
                            <p class='mb-2'>No se encontro el auto requerido</p>
                        </div>";
        }
    }
    return $mesansaje;
}
include_once  __DIR__ ."/../vista/estructura/cabecera/incio.php";
?>
<div class="container mt-4 ">
    <div class="row col-6 ">
        <?php 
            $men = mostrarAutoElegido();
            echo $men;
        ?>
    </div>
</div>
<?php
include_once  __DIR__ ."/../vista/estructura/pie/footer.php";