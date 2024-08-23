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
<div><a href="../Ejercicio/ejercicio3.php" class="btn btn-success" role="button">Volver</a>

<?php
include_once '../../Estructura/footer.php';
?>