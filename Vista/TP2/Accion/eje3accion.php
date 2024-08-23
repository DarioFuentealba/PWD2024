<?php

$titulo = "Ejercicio N 3";
include_once "../../estructura/header.php";

$recibido=data_submitted();
$obj=new Login($recibido['usuario'],$recibido['clave']);
$respuesta = $obj->validarUsuario();
?>
<div class="divtitulo">
    <h1>Ejercicio 2</h1>
</div>
<div class="divform">
    <?php echo $respuesta ;  ?>
</div>
    <div class="boton">
        <a href="../Ejercicio/ejercicio3.php">Volver</a>
    </div>

