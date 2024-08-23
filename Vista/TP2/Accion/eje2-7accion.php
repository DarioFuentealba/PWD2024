<?php
$titulo = "Ejercicio 7";
include_once '../../Estructura/header.php';

$recibido = data_submitted();
$objCalculadora = new Calculadora($recibido);

$resultado = $objCalculadora->realizaOperacion();
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="divform">
    <?php echo $resultado ;  ?>
</div>
<div><a href="../Ejercicio/ejercicio2-7.php" class="btn btn-success" role="button">Volver</a>
<?php
include_once '../../Estructura/footer.php';
?>