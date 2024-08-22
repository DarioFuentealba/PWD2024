<?php
$titulo = "Ejercicio 7";
include_once '../../Estructura/header.php';

$objCalculadora = new Calculadora();
$recibido = data_submitted();

$objCalculadora->setNumero1($recibido["numero1"]);
$objCalculadora->setNumero2($recibido["numero2"]);
$objCalculadora->setOperacion($recibido["operacion"]);
$resultado = $objCalculadora->realizaOperacion();
?>

<div class="divtitulo">
    <h1>Ejercicio 7</h1>
</div>
<div class="divform">
    <?php echo $resultado ;  ?>
</div>
<div><a href="../Ejercicio/ejercicio2-7.php" class="boton">Volver</a></div>
<?php
include_once '../../Estructura/footer.php';
?>