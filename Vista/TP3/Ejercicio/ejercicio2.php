<?php
$titulo = "Ejercicio N 2";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1>Ejercicio 2</h1>
</div>
<div class="divform">
    <h1 class="p-3 mb-3 bg-primary">LECTURA DE UN ARCHIVO txt</h1>
    <form action="../Accion/eje2accion.php" id="form" method="POST" enctype="multipart/form-data">
        <p class="">Subir archivo</p>
        <input type="file"  name="archivo" id="archivo">
        <div class="p-3 mb-3">
            <button type="submit" class="btn btn-primary">Leer</button>
        </div>
    </form>
</div>


<?php
include_once '../../Estructura/footer.php';
?>