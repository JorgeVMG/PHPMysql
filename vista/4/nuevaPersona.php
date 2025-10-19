<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="h4 text-center mb-4">Ingresar Datos de la Nueva Persona</h1>
                    <form class="needs-validation" novalidate action="control/action/action.php" method="post">
                        <div class="row mb-3">
                            <input type="hidden" name="tp" value="TP4">
                            <input type="hidden" name="ejercicio" value="4">
                            <div class="col-md-6 mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required>
                                <div class="valid-feedback">¡Correcto!</div>
                                <div class="invalid-feedback">Ingrese el nombre.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" required>
                                <div class="valid-feedback">¡Correcto!</div>
                                <div class="invalid-feedback">Ingrese el apellido.</div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="DNI" class="form-label">DNI</label>
                                <input type="text" class="form-control" name="DNI" id="DNI" required>
                                <div class="valid-feedback">¡Correcto!</div>
                                <div class="invalid-feedback">Ingrese el DNI.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" required>
                                <div class="valid-feedback">¡Correcto!</div>
                                <div class="invalid-feedback">Ingrese la fecha de nacimiento.</div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" required>
                                <div class="valid-feedback">¡Correcto!</div>
                                <div class="invalid-feedback">Ingrese el teléfono.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="domicilio" class="form-label">Domicilio</label>
                                <input type="text" class="form-control" name="domicilio" id="domicilio" required>
                                <div class="valid-feedback">¡Correcto!</div>
                                <div class="invalid-feedback">Ingrese el domicilio.</div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-3">Guardar Persona</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>