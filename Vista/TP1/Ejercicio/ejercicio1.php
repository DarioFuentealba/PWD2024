<?php
$titulo = "Ejercicio 1";
include_once "../../Estructura/header.php";
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<div class="enunciado">
  <p>Enunciado:</p>
  <p>
    Confeccionar un formulario que solicite un n&uacute;mero. Al pulsar el botón de enviar debe llamar a un script -vernumero.php- y visualizar un mensaje que indique si el n&uacute;mero enviado fue: positivo, cero o negativo. Añadir un link, a la p&aacute;gina que visualiza la respuesta, que permita volver a la p&aacute;gina anterior.
  </p>
</div>
<div class="divform">
<form name="form1" method="post" action="../Accion/vernumero.php" id="form1">
  <label for="lnumero">Ingrese un n&uacute;mero:</label><br>
  <input type="number" name="numero" id="numero" style="margin-bottom: 5px;"><br>
  <input type="submit" id="enviar" name="enviar" value="Enviar" class="btn btn-success" role="button"><br>
</form>

<?php include_once '../../Estructura/footer.php'; ?>

<script type="text/javascript" src="../../Js/validacionTP1.js"></script>
<script>
  document.getElementById("form1").addEventListener("submit", function(event) {
    var numeroCampo = document.getElementById("numero");
    // Llamar a la función validarCampo que está en validacionTP1.js
    if (!validarCampo(numeroCampo)) {
      event.preventDefault();  // Evitar que se envíe el formulario si la validación falla
    }
  });
</script>