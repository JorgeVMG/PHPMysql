<?php include "../estructura/cabecera/incio.php";?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-3 pb-3 border border-dark" >
                <form class="needs-validation" novalidate action="../../action/formAccion.php" method="post">
                    <input type="hidden" name="ejercicio" value="1">
                    <div class="mb-4">
                        <h1 class="h4 mb-0 text-center" >Ingresar patente a buscar</h1>
                    </div>
                    <div class="mb-3">
                        
                        <input type="text" class="form-control" name="ingresoPatente" id="ingresoPatente" required>
                        <div class="valid-feedback">¡Correcto!</div>
                        <div class="invalid-feedback">Ingrese la patente.</div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Buscar</button>
                </form>
            </div>
        </div>
    </div>
<?php include "../estructura/pie/footer.php";?>