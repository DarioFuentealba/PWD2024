<?php
$titulo = "Ejercicio N 3";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1>Ejercicio 3</h1>
</div>
<div class="divform">
    <form id="form3" name="form3" action="../Accion/eje2-3accion.php" method="post">
        <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido"><br>
        <label for="ledad">Edad:</label><br>
        <input type="text" name="edad" id="edad"><br>
        <label for="ldireccion">Direcci&oacute;n</label><br>
        <input type="text" name="direccion" id="direccion"><br>
        <br>
        <input class="boton" type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
    <script type="text/javascript" src="../../Js/tp2ej3.js"></script>
</div>





<?php
include_once '../../Estructura/footer.php';
?>