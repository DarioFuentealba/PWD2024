<?php
$titulo = "Ejercicio 6";
include_once '../../Estructura/header.php';

$objpersona = new Persona();
$recibido = data_submitted();

$objpersona->setNombre($recibido["nombre"]);
$objpersona->setApellido($recibido["apellido"]);
$objpersona->setEdad($recibido["edad"]);
$objpersona->setDireccion($recibido["direccion"]);
$objpersona->setEstudio($recibido["estudios"]);
$objpersona->setSexo($recibido["sexo"]);

foreach ($recibido as $indice => $valor) {
    if ($valor=="") break	;
    if ($indice == "d1" || $indice == "d2" || $indice == "d3" || $indice == "d4" || $indice == "d5" || $indice == "d6"){
        $objpersona->agregarDeporte($valor);
    }
}

$cadena = "Hola, yo soy ".$objpersona->getNombre()." ".$objpersona->getApellido()." tengo ".$objpersona->getEdad()." años y vivo en la calle ".$objpersona->getDireccion().
".  " . $objpersona->mayorEdad() . " mayor de edad."."<br>Estudios cursados: " . $objpersona->mostrarEstudios() . "<br> Soy de sexo " . $objpersona->mostrarSexo(). "<br>";
$cadena .= "Mis deportes preferidos son: " . $objpersona->mostrarDeportes() . "<br>";
?>
<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="divform">
    <?php 
        echo $cadena;
    ?>
</div>
<div><a href="../Ejercicio/ejercicio2-6.php" class="boton">Volver</a></div>
<?php
include_once '../../Estructura/footer.php';
?>