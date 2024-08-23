<?php
$titulo = "Ejercicio N 1";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1>Ejercicio 1</h1>
</div>
<div class="divform">
    <form id="form1" method="post" action="../Accion/eje1accion.php" enctype="multipart/form-data">
        <h3>Ingrese un Archivo: </h3><input name="archivo" id="archivo" type="file"><br><br>
        <input type="submit" name="submit" id="submit" value="Enviar"/>
    </form>
</div>




<?php
include_once '../../Estructura/footer.php';
?>