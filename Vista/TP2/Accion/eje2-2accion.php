<?php

$titulo = "Ejercicio 2";
include_once ("../../Estructura/header.php");

$datos = data_submitted();
$obj = new Horas($datos);
$horasTotales=$obj->sumarHoras($datos);
?>
<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="container-tp1-ej2">
    <h1 id="tituloAccion2">Horas totales por semana:

<?php echo $horasTotales ?></h1>

    <div><a href="../Ejercicio/ejercicio2-2.php" class="btn btn-success" role="button">Volver</a>
</div>
<?php
include_once '../../Estructura/footer.php';
?>