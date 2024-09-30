<?php
$titulo = "TP 4 - Ejercicio 4";
include_once '../../Estructura/header.php';
echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $datos = data_submitted();
    $obj = new Cine($datos);
    ?>
    <div class="container_cine my-4">
        <div class="container my-4 p-4 text-success rounded text-light">
            <h1><i class="bi bi-pencil-square"></i>Cinem@s</h1>
            <h2>La película introducida es:</h2>
            <p><strong>Título:</strong> <?php echo($obj->getNombre()) ?></p>
            <p><strong>Actores:</strong> <?php echo($obj->getActores()) ?></p>
            <p><strong>Director:</strong> <?php echo($obj->getDirector()) ?></p>
            <p><strong>Guión:</strong> <?php echo($obj->getGuion()) ?></p>
            <p><strong>Producción:</strong> <?php echo($obj->getProduccion()) ?></p>
            <p><strong>Año:</strong> <?php echo($obj->getAnio()) ?></p>
            <p><strong>Nacionalidad:</strong> <?php echo($obj->getNacionalidad()) ?></p>
            <p><strong>Género:</strong> <?php echo($obj->getGenero()) ?></p>
            <p><strong>Duración:</strong> <?php echo($obj->getDuracion()) ?></p>
            <p><strong>Restricciones de edad:</strong> <?php echo($obj->getRestriccion()) ?></p>
        </div>

        <div id="botones" class="d-flex justify-content-center">
            <a href="../Ejercicio/ejercicio4.php" class="btn-tp2 mt-5">Volver</a>
        </div>
    </div>

<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio4.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>