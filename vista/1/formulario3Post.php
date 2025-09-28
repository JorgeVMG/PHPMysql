<?php include "../estructura/cabecera/incio.php"; ?>
   <div id='form'>
        <form id='formulario' name='from3' method='post' action='../action/action.php'>
            <input type="hidden" name="tp" value="TP1">
            <input type="hidden" name="ejercicio" value="3Post">
            <h2>Ingresar sus Datos</h2>
            <div class="cuadros">
                <label for='nombre'>nombre</label>
                <input type='text' name='nombre' id='nombre' >
            </div>
            <div class="cuadros">
                <label for='apellido'>apellido</label>
                <input type='text' name='apellido' id='apellido'>
            </div>
            <div class="cuadros">
                <label for='edad'>edad</label>
                <input type='text' name='edad' id='edad' ><br>
            </div>
            <div class="cuadros">
                <label for='direccion'>direccion</label>
                <input type='text' name='direccion' id='direccion'>
            </div>
            <div class="cuadros">
                <input name="submit" type="submit" value="Aceptar">
            </div>
             <div class="resp"></div>
        </form>
    </div>
<?php include "../estructura/pie/footer.php"; ?>