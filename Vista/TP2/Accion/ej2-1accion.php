<?php

$titulo = "TP 2 - Ejercicio 2-1";

include_once "../../Estructura/header.php";


$recibido=data_submitted();
$nro = ($recibido["numero"]);
$obj = new Ej1Numero($nro);
$tipoNumero=$obj->verificaSigno();
?>
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
    <div class="volver-tp1-ej1"><a href="../Ejercicio/ejercicio2-1.php" class="volver-accion-ej1">Volver</a></div>
</div>

