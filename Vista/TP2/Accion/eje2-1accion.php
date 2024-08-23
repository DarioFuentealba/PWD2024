<?php

$titulo = "Ejercicio 1";
include_once "../../estructura/header.php";

$recibido = data_submitted();
$nro = intval($recibido["numero"]);
$obj = new Numero($nro);
$tipoNumero = $obj->verificaSigno();
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="container-tp1-ej1">
    <h1 id="tituloAccion1">El numero seleccionado es: <?php echo $nro ?></h1>

    <?php 
   // var_dump($tipoNumero); 
        if($tipoNumero == "Positivo"){
            echo("<p>"."El numero es positivo"."</p>");

        }// fin if
        if($tipoNumero == "Negativo"){
            echo("<p>"."El numero es negativo"."</p>");

        }// fin if 
        if($tipoNumero == "Cero"){
            echo("<p>"."El numero es cero"."</p>");

        }// fin if 

    ?>
    <div><a href="../Ejercicio/ejercicio2-1.php" class="btn btn-success" role="button">Volver</a>
</div>

<?php
include_once '../../Estructura/footer.php';
?>