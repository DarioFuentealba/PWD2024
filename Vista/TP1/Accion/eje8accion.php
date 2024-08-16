<?php
$titulo = "Ejercicio 8";
include_once '../../Estructura/header.php';

$obj = new CineTarifa();
$recibido = data_submitted();
$obj->setEdad($recibido["edad"]);
$obj->setEstudio($recibido["estudia"]);
$tarifa = $obj->calculaTarifa();
?>

<div class="divtitulo">
    <h1>Ejercicio 8</h1>
</div>
<div class="divform">
    <?php echo 'El precio de la entrada es de '.'$'.$tarifa ;  ?>
</div>
<div><a href="../Ejercicio/ejercicio8.php" class="boton">Volver</a></div>
<?php
include_once '../../Estructura/footer.php';
?>