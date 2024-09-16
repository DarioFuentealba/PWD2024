<?php
	$titulo = "Nueva persona"; //Titulo en la pestania
	include_once '../../Estructura/header.php';
?>


<!-- Contenedor de formulario -->
<div class="container mt-5 p-4 border rounded shadow">
	<!-- Titulo en la pagina -->
	<h3 class="text-center">Agregar una nueva persona</h3>
	<div class="row">

		<!-- Formulario -->
		<form method="post" action="../Accion/persona_accion.php" id="formPersonaNueva" name="formPersonaNueva" class="row g-3 mt-3 needs-validation" novalidate>

			<!-- Numero DNI -->
			<div class="col-md-12 form-floating">
				<input id="NroDni:" name="NroDni" width="80" type="number" min="1000000" class="form-control" placeholder="" pattern="[0-9]{6,8}" required>
				<label for="NroDni" class="form-label">N&uacute;mero de Dni: </label>

				<!-- Mensajes aprobado y error -->
				<div class="valid-feedback">Ok!</div>
				<div class="invalid-feedback">S&oacute;lo se permiten n&uacute; enteros positivos</div>
			</div>

			<!-- Apellido -->
			<div class="col-md-6 form-floating">
				<input id="Apellido:" name="Apellido" width="80" type="text" class="form-control" placeholder="" pattern="^\s*[A-Za-z]+(\s[A-Za-z]+)*\s*$" required>
				<label for="Apellido" class="form-label">Apellido: </label>

				<!-- Mensajes aprobado y error -->
				<div class="valid-feedback">Ok!</div>
				<div class="invalid-feedback">S&oacute;lo se permiten letras o letras separadas por espacios</div>
			</div>

			<!-- Nombre -->
			<div class="col-md-6 form-floating">
				<input id="Nombre:" name="Nombre" width="80" type="text" class="form-control" placeholder="" pattern="^\s*[A-Za-z]+(\s[A-Za-z]+)*\s*$" required>
				<label for="Nombre" class="form-label">Nombre: </label>

				<!-- Mensajes aprobado y error -->
				<div class="valid-feedback">Ok!</div>
				<div class="invalid-feedback">S&oacute;lo se permiten letras o letras separadas por espacios</div>
			</div>

			<!-- Fecha de Nacimiento -->
			<div class="col-md-7">
				<div class="input-group">
                    <div class="form-floating" >
                        <input class="form-control" type="text" id="dia" name="dia" placeholder="" required>  
                        <label for="dia" class="form-label">Día</label>
                        <div class="valid-feedback">Ok!</div>
                        <div class="invalid-feedback">Formato DD</div>
                    </div>
                    <div class="form-floating" >
                        <input class="form-control" type="text" id="mes" name="mes" placeholder="" required> 
                        <label for="mes" class="form-label">Mes</label>
                        <div class="valid-feedback">Ok!</div>
                        <div class="invalid-feedback">Formato MM</div>
                    </div>
                    <div class="form-floating" >
                        <input class="form-control" type="text" id="anio" name="anio" placeholder="" required>
                        <label for="anio" class="form-label">Año</label>
                        <div class="valid-feedback">Ok!</div>
                        <div class="invalid-feedback">Formato AAAA</div>
                    </div>
                    <!-- Mensajes aprobado y error -->

                </div>

            
			</div>

			<!-- Telefono -->
			<div class="col-md-5 form-floating">
				<input id="Telefono:" name="Telefono" width="80" type="text" class="form-control" placeholder="" pattern="^[1-9]\d*-[1-9]\d*$" required>
				<label for="Telefono" class="form-label">Tel&eacute;fono - Formato 299-5443322: </label>

				<!-- Mensajes aprobado y error -->
				<div class="valid-feedback">Ok!</div>
				<div class="invalid-feedback">S&oacute;lo se permiten n&uacute;meros de tel&eacute;fono del formato 111-111111</div>
			</div>

			<!-- Domicilio -->
			<div class="col-md-12 form-floating">
				<input id="Domicilio:" name="Domicilio" width="80" type="text" class="form-control" placeholder="Nombre de la ciudad" pattern="^[A-Za-z0-9\s]*[A-Za-z0-9][A-Za-z0-9\s]*$" required>
				<label for="Domicilio" class="form-label">Domicilio: </label>

				<!-- Mensajes aprobado y error -->
				<div class="valid-feedback">Ok!</div>
				<div class="invalid-feedback">S&oacute;lo se permiten letras o letras y n&uacute;meros separados por un espacio</div>
			</div>

			<!-- Boton Guardar persona nueva -->
			<div class="col-md-4">
				<input id="accion" name ="accion" value="nuevo" type="hidden">
				<button class="btn btn-primary" type="submit">Guardar persona nueva</button>
			</div>
		</form>
	</div>
<br><br>
<!-- Boton atras -->
<div class="col-md-4">
    <button class="btn btn-info" onclick="history.back();">Atr&aacute;s</button>
    <a href="../Ejercicio/persona_index.php" class="btn btn-primary" role="button">Principal</a>
</div>
</div>

<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-6-bootstrap-validation.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>
<script>
  $(document).ready(function(){
    $("#NroDni").blur(function(){
      validarDni($(this));
    });
	$("#fechaNac").blur(function(){
      validarFecha($(this));
    });
  });
</script>