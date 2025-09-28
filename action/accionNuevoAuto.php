<?php
include_once __DIR__ . '/../control/controlAuto.php';
include_once __DIR__ . '/../control/controlPersona.php';
session_start();
function agregarAuto() {
    if(isset($_SESSION["autoPendiente"])){
        $data = $_SESSION["autoPendiente"];
        unset($_SESSION['autoPendiente']);
    }else{
        $method = $_SERVER['REQUEST_METHOD'];
        $data   = $method === 'POST' ? $_POST : $_GET;
    }
    $p = new controlPersona();
    $a = new controlAuto();
    $mensaje = "todo mal";
    $personaEle = $p->buscarPersona($data["dniDuenio"]);
    if($personaEle != null){
        $autoElegido = $a->InsertarAutoNuevo($data["patente"],$data["marca"],$data["modelo"],$data["dniDuenio"]);
        if($autoElegido){
            $mensaje = "<div class='card-header text-success'>
                            <h1 class='h4 mb-0'>Auto Ingresado correctamente</h1>
                        </div>
                        <div class='card-body text-success'>
                            <p class='mb-2'><strong>Pantente:</strong> <span class='text-dark'>".$data['patente']."</span></p>
                            <p class='mb-2'><strong>Marca:</strong> <span class='text-dark'>".$data['marca']."</span></p>
                            <p class='mb-2'><strong>Modelo:</strong> <span class='text-dark'>".$data['modelo']."</span></p>
                            <p class='mb-2'><strong>Dueño:</strong> <span class='text-dark'>".$personaEle["Apellido"]." ".$personaEle["Nombre"]."</span></p>
                        </div>" ;
        }else{
            $mensaje = "<div class='card-header text-warning'>
                    <h1 class='h4 mb-0'>El auto no fue ingresado porque ya existe en la base de datos</h1>
                    <h3 class='h5 mb-0'>Desea volver a cargarlo?</h3>
                </div>
                <div class='card-body'>
                    <a href='../vista/4/NuevoAuto.php' class='btn btn-primary'>Cargar auto</a>
                </div>";
        }
        
    }else{
        $_SESSION["autoPendiente"] = $data;
        $mensaje = "<div class='card-header text-warning'>
            <h1 class='h4 mb-0'>El auto no fue ingresado porque su dueño no existe en la base de datos</h1>
            <h3 class='h5 mb-0'>Desea cargar una nueva persona</h3>
        </div>
        <div class='card-body'>
            <a href='../vista/4/nuevaPersona.php' class='btn btn-primary'>Cargar persona</a>
        </div>";
    }
    return $mensaje;
}

include_once  __DIR__ ."/../vista/estructura/cabecera/incio.php";
?>
<div class="container mt-4 ">
    <div class="row col-6 ">
        <?php 
            $men = agregarAuto();
            echo $men;
        ?>
    </div>
</div>
<?php
include_once  __DIR__ ."/../vista/estructura/pie/footer.php";
