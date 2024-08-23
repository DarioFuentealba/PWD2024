<?php
$titulo = "Ejercicio 3";
include_once '../../Estructura/header.php';

$recibido = data_submitted();
$objpersona = new Persona($recibido);

?>
<div class="divtitulo">
    <h1>Ejercicio 3</h1>
</div>
<div class="divform">
    <?php echo "Hola, yo soy ".$objpersona->getNombre()." ".$objpersona->getApellido()." tengo ".$objpersona->getEdad()." años y vivo en la calle ".$objpersona->getDireccion();  ?>
</div>
<div><a href="../Ejercicio/ejercicio2-3.php" class="boton">Volver</a></div>
<?php
include_once '../../Estructura/footer.php';
?>