<?php include "../estructura/cabecera/incio.php"; ?>
    <div id='form'>
        <form id='formulario' name='from' method='post' action='../action/action.php'>
            <h2>Ingresar 2 numeros</h2>
            <input type="hidden" name="tp" value="TP1">
            <input type="hidden" name="ejercicio" value="7">
            <div class="cuadros">
                <label for="num1">Numero 1</label>
                <input type='text' name='num1' id='num1'><br>
            </div>
            <div class="cuadros">
                <label for="num2">Numero 2</label>
                <input type='text' name='num2' id='num2'><br>
            </div>
            <div class="cuadros">
                 <select name='operacion' id='operacion'>
                    <option value='suma'>Suma</option>
                    <option value='resta'>Resta</option>
                    <option value='multiplicacion'>Multiplicacion</option>
                    <option value='division'>Division</option>
                </select>
            </div>
                <div class="cuadros">
                    <input name="submit" type="submit" value="Calcular">
                </div>
                <div class="resp"></div>
            </form>
    </div>
<?php include "../estructura/pie/footer.php"; ?>