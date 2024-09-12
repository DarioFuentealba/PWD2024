<?php
	$titulo = "Auto nuevo"; //Titulo en la pestania
	include_once '../../Estructura/header.php';
?>

<!-- Titulo en la pagina -->
<h3 class="text-center">Ingresar nuevo auto</h3>

<!-- Contenedor de formulario -->
<div class="container">
    <div class="row">

		<!-- Formulario -->
		<form method="post" action="../Accion/auto_accion_nuevo.php" id="formAutoNuevo" name="formAutoNuevo" class="row g-3 mt-3 needs-validation" novalidate>

			<!-- Patente a buscar -->
			<div class="mb-3 form-floating">
				<input class="form-control" type="text" id="Patente" name="Patente" placeholder="AAA 111 ó AA 111 AA" pattern="[A-z\s]{4}[0-9]{3}||[A-z]{2}[0-9]{3}[A-z]{2}" required><br/>
				<label for="patente" class="form-label">Ingrese una patente con el siguiente formato: AAA 111 ó AA 111 AA</label><br>

				<!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten patentes con el formato especificado</div>
            </div>

            <!-- Patente a buscar -->
            <div class="mb-3 form-floating">
				<input class="form-control" id="Marca" name ="Marca" type="text" pattern="^[A-Za-z0-9\s]*[A-Za-z0-9][A-Za-z0-9\s]*$" required><br/>
				<label for="Marca" class="form-label">Marca</label><br>

<<<<<<< Updated upstream
				<!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten letras, n&uacute;meros y espacios</div>
            </div>

            <!-- Modelo -->
            <div class="mb-3 form-floating">
				<input class="form-control" id="Modelo" name ="Modelo" type="number" min="1" placeholder="" required><br/>
				<label for="Modelo" class="form-label">Modelo</label><br>

				<!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten n&uacute;meros enteros positivos</div>
            </div>

            <!-- Dni del Duenio -->
            <div class="mb-3 form-floating">
				<input class="form-control" id="DniDuenio" name ="DniDuenio" type="number" min="1000000" placeholder="" required><br/>
				<label for="DniDuenio" class="form-label">Dni del Due&ntilde;o</label><br>

				<!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten n&uacute;meros enteros positivos</div>
            </div>


            <!-- Boton Guardar nuevo auto -->
            <div class="col-md-4">
                <button class="btn btn-primary" type="submit">Guardar nuevo auto</button>
            </div>
		</form>
	</div>
</div>
<br><br>

<!-- Boton atras -->
<div class="col-md-4">
	<button class="btn btn-info" type="submit">Atr&aacute;s</button>
</div>

<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-6-bootstrap-validation.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>
=======
	
	<input type="submit" class="btn btn-success" role="button">
</form>
<br><br>

<a href="auto_index.php" class="btn btn-success" role="button">Volver</a>
>>>>>>> Stashed changes
