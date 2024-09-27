<?php
$titulo = "TP 1 - Ejercicio 7";
include_once '../../Estructura/header.php';
echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $recibido = data_submitted();
    $objCalculadora = new Calculadora($recibido);
    $resultado = $objCalculadora->realizaOperacion();
    ?>

    <div class="divform">
        <?php echo $resultado ;  ?>
        <div id="botones" class="d-flex justify-content-center">
            <a href="../Ejercicio/ejercicio7.php" class="btn-tp1" role="button">Volver</a>
        </div>
    </div>

<?php
}else{
    echo '<div class="divform"><p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio7.php" class="btn-tp1" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>