<?php
    $titulo = "TP 3 - Ejercicio 1"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
?>

<!-- Cuadro sombreado que engloba todo -->
<div class="container mt-3 mt-5 p-4 border rounded shadow">

    <!-- Titulo de la pagina -->
    <h3 class="text-center text-primary mb-4">Subir archivo</h3>

    <!-- Contenedor del formulario -->
    <div class="container">
        <div class="row">

            <!-- Formulario -->
            <form action="../Accion/ej1_subir_archivo_accion.php" method="post" name="formSubirArchivo" id="formSubirArchivo" class="row g-3 mt-3 needs-validation" enctype="multipart/form-data">

                <!-- Seleccion del archivo a subir -->
                Seleccione el archivo a subir: <input type="file" name="subirArchivo" id="subirArchivo" class="form-control-file w-100" required>
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">Este campo es obligatorio</div>

                <!-- Boton enviar -->
                <div class="col-md-4">
                    <input name="submit" id="submit" class="btn btn-primary" type="submit" value="Subir archivo">
                </div>
            </form>
        </div>
    </div>

<!-- Link validaciones JS -->
<script type="text/javascript" src="../../Js/tp3ej1.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>