<?php
$titulo = "Ejercicio 5";
include_once '../../Estructura/header.php';

$recibido = data_submitted();
$objpersona = new Persona($recibido);

$mayor = "";

if ($objpersona->mayorEdad()){
    $mayor = "Soy ";
}else{
    $mayor = "No soy ";
}

?>
<div class="divtitulo">
    <h1>Ejercicio 5</h1>
</div>
<div class="divform">
    <?php 
        echo "Hola, yo soy ".$objpersona->getNombre()." ".$objpersona->getApellido()." tengo ".$objpersona->getEdad()." años y vivo en la calle ".$objpersona->getDireccion(); 
        echo ".  " .$mayor . " mayor de edad."."<br>"; 
        echo "Estudios cursados: " . $objpersona->mostrarEstudios() . "<br> Soy de sexo " . $objpersona->mostrarSexo(). "<br>";
    ?>
</div>
<div><a href="../Ejercicio/ejercicio2-5.php" class="boton">Volver</a></div>
<?php
include_once '../../Estructura/footer.php';
?>