<?php

$titulo = "TP 1 - Ejercicio 2";
include_once "../../estructura/header.php";

if(!empty(data_submitted())){
    $datos = data_submitted();
    $obj = new Horas($datos);
    $horasTotales=$obj->sumarHoras($datos);
    ?>

<br>
<br>
<br>

    <div class="divform">
        <br>
        <div class="container-tp1-ej2">
            <h1 id="tituloAccion">Horas totales por semana:

        <?php echo $horasTotales ?></h1>
        <br>
            <div id="botones" class="d-flex justify-content-center">
                <a href="../Ejercicio/ejercicio2.php" class="btn-tp1" role="button">Volver</a>
            </div>
        </div>
    </div>

<?php
}else{
    echo '<div class="divform"><p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio2.php" class="btn-tp1" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>