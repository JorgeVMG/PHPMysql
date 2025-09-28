<?php include "../estructura/cabecera/incio.php"; ?>
    <div id='form'>
        <form id='formulario' name='form' method='post' action='../action/action.php'>
            <h2>Cine Cinem@as</h2>
            <input type="hidden" name="tp" value="TP1">
            <input type="hidden" name="ejercicio" value="8">
            <div class="cuadros">
                <label for='edad'>Edad:</label>
                <input type='text' name='edad' id="edad" required>
            </div>
            <p>¿Es estudiante?</p>
            <div class="cuadros">
                <label for='estudianteSI'>SI</label>
                <input type='radio' name='estudiante' id='estudianteSI' value='si' checked >
            </div>
            <div class="cuadros">
                <label for='estudianteNO'>NO</label>
                <input type='radio' name='estudiante' id='estudianteNO' value='no'>
            </div>
            <div class="secundarios">
                <input type='submit' id='submit' value='Calcular precio'>
                <input type='reset' id='borrar'  value='Limpiar'>
            </div>
            <div class="resp"></div>
        </form>
    </div>
<?php include "../estructura/pie/footer.php"; ?>