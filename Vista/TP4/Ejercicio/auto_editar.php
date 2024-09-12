<?php
	$titulo = "Editar auto"; //Titulo en la pestania
	include_once '../../Estructura/header.php';
	$objAbmAuto = new AbmAuto();
	$datos = data_submitted();
	$objAuto = NULL;
	if (isset($datos['Patente']))
	{
		$listaAuto = $objAbmAuto->buscar($datos);
		if (count($listaAuto) == 1)
		{
			$objAuto= $listaAuto[0];
		}
	}
?>	

<!-- Titulo en la pagina -->
<h3 class="text-center">Editar un auto</h3>

<?php
	if ($objAuto != null)
	{
?>

<!-- Contenedor de formulario -->
<div class="container">
    <div class="row">

		<!--Formulario -->
		<form method="post" action="../Accion/auto_accion.php" id="formAutoEditar" name="formAutoEditar" class="row g-3 mt-3 needs-validation" novalidate>

            <!-- Patente -->
            <div class="mb-3">
				<label for="Patente" class="form-label">Patente</label><br/>
				<input id="Patente:" readonly name ="Patente" width="80" type="text" class="form-control" value="<?php echo $objAuto->getPatente()?>" pattern="[A-z\s]{4}[0-9]{3}||[A-z]{2}[0-9]{3}[A-z]{2}" required>
				<br/>

                <!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten patentes con el formato AA 111 AA ó AAA 111</div>
            </div>

            <!-- Marca -->
            <div class="mb-3">
				<label for="Marca" class="form-label">Marca</label><br/>
				<input id="Marca" name ="Marca" width="80" type="text" value="<?php echo $objAuto->getMarca()?>" class="form-control"[A-Za-z0-9][A-Za-z0-9\s]*$" required>
				<br/>

<<<<<<< Updated upstream
                <!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten letras, n&uacute;meros y espacios</div>
            </div>

            <!-- Modelo -->
            <div class="mb-3">
				<label for="Modelo" class="form-label">Modelo</label><br/>
				<input id="Modelo:" name ="Modelo" width="80" type="number" min="1" value="<?php echo $objAuto->getModelo()?>" class="form-control" required>
				<br/>

                <!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten n&uacute;meros enteros positivos</div>
            </div>

            <!-- DNI duenio -->
            <div class="mb-3">
				<label for="DniDuenio" class="form-label">Dni del Due&ntilde;o</label><br/>
				<input id="DniDuenio:" name ="DniDuenio" width="80" type="number" min="1000000" value="<?php echo $objAuto->getObjDuenio()->getNroDni()?>" class="form-control" pattern="/^[1-9]\d*$/" required>
				<br/>

                <!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten n&uacute;meros enteros positivos</div>
            </div>

            <!-- Boton editar -->
            <div class="col-md-4">
				<input id="accion" name ="accion" value="editar" type="hidden">
                <button class="btn btn-primary" type="submit">Editar</button>
            </div>
		</form>
	</div>
</div>
=======
	<input id="accion" name ="accion" value="editar" type="hidden">
	<input type="submit" class="btn btn-success" role="button">
</form>
>>>>>>> Stashed changes

<?php
	}else{
		echo "<p>No se encontro la clave que desea modificar";
	}
?>
<br><br>

<<<<<<< Updated upstream
<!-- Boton atras -->
<div class="col-md-4">
	<button class="btn btn-info" type="submit">Atr&aacute;s</button>
</div>

<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-6-bootstrap-validation.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>
=======
<a href="auto_index.php" class="btn btn-success" role="button">Volver</a>
>>>>>>> Stashed changes
