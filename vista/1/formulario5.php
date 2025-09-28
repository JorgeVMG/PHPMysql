<?php include "../estructura/cabecera/incio.php"; ?>
    <div id='form'>
        <form id='formulario' name='from' method='get' action='../action/action.php'>
            <h2>Ingresar sus datos</h2>
            <input type="hidden" name="tp" value="TP1">
            <input type="hidden" name="ejercicio" value="5">
            <div class="cuadros">
                <label for='nombre'>nombre</label>
                <input type='text' name='nombre' id='nombre' ><br>
            </div>
            <div class="cuadros">
                <label for='apellido'>apellido</label>
                <input type='text' name='apellido' id='apellido' ><br>
            </div>
            <div class="cuadros">
                <label for='edad'>edad</label>
                <input type='text' name='edad' id='edad' ><br>
            </div>
            <div class="cuadros">
                <label for='direccion'>direccion</label>
                <input type='text' name='direccion' id='direccion' ><br>
            </div>
            <div class="resp"></div>
            <hr>
            <p>Sexo</p>
            <div class="cuadros">
                <label for='masculino'>Masculino</label>
                <input type='radio' name='sexo' value='masculino' id='masculino' checked><br>
            </div>
            <div class="cuadros">
                <label for='femenino'>Femenino</label>
                <input type='radio' name='sexo' value='femenino' id='femenino'><br>
            </div>
            <div class="cuadros">
                <label for='otro'>Otro</label>
                <input type='radio' name='sexo' value='otro' id='otro'><br>
            </div>
            <hr>
            <p>Nivel De Estudio</p>
            <div class="cuadros">
                <label for='no_estudios'>Nulos</label>
                <input type='radio' name='estudios' value='1' id='no-estudios' checked><br>
            </div>
            <div class="cuadros">
                <label for='primarios'>Primario</label>
                <input type='radio' name='estudios' value='2' id='primarios' ><br>
            </div>
            <div class="cuadros">
                <label for='secundarios'>Secundario</label>
                <input type='radio' name='estudios' value='3' id='secundarios'><br>
            </div>
            <hr>
            <div class="cuadros">
                <input name="submit" type="submit" value="Enviar">
            </div>
        </form>
    </div>

<?php include "../estructura/pie/footer.php"; ?>