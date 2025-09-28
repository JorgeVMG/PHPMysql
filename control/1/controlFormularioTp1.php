<?php
class controlFormulario{
    function formulario1($data){
        $respuesta = "";
      
        $numeroFormulario = $data['numero-form'];
        if ($numeroFormulario > 0) {
            $respuesta ="<h3>El número $numeroFormulario es positivo";
        } elseif ($numeroFormulario < 0) {
            $respuesta = "<h3>El número $numeroFormulario es negativo";
        } else {
            $respuesta = "<h3>El número $numeroFormulario no es positivo ni negativo";
        }
        
        return $respuesta;
    }
    function formulario2($data){
        $respuesta = "no hay respuesta";
        $horasDinamica = [];
        $horasLunes = $data['horario_lunes'];
        $horasMartes = $data['horario_martes'];
        $horasMiercoles = $data['horario_miercoles'];
        $horasJueves = $data['horario_jueves'];
        $horasViernes = $data['horario_viernes'];
        $horasDinamica = [$horasLunes,$horasMartes,$horasMiercoles,$horasJueves,$horasViernes];
        $totalHoras = 0;
        foreach ($horasDinamica as $horaDinamica) {
            $totalHoras = ($totalHoras+$horaDinamica);
        }
        $respuesta = "<h3>La cantidad de horas por semana es: $totalHoras horas";
    
        return $respuesta;
    }
    function formulario3Get($data){
        $respuesta = "";
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $edad = $data['edad'];
        $direccion = $data['direccion'];
        $respuesta = "<h3>Hola, yo soy $nombre $apellido tengo $edad años y vivo en $direccion";
    
        return $respuesta;
    }
    function formulario3Post($data){
        $respuesta = "";
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $edad = $data['edad'];
        $direccion = $data['direccion'];
        $respuesta = "<h3>Hola, yo soy $nombre $apellido tengo $edad años y vivo en $direccion";
    
        return $respuesta;
    }
    function formulario4($data){
        $respuesta = "";
        $nombre = $data["nombre"];
        $apellido = $data["apellido"];
        $edad = $data["edad"];
        $direccion = $data["direccion"];
        $respuesta = "<h3> Hola, yo soy $nombre $apellido";
        if($edad >= 18) {
            $respuesta .= ", tengo $edad años, soy mayor de edad <br>y vivo en $direccion.";
        } else {
            $respuesta .= ", tengo $edad años, soy menor de edad <br>y vivo en $direccion.";
        }
        return $respuesta;
    }
    function formulario5($data){
        $respuesta = "";
        $formAnterior = $this->formulario4($data);
        $respuesta .= $formAnterior; 
        $sexo = $data["sexo"];
        
        $estudios = $data["estudios"];
        if($estudios == "1") {  
            $respuesta .= " No tengo estudios ";
        } elseif($estudios == "2") {
            $respuesta .= " Tengo estudios primarios ";
        } else {
            $respuesta .= " Tengo estudios secundarios ";
        }
        if($sexo == "masculino") {
            $respuesta .= "y mi sexo es masculino";
        } elseif($sexo == "femenino") {
            $respuesta .= "y mi sexo es femenino";
        } else {
            $respuesta .= "y mi sexo es otro";
        }
        return $respuesta;
    }
    function formulario6($data){
        $respuesta = "";
        $formAnterior = $this->formulario5($data);
        $respuesta .= $formAnterior;
        if (!empty($data["deporte"])) {
            $deportes = $data["deporte"];
            $cantDeportes = count($deportes);
            if($cantDeportes == 1) {
                $respuesta .= ". Practico $cantDeportes deporte";
            } else {
                $respuesta .= ". Practico $cantDeportes deportes";
            }
        }else{
            $respuesta .= ". No practico deportes";
        }
        return $respuesta;
    }
    function formulario7($data){
        $respuesta = "";
        $resultado = 0;
        $num1 = (float)$data['num1'];
        $num2 = (float)$data['num2'];
        $operacion = $data['operacion'];
        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                $respuesta = "<h3>El resultado de la suma es: " . $resultado;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                $respuesta = "<h3>El resultado de la resta es: " . $resultado;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                $respuesta = "<h3>El resultado de la multiplicacion es: " . $resultado;
                break;
            case 'division':
                if($num2 != 0){
                    $resultado = $num1 / $num2;
                    $respuesta = "<h3>El resultado de la division es: " . $resultado;
                } else {
                    $respuesta = "<h3>No se puede dividir por cero.";
                }
                break;
            default:
                $respuesta = "<h3>Operacion no valida.";
                break;
        }
        return $respuesta;
    }
    function formulario8($data){
        $respuesta = "";
        $edad = $data['edad'];
        $estudiante = $data['estudiante'];
        if($estudiante == 'si' || $edad < 12){
            if($edad < 12){
                $respuesta .= "<h3>El precio de la entrada es de $160";
            } else {
                $respuesta .= "<h3>El precio de la entrada es de $180";
            }
        } else {
            $respuesta .= "<h3>El precio de la entrada es de $300";
        }
        return $respuesta;
    }

}


