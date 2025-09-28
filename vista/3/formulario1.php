<?php include "../estructura/cabecera/incio.php"; ?>
    <div class="container">
        <form action="../action/action.php" method="post" class="needs-validation" novalidate id="form-subir" name="form-subir" enctype="multipart/form-data">
            <div class="col-6 mb-3">
                <input type="hidden" name="tp" value="TP3">
                <input type="hidden" name="ejercicio" value="1">
                <label for="archivo">Selecciona un archivo: (.doc o .pdf, máx 2MB)</label><br>
                <input name="fileToUpload" id="fileToUpload" class="form-control" type="file" >
                <div class='invalid-feedback' id="errorArchivo"></div>
                <div class='valid-feedback' id="aciertoArchivo"></div>
            </div>
            <div class="col-6">
                <input type="submit" class="btn btn-primary" value="enviar">
            </div>
        </form>
    </div>

<?php include "../estructura/pie/footer.php"; ?>