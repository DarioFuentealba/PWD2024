<?php
$titulo = "Ejercicio N 8";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1>Ejercicio N° 8 </h1>
</div>

<div class="divform">
    <form method="get" action="../Accion/eje8accion.php">
        <label>Ingrese sus datos para calcular la tarifa:</label><br><br>
        <label>Edad:</label><br>
        <input type="text" name="edad" id='edad'><br><br>

        <label>Estudia:</label><br>
        <input type="radio" name="estudia" value="si" required>Estudio<br>
        <input type="radio" name="estudia" value="no" required>No estudio<br><br>

        <input type="submit" name="submit" value="Enviar" class="botonFormulario">
        <input type="reset" value="Limpiar Formulario">

    </form>
</div>

</body>
</html>

</div>

<?php
include_once '../../Estructura/footer.php';
?>