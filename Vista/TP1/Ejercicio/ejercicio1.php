<?php
$titulo = "Ejercicio N 1";
include_once "../../Estructura/header.php";

?>


<h1>Primer Ejercio TP 1</h1>
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