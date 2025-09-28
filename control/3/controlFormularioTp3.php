<?php
class controlFormulario{
    function formulario1($data) {
        $target_dir = __DIR__ . "/../../vista/3/uploads/";
        $nameFile = basename($_FILES["fileToUpload"]["name"]);
        $target_file = $target_dir . $nameFile;
        $mensaje = "<h3>";
        $uploadOk = 1;

        if (isset($data["submit"])) {
            $fileType = mime_content_type($_FILES["fileToUpload"]["tmp_name"]);

            $allowedTypes = [
                "application/pdf",
                "application/msword",
                "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
            ];

            if (!in_array($fileType, $allowedTypes)) {
                $uploadOk = 0;
            }
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
            $mensaje .= "El archivo ya existe. ";
        }
        if ($_FILES["fileToUpload"]["size"] > 2097152) { 
            $uploadOk = 0;
            $mensaje .= "El archivo pesa mas de 2MB. ";
        }
        if ($uploadOk == 0) {
            $mensaje .= "No se pudo subir el archivo";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $rutaWeb = "uploads/" . $nameFile;
                $mensaje .= "El archivo se subió correctamente. <a href='" . htmlspecialchars($rutaWeb, ENT_QUOTES) . "' target='_blank'>Abrir archivo</a>";
            }else{
                $mensaje .= "No se pudo mover el archivo al destino final";
            }
        }
        return $mensaje;
    }
    function formulario2($data){
        $target_dir = __DIR__ . "/../../vista/3/uploads/";
        $nameFile = basename($_FILES["fileToUpload"]["name"]);
        $target_file = $target_dir . $nameFile;

        $mensaje = "";
        $uploadOk = 1;

        if (isset($data["submit"])) {
            $fileType = mime_content_type($_FILES["fileToUpload"]["tmp_name"]);

            if ($fileType !== "text/plain") {
                $mensaje .= "Tipo de archivo no permitido. Solo se aceptan archivos de texto (.txt).";
                $uploadOk = 0;
            }
        }

        if ($uploadOk == 0) {
            $mensaje = "<h3> No se pudo subir el archivo.";
        } else {
            $contenido = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);

            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $textar = "<h3>El archivo Textarea :</h3><textarea rows='10' cols='50' readonly>" . htmlspecialchars($contenido) . "</textarea>";
                $mensaje .= $textar."<h3>Se subió correctamente" ;
            } else {
                $mensaje .= "<h3>No se pudo mover el archivo al destino final.";
            }
        }

        return $mensaje;
    }
    function formulario3($data){
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
        $rutImag = $this->agregarImagen($data);
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
                    <p class='mb-2'><strong>Actores:</strong> <span class='text-dark'>$actores</span></p>
                    <p class='mb-2'><strong>Director:</strong> <span class='text-dark'>$director</span></p>
                    <p class='mb-2'><strong>Guion:</strong> <span class='text-dark'>$guion</span></p>
                    <p class='mb-2'><strong>Producción:</strong> <span class='text-dark'>$produccion</span></p>
                    <p class='mb-2'><strong>Año:</strong> <span class='text-dark'>$anio</span></p>
                    <p class='mb-2'><strong>Nacionalidad:</strong> <span class='text-dark'>$nacionalidad</span></p>
                    <p class='mb-2'><strong>Género:</strong> <span class='text-dark'>$genero</span></p>
                    <p class='mb-2'><strong>Duración:</strong> <span class='text-dark'>$duracion min</span></p>
                    <p class='mb-2'><strong>Restricción de edad:</strong> <span class='text-dark'>$restriccionText</span></p>
                    $sinopsisText
                    <img src='$rutImag' alt='Imagen de la película' class='img-fluid' style='max-width:600px;'>
                </div>
            </div>
            </div>
        </div>";
        return $repuesta;
    }
    function agregarImagen($data){
        $target_dir = __DIR__ . "/../../vista/3/uploads/";
        $nameFile = basename($_FILES["fileToUpload"]["name"]);
        $target_file = $target_dir . $nameFile;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $rutaWeb = "uploads/" . $nameFile;
         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check === false) {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }

        if(!in_array($imageFileType, ["jpg","jpeg","png","gif"])) {
            $uploadOk = 0;
        }
        if ($uploadOk != 0) {
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        }
        return $rutaWeb;
    }
    
}