<?php
$titulo = "Ejercicio 8";
include_once '../../Estructura/header.php';

$recibido = data_submitted();
$obj = new CineTarifa($recibido);
$tarifa = $obj->calculaTarifa();
?>

<div class="divtitulo">
    <h1>Ejercicio 8</h1>
</div>
<div class="divform">
    <?php echo 'El precio de la entrada es de '.'$'.$tarifa ;  ?>
    <div><a href="../Ejercicio/ejercicio8.php" class="btn btn-success" role="button">Volver</a></div>
</div>
<?php
include_once '../../Estructura/footer.php';
?>