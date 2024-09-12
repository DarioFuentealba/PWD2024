<?php
$titulo = "Cambio de dueño";
include_once '../../Estructura/header.php';
?>

<h3>Auto - Cambio de dueño</h3>

<form method="post" action="../Accion/auto_accion_cambio.php">

	<label>Patente</label><br>
	<input type="text" id="Patente" name="Patente" placeholder="AAA 123 ó AA 456 AA" pattern="[A-z\s]{4}[0-9]{3}||[A-z]{2}[0-9]{3}[A-z]{2}" required><br/>

	<label>Dni del Nuevo Dueño</label><br>
	<input id="NroDni" name ="NroDni" type="text" placeholder="40222666" pattern="[0-9]{6,8}" required><br/>

	
	<input type="submit" class="btn btn-success" role="button">
</form>
<br><br>

<a href="auto_index.php" class="btn btn-success" role="button">Volver</a>

<!-- JQUERY con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/validaciontp4.js"></script>