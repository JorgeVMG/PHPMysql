<?php include "../estructura/cabecera/incio.php"; ?>

<div id="form">
  <form id="formulario" name="form" method="post" action="../action/action.php">
    <input type="hidden" name="tp" value="TP1">
    <input type="hidden" name="ejercicio" value="1">
    <h2>Ingresar un Numero</h2>
    <div class="cuadros">
      <input name="numero-form" type="text" id="numero-form">
    </div>
    <div class="cuadros">
      <input name="submit" type="submit" value="Aceptar">
    </div>
    <div class="resp"></div>
  </form>
</div>

<?php include "../estructura/pie/footer.php"; ?>
