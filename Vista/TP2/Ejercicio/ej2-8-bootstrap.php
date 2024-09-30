<?php
$titulo = "TP 2 - Ejercicio 2-8";
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
    La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en funci&oacute;n de la edad y de la condici&oacute;n de estudiante del cliente.
    Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una p&aacute;gina web. Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un bot&oacute;n enviar los datos a un script encargado de realizar el c&aacute;lculo y visualizarlo. 
    Agregar un bot&oacute;n para limpiar el formulario y volver a consultar. 
    </p>
</div>

<!-- Formulario -->
<div class="container d-flex justify-content-center">
    <div class="row">
        <form name="form8" id="form8" method="get" action="../Accion/ej2-8accion-bootstrap.php" class="row g-3 mt-3 needs-validation" novalidate>
            <label class="text-extra" style="text-align: center;">Ingrese sus datos para calcular la tarifa: </label><br><br>

            <!-- 2da fila -->
            <div class="col-12 d-flex justify-content-center">
                <!-- Edad -->
                <div class="mb-3 form-floating text-primary" style="width: 50%">
                    <input type="number" name="edad" id="edadInput" class="form-control" placeholder="Escribe tu edad" min="0" required>
                    <label for="edadInput" class="form-label">Edad: </label>
                    <div class="valid-feedback">Ok!</div>
                    <div class="invalid-feedback">Sólo se permiten números enteros</div>
                </div>
            </div>

            <!-- 3er fila -->
            <div class="col-12 d-flex flex-column align-items-center">
                <!-- Estudios -->
                <div class="mb-3 text-extra text-center">
                    <label>Estudiante?</label><br>

                    <!-- Si estudia -->
                    <div class="form-check">
                        <input type="radio" id="radioInput1" name="estudia" class="form-check-input" required>
                        <label for="radioInput1" class="form-check-label">Estudio</label>
                    </div>

                    <!-- No estudia -->
                    <div class="form-check">
                        <input type="radio" id="radioInput2" name="estudia" class="form-check-input" required>
                        <label for="radioInput2" class="form-check-label">No estudio</label>
                    </div>
                </div>
            </div>


            <!-- Botones -->
            <div class="col-12 d-flex justify-content-center">
                <!-- Boton enviar -->
                <div class="mb-3 me-2">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>

                <!-- Boton limpiar formulario -->
                <div class="mb-3 me-2">
                    <button class="btn btn-warning" type="reset">Limpiar Formulario</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/bootstrap-validation.js"></script>


<!-- Footer -->
<?php
include_once '../../Estructura/footer.php';
?>