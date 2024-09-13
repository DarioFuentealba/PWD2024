<?php
$titulo = "Cambio de dueño";
include_once '../../Estructura/header.php';
?>

<h3 class="text-center text-primary mb-4">Auto - Cambio de due&ntilde;o</h3>

<form method="post" action="../Accion/auto_accion_cambio.php" class="container mt-5 p-4 border rounded shadow">

	<label>Patente</label><br>
	<input type="text" class="form-control" id="Patente" name="Patente" placeholder="AAA 123 ó AA 456 AA" pattern="[A-z\s]{4}[0-9]{3}||[A-z]{2}[0-9]{3}[A-z]{2}" required><br/>

	<label>Dni del Nuevo Due&ntilde;o</label><br>
	<input id="NroDni" class="form-control" name ="NroDni" type="text" placeholder="40222666" pattern="[0-9]{6,8}" required><br/>

	
	<input type="submit" class="btn btn-primary">
</form>
<br><br>

<a href="auto_index.php" class="btn btn-info">Volver</a>

<!-- JQUERY con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/validaciontp4.js"></script>