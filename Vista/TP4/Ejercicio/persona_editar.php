<?php
	$titulo = "Editar persona"; //Titulo en la pestania
	include_once '../../Estructura/header.php';
	$objAbmPersona = new AbmPersona();
	$datos = data_submitted();
	$obj = NULL;
	
	if (isset($datos['NroDni']))
	{
		$listaPersona = $objAbmPersona->buscar($datos);
		if (count($listaPersona) == 1)
		{
			$obj = $listaPersona[0];
		}
	}
?>	

<!-- Titulo en la pagina -->
<h3 class="text-center">Editar persona</h3>

<?php
if ($obj != null)
{
?>

	<!-- Contenedor de formulario -->
	<div class="container">
		<div class="row">

			<!-- Formulario -->
			<form method="post" action="../Accion/persona_accion.php" id="formPersonaEditar" name="formPersonaEditar" class="row g-3 mt-3 needs-validation" novalidate>

				<!-- Numero DNI -->
				<div class="mb-3 form-floating">
					<input id="NroDni:" readonly name="NroDni" width="80" type="number" min="1000000" value="<?php echo $obj->getNroDni()?>" class="form-control" placeholder=""><br/>
					<label for="NroDni" class="form-label">N&uacute;mero de Dni: </label><br/>

					<!-- Mensajes aprobado y error -->
					<div class="valid-feedback">Ok!</div>
					<div class="invalid-feedback">S&oacute;lo se permiten n&uacute; enteros positivos</div>
				</div>

				<!-- Apellido -->
				<div class="mb-3 form-floating">
					<input id="Apellido:" name="Apellido" width="80" type="text" value="<?php echo $obj->getApellido()?>" class="form-control" placeholder="Escribe tu nombre" pattern="^\s*[A-Za-z]+(\s[A-Za-z]+)*\s*$" required><br/>
					<label for="Apellido" class="form-label">Apellido: </label><br/>

					<!-- Mensajes aprobado y error -->
					<div class="valid-feedback">Ok!</div>
					<div class="invalid-feedback">S&oacute;lo se permiten letras o letras separadas por espacios</div>
				</div>

				<!-- Nombre -->
				<div class="mb-3 form-floating">
					<input id="Nombre:" name="Nombre" width="80" type="text" value="<?php echo $obj->getNombre()?>" class="form-control" placeholder="Escribe tu nombre" pattern="^\s*[A-Za-z]+(\s[A-Za-z]+)*\s*$" required><br/>
					<label for="Nombre" class="form-label">Nombre: </label><br/>

					<!-- Mensajes aprobado y error -->
					<div class="valid-feedback">Ok!</div>
					<div class="invalid-feedback">S&oacute;lo se permiten letras o letras separadas por espacios</div>
				</div>

				<!-- Fecha de Nacimiento -->
				<div class="mb-3 form-floating">
					<input id="fechaNac:" name="fechaNac" width="80" type="text" value="<?php echo $obj->getFechaNac()?>" class="form-control" placeholder="" pattern="^(19|20)\d{2}-(0[1-9]|1[0-2])-(0[1-9]|1\d|2\d|3[01])$|^(?:(19|20)([02468][048]|[13579][26]))-02-29$"><br/>
					<label for="fechaNac" class="form-label">Fecha de Nacimiento: </label><br/>

					<!-- Mensajes aprobado y error -->
					<div class="valid-feedback">Ok!</div>
					<div class="invalid-feedback">S&oacute;lo se permiten fechas de nacimiento en el formato YYYY-MM-DD</div>
				</div>

				<!-- Telefono -->
				<div class="mb-3 form-floating">
					<input id="Telefono:" name="Telefono" width="80" type="numb" value="<?php echo $obj->getTelefono()?>" class="form-control" placeholder="" pattern="^[1-9]\d*-[1-9]\d*$"><br/>
					<label for="Telefono" class="form-label">Tel&eacute;fono: </label><br/>

					<!-- Mensajes aprobado y error -->
					<div class="valid-feedback">Ok!</div>
					<div class="invalid-feedback">S&oacute;lo se permiten n&uacute;meros de tel&eacute;fono del formato 111-111111</div>
				</div>

				<!-- Domicilio -->
				<div class="mb-3 form-floating">
					<input id="Domicilio:" name="Domicilio" width="80" type="text" value="<?php echo $obj->getDomicilio()?>" class="form-control" placeholder="Nombre de la ciudad" pattern="^[A-Za-z0-9\s]*[A-Za-z0-9][A-Za-z0-9\s]*$" required><br/>
					<label for="Domicilio" class="form-label">Domicilio: </label><br/>

					<!-- Mensajes aprobado y error -->
					<div class="valid-feedback">Ok!</div>
					<div class="invalid-feedback">S&oacute;lo se permiten letras o letras y n&uacute;meros separados por un espacio</div>
				</div>

				<!-- Boton editar -->
				<div class="col-md-4">
				<input id="accion" name ="accion" value="editar" type="hidden">
				<button class="btn btn-primary" type="submit">Editar</button>
				</div>
			</form>
		</div>
	</div>

<?php
}else {
	echo "<p>No se encontro la clave que desea modificar";
}
?>
<br><br>

<!-- Boton atras -->
<div class="col-md-4">
	<button class="btn btn-info" type="submit">Atr&aacute;s</button>
</div>

<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-6-bootstrap-validation.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>