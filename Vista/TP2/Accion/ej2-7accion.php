<?php
$titulo = "TP 2 - Ejercicio 2-7";
include_once '../../Estructura/header.php';

$recibido = data_submitted();
$objCalculadora = new Ej7Calculadora($recibido);
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="divform">
    <?php
        echo $objCalculadora->getNro1()." ".$objCalculadora->signo()." ".$objCalculadora->getNro2()." = ".$objCalculadora->cuenta();
    ?>

    <div><a href="../Ejercicio/ejercicio2-7.php" class="btn btn-success" role="button">Volver</a></div>
</div>

<?php
    include_once '../../Estructura/footer.php';
?>