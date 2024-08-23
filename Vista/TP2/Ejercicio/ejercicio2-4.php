<?php
$titulo = "Ejercicio N 4";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1>Ejercicio 4</h1>
</div>
<div class="divform">
    <form id="form3" name="form3" action="../Accion/eje2-4accion.php" method="get">
        <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido"><br>
        <label for="ledad">Edad:</label><br>
        <input type="number" name="edad" id="edad" require min="1"><br>
        <label for="ldireccion">Direcci&oacute;n</label><br>
        <input type="text" name="direccion" id="direccion"><br>
        <br>
        <input class="btn btn-success" role="button" type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
    <script type="text/javascript" src="../../Js/tp2ej3.js"></script>

</div>





<?php
include_once '../../Estructura/footer.php';
?>