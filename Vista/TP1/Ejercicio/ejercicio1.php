<?php
$titulo = "Ejercicio N 1";
include_once "../../Estructura/header.php";
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<div class="enunciado">
  <p>Enunciado: </p>
  <p>
    Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script -vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.
  </p>
</div>
<form name="form1" method="post" action="../Accion/vernumero.php" onsubmit="return validar();">
  <label for="lnumero">Ingrese un numero:</label><br>
  <input type="text" name="numero" id="numero"><br>
  <input type="submit" id="enviar" name="enviar" value="Enviar" class="boton"><br>

</form>
<div class="footer">

</div>
</body>
<?php include_once '../../Estructura/footer.php';
?>
<script>
  function validar(){
    let = num;
    let exito = true;

    num = document.getElementById("numero").value;
    if (num == ""){
      exito = false
    }

    return exito;
  }
</script>