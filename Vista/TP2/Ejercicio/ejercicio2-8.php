<?php
$titulo = "Ejercicio N 8";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1>Ejercicio N° 8 </h1>
</div>

<div class="divform">
    <form id="form8" method="get" action="../Accion/eje2-8accion.php">
        <label>Ingrese sus datos para calcular la tarifa:</label><br><br>
        <label>Edad:</label><br>
        <input type="text" name="edad" id='edad'><br><br>

        <label>Estudia:</label><br>
        <input type="radio" id="estudia_si" name="estudia" value="si" >Estudio<br>
        <input type="radio" id="estudia_no" name="estudia" value="no" >No estudio<br><br>

        <input type="submit" name="submit" value="Enviar" class="botonFormulario">
        <input type="reset" value="Limpiar Formulario">
    </form>
    <script type="text/javascript" src="../../Js/ej8.js"></script>
</div>

</body>
</html>

</div>

<?php
include_once '../../Estructura/footer.php';
?>