<?php
    $titulo = "TP 3 - Ejercicio 2"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
?>

<!-- titulo -->
<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<!-- Cuadro sombreado que engloba todo -->
<div class="container mt-3 mt-5 p-4 rounded shadow">

    <!-- Titulo de la pagina -->
    <h3 class="text-center text-light mb-4">Subir archivo</h3>

    <!-- Contenedor del formulario -->
    <div class="container text-light d-flex justify-content-center">
        <div class="row divform w-100" style="max-width: 600px;">

            <!-- Formulario -->
            <form action="../Accion/ej2_mostrar_txt_accion.php" method="post" name="formSubirArchivo" id="formSubirArchivo" class="row g-3 mt-3 needs-validation" enctype="multipart/form-data">

                <!-- Seleccion del archivo a subir -->
                <div class="subtitulo text-light d-flex justify-content-center">
                    Seleccione el archivo a subir:
                </div>

                <!-- Centrado del input file -->
                <div class="d-flex justify-content-center w-100">
                    <input type="file" name="subirArchivo" id="subirArchivo" class="form-control-file" required>
                </div>
                
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">Este campo es obligatorio</div>

                <!-- Boton enviar -->
                <div id="botones" class="d-flex justify-content-center">
                    <button type="submit" class="btn-tp3" name="subir_archivo">Subir archivo</button>
                </div>
            </form>
        </div>
    </div>

<!-- Link validaciones JS -->
<script type="text/javascript" src="../../Js/tp3ej1.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>