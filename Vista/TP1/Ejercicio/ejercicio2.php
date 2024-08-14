<?php
$titulo = "Ejercicio N 2";
include_once('../../Estructura/header.php');

?>


<form action="../Accion/ej2accion.php" id="form2" name="form2" onsubmit="return validarej2();">
    <label for="lhoras">Horas cursadas:</label><br>
    <input type="text" name="horas" id="horas" required><br>
    <input type="submit" name="enviar" id="enviar" value="Enviar">
</form>

</body>
<?php
include_once('../../Estructura/footer.php');
?>




