<?php
$titulo = "TP 2 - Ejercicio 2-5";
include_once '../../Estructura/header.php';

$recibido = data_submitted();
$objpersona = new Ej3456Persona($recibido);
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="divform">
    <?php
        echo "Hola, yo soy ".$objpersona->getNombre()." ".$objpersona->getApellido().", ".$objpersona->mayorEdad()." mayor de edad y vivo en la calle ".$objpersona->getDireccion()."<br>Estudios cursados: ".$objpersona->mostrarEstudios()."<br>Sexo: ".$objpersona->mostrarSexo();
    ?>

    <div><a href="../Ejercicio/ejercicio2-5.php" class="btn btn-success" role="button">Volver</a></div>
</div>

<?php
    include_once '../../Estructura/footer.php';
?>