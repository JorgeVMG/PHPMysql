<?php include "../estructura/cabecera/incio.php"; ?>
    <form class="row g-3 needs-validation" novalidate action="../action/action.php" method="post">
        <div class="col-md-4">
            <input type="hidden" name="tp" value="TP2">
            <input type="hidden" name="ejercicio" value="1">
            <label for="validationCustom01" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
            <div class="valid-feedback">
                Muy bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="validationCustom02" name="apellido" required>
            <div class="valid-feedback">
                Muy bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Usuario</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername" name="usuario" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Por favor elija un nombre de usuario.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="validationCustom03" name="ciudad" required>
            <div class="invalid-feedback">
                Por favor ingrese una ciudad valida.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Estado Civil</label>
            <select class="form-select" id="validationCustom04" name="estado" required>
                <option selected disabled value="">Elegir...</option>
                <option value="soltero">soltero</option>
                <option value="casado">casado</option>
                <option value="viudo">viudo</option>    
            </select>
            <div class="invalid-feedback">
                Por favor seleccione un estado valido.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Codigo Postal</label>
            <input type="text" class="form-control" id="validationCustom05" name="codigoPostal" required>
            <div class="invalid-feedback">
                Por favor ingrese un codigo postal valido.
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Acepto los terminos y condiciones
                </label>
                <div class="invalid-feedback">
                    Debe aceptar los terminos y condiciones antes de enviar.
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
<?php include "../estructura/pie/footer.php"; ?>