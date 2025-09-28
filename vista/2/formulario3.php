<?php include "../estructura/cabecera/incio.php"; ?>
    <div class='container text-center'>
        <div class="row col-3 ">
            <form class='needs-validation align-self-center' id='form3' novalidate method='post' action='../action/action.php'>
                <input type="hidden" name="tp" value="TP2">
                <input type="hidden" name="ejercicio" value="3">
                <div class='border border-5 border-secondary p-3 mt-3 '>
                    <div class='row'>
                        <h3 class='text-center'>Member Login</h3>
                    </div>
                    <div class='mb-3'>
                        <input type='text' class='form-control' id='usuario' name='usuario' placeholder='usuario' required>
                        <div class='valid-feedback'></div>
                        <div class='invalid-feedback'></div>
                    </div>
                    <div class='mb-3'>
                        <input type='password' class='form-control' id='contrasena' name='contrasena' placeholder='contrasena' required>
                        <div class='valid-feedback' id="contraseniaValida"></div>
                        <div class='invalid-feedback' id="contraseniaInvalida"></div>
                    </div>
                    <div class='mb-3 text-center'>
                        <input type='submit' class='btn btn-success' value='Enviar'>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
<?php include "../estructura/pie/footer.php"; ?>