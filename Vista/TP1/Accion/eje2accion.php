<?php
include_once "../../estructura/header.php";

$datos = data_submitted();
$obj = new Horas($datos);
$horasTotales=$obj->sumarHoras($datos);
?>

<div class="container-tp1-ej2">
    <h1 id="tituloAccion2">Horas totales por semana:

<?php echo $horasTotales ?></h1>

    <div class="volver-tp1-ej2"><a href="../Ejercicio/ejercicio2.php" class="volver-accion-ej2">Volver</a></div>
</div>