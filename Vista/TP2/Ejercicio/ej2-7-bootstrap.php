<?php
$titulo = "TP 2 - Ejercicio 2-7";
include_once '../../Estructura/header.php';
?>

<!-- Titulo -->
<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<!-- Enunciado -->
<div class="enunciado" id="enunciado">
    <p class="h5 mb-4">Enunciado: </p>
    <p>
    Crear una p&aacute;gina con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán n&uacute;meros y el select debe dar la opci&oacute;n de una operaci&oacute;n matem&aacute;tica que podr&aacute; resolverse usando los n&uacute;meros ingresados. En la p&aacute;gina que procesa la informaci&oacute;n se debe mostrar por pantalla la operaci&oacute;n seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operaci&oacute;n. Ejemplo del formulario: 
    </p>
</div>


<!-- Contenedor del formulario -->
<div class="container">
    <div class="row">

        <!-- Formulario -->
        <form id="form7" name="form7" method="get" action="../Accion/ej2-7accion-bootstrap.php" class="row g-3 mt-3 needs-validation" novalidate>

            <!-- Fila 1 -->
            <div class="col-12 d-flex justify-content-center">
                <!-- Numero 1 -->
                <div class="mb-3 form-floating text-primary" style="width: 50%">
                    <input type="number" step="any" name="numero1" id="numero1Input" class="form-control" placeholder="" required>
                    <label for="numero1Input" class="form-label">N&uacute;mero 1: </label>
                    <div class="valid-feedback">Ok!</div>
                    <div class="invalid-feedback">Sólo se permiten n&uacute;meros</div>
                </div>
            </div>


            <!-- Fila 2 -->
            <div class="col-12 d-flex justify-content-center">
                <!-- Numero 2 -->
                <div class="mb-3 form-floating text-primary" style="width: 50%">
                    <input type="number" step="any" name="numero2" id="numero2Input" class="form-control" pattern="^(?!0$)\d+$" placeholder="" required>
                    <label for="numero2Input" class="form-label">N&uacute;mero 2: </label>
                    <div class="valid-feedback">Ok!</div>
                    <div class="invalid-feedback">Sólo se permiten n&uacute;meros distintos de cero</div>
                </div>
            </div>


            <!-- Fila 3 -->
            <div class="col-12">
                <!-- Listado de operaciones -->
                <div class="mb-3 text-light divform" style="width: 50%; text-align: center;"> <!-- Da un margin bottom -->
                <label for="operacion">Elige una operaci&oacute;n: </label>
                    <select name="operacion" id="operacion" class="form-select text-primary">
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multiplicacion">Multiplicaci&oacute;n</option>
                    </select>
                    <div class="valid-feedback">Ok!</div>
                    <div class="invalid-feedback">Debe seleccionar una operaci&oacute;n</div>
                </div>

            <!-- Boton enviar -->
            <div id="botones" class="d-flex justify-content-center">
                <button class="btn-tp2" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>


<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-7-bootstrap-validation.js"></script>


<!-- Footer -->
<?php
include_once '../../Estructura/footer.php';
?>