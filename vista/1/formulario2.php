<?php include "../estructura/cabecera/incio.php"; ?>
<div id="form" class="form2">
    <form id="formulario" name="form" method="get" action="../action/action.php">
        <input type="hidden" name="tp" value="TP1">
        <input type="hidden" name="ejercicio" value="2">
        <h2>ingresar horas de clases</h2>
        <div class="cuadros">
            <label for="horario_lunes">lunes</label>
            <input name="horario_lunes" type="text" id="horario_lunes">           
        </div>
        <div class="cuadros">
            <label for="horario_martes">martes</label>
            <input name="horario_martes" type="text" id="horario_martes">
        </div>
        <div class="cuadros">
            <label for="horario_miercoles">miercoles</label>
            <input name="horario_miercoles" type="text" id="horario_miercoles">   
        </div>
        <div class="cuadros">
            <label for="horario_jueves">jueves</label>
            <input name="horario_jueves" type="text" id="horario_jueves">
        </div>
        <div class="cuadros">
            <label for="horario_viernes">viernes</label>
            <input name="horario_viernes" type="text" id="horario_viernes">
        </div>
        <div class="cuadros">
            <input name="submit" type="submit" value="Aceptar">
        </div>
        <div class="resp"></div>
    </form>
    
</div>

<?php include "../estructura/pie/footer.php"; ?>