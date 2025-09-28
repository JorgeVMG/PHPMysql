<?php include "../estructura/cabecera/incio.php";?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="h4 text-center mb-4">Ingresar los Datos del Nuevo Auto</h1>
                    <form class="needs-validation" novalidate action="../../action/accionNuevoAuto.php" method="post">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="patente" class="form-label">Patente</label>
                                <input type="text" class="form-control" name="patente" id="patente" required>
                                <div class="valid-feedback">¡Correcto!</div>
                                <div class="invalid-feedback">Ingrese la patente.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <input type="text" class="form-control" name="marca" id="marca" required>
                                <div class="valid-feedback">¡Correcto!</div>
                                <div class="invalid-feedback">Ingrese la Marca del vehiculo.</div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="modelo" class="form-label">Modelo</label>
                                <input type="text" class="form-control" name="modelo" id="modelo" required>
                                <div class="valid-feedback">¡Correcto!</div>
                                <div class="invalid-feedback">Ingrese el modelo del vehiculo.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="dniDuenio" class="form-label">DNI del Dueño</label>
                                <input type="text" class="form-control" name="dniDuenio" id="dniDuenio" required>
                                <div class="valid-feedback">¡Correcto!</div>
                                <div class="invalid-feedback">Ingrese el DNI del dueño.</div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-3">Guardar Auto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../estructura/pie/footer.php";?>