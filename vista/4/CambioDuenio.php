<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="h4 text-center mb-4">Ingresar los Datos para el cambio de dueño</h1>
                    <form class="needs-validation" novalidate action="?page=action" method="post">
                        <div class="row mb-3">
                            <input type="hidden" name="tp" value="TP4">
                            <input type="hidden" name="ejercicio" value="6">
                            <div class="col-md-6 mb-3">
                                <label for="patente" class="form-label">Patente del vehiculo</label>
                                <input type="text" class="form-control" name="patente" id="patente" required>
                                <div class="valid-feedback">¡Correcto!</div>
                                <div class="invalid-feedback">Ingrese la patente.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="DNI" class="form-label">DNi del nuevo dueño</label>
                                <input type="text" class="form-control" name="DNI" id="DNI" required>
                                <div class="valid-feedback">¡Correcto!</div>
                                <div class="invalid-feedback">Ingrese la Marca del vehiculo.</div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Guardar Auto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
