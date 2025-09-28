<?php 
class controlFormulario{
    function formulario1($data){
        $repuesta = "";
        $civil = "";
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $usuario = $data['usuario'];
        $ciudad = $data['ciudad'];
        $estado = $data['estado'];
        switch($estado){
            case "soltero":
                $civil = "soltero";
                break;
            case "casado":
                $civil = "casado";
                break;
            case "viudo":
                $civil = "viudo";
                break;
        }
        $codigoPostal = $data['codigoPostal'];
        $repuesta = "<h3> Hola, yo soy $nombre $apellido, mi usuario es $usuario, vivo en la ciudad de $ciudad, mi estado civil es $civil y mi codigo postal es $codigoPostal";
        return $repuesta;
    }
    function formulario3($data){
        $repuesta = "";
        $usuarios = [["usuario" => "juan","contrasena" => "A2345678"],
                    ["usuario" => "maria","contrasena" => "abc12345"],
                    ["usuario" => "pedro","contrasena" => "qwerty46"],
                    ["usuario" => "ana","contrasena" => "pass2025"],
                    ["usuario" => "sofia","contrasena" => "admin999"]];
        
        $usuarioIngresado = $data["usuario"];
        $contrasenaIngresada = $data["contrasena"];
        $accesoConcedido = 0;
        $i = 0; 
        $total = count($usuarios);
        do {
            if ($usuarios[$i]["usuario"] === $usuarioIngresado && $usuarios[$i]["contrasena"] === $contrasenaIngresada) {
                $accesoConcedido = 1;
            }
            $i++;
        } while ($i < $total);
        if($accesoConcedido==1){
            $repuesta = "<h3>Bienvenido, $usuarioIngresado";
        } else {
            $repuesta = "<h3>Usuario o contrasena incorrectos.";
        }
        return $repuesta;
    }
    function formulario4($data){
        $repuesta = "";
        $titulo = $data["titulo"];
        $actores = $data["actores"];
        $director = $data["director"];
        $guion = $data["guion"];
        $produccion = $data["produccion"];
        $anio = $data["ano"];
        $nacionalidad = $data["nacionalidad"];
        $genero = $data["genero"];
        $duracion = $data["duracion"];
        $restriccion = $data["restrincionDeEdad"];
        $restriccionText = "";
        if($restriccion == "TP"){
            $restriccionText = "Todo Publico";
        }elseif($restriccion == "M+13"){
            $restriccionText = "Mayores de 13 años";
        }else{
            $restriccionText = "Mayores de 18 años";
        }
        $sinopsis = $data["sinopsis"];
        $sinopsisText = "";
        if($sinopsis != ""){
            $sinopsisText = "<p class='mb-0'><strong>Sinopsis:</strong> <span class='text-dark'>$sinopsis</span></p>";
        }
        $repuesta = "<div class='row justify-content-center'>
            <div class='col-8' >
            <div class='card border-success shadow' style='background-color: rgba(144, 229, 144, 1)'>
                <div class='card-header text-success'>
                <h1 class='h4 mb-0'>La película introducida es:</h1>
                </div>
                <div class='card-body text-success'>
                    <p class='mb-2'><strong>Título:</strong> <span class='text-dark'>$titulo</span></p>
                    <p class='mb-2'><strong>Actores:</strong> <span class='text-dark'>$Actores</span></p>
                    <p class='mb-2'><strong>Director:</strong> <span class='text-dark'>$director</span></p>
                    <p class='mb-2'><strong>Guion:</strong> <span class='text-dark'>$guion</span></p>
                    <p class='mb-2'><strong>Producción:</strong> <span class='text-dark'>$produccion</span></p>
                    <p class='mb-2'><strong>Año:</strong> <span class='text-dark'>$anio</span></p>
                    <p class='mb-2'><strong>Nacionalidad:</strong> <span class='text-dark'>$nacionalidad</span></p>
                    <p class='mb-2'><strong>Género:</strong> <span class='text-dark'>$genero</span></p>
                    <p class='mb-2'><strong>Duración:</strong> <span class='text-dark'>$duracion min</span></p>
                    <p class='mb-2'><strong>Restricción de edad:</strong> <span class='text-dark'>$restriccionText</span></p>
                    $sinopsisText
                </div>
            </div>
            </div>
        </div>";
        return $repuesta;
    }
}
?>
