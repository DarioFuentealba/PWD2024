<?php
$titulo = "Ejercicio N 5";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1>Ejercicio 5</h1>
</div>
<div class="divform">
    <form id="form5" name="form4" action="../Accion/eje2-5accion.php" method="get">
        <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido"><br>
        <label for="ledad">Edad:</label><br>
        <input type="number" name="edad" id="edad" require min="1"><br>
        <label for="ldireccion">Direcci&oacute;n</label><br>
        <input type="text" name="direccion" id="direccion"><br>
        <label for="lnivelestudio">Nivel de estudios:</label><br>
        <input type="radio" id="estudio" name="estudio" value="1">
        <label for="lsin">Sin Estudios</label><br>
        <input type="radio" id="estudio" name="estudio" value="2">
        <label for="lsecundario">Secundarios</label><br>
        <input type="radio" id="estudio" name="estudio" value="3">
        <label for="lterciario">Terciarios</label><br>

        <select name="sexo" id="sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br>
        <br>
        <input type="submit" name="enviar" id="enviar" value="Enviar" class="btn btn-success" role="button">
    </form>
    <script type="text/javascript" src="../../Js/tp2ej5.js"></script>

</div>





<?php
include_once '../../Estructura/footer.php';
?>