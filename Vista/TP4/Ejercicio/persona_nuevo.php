<?php
$titulo = "Persona";
include_once '../../Estructura/header.php';
?>

<h3>Persona</h3>

<!-- Formulario -->
<form method="post" action="../Accion/persona_accion.php">

	<label>Numero Dni</label><br/>
	<input id="NroDni" name ="NroDni" type="text"><br>

	<label>Apellido</label><br/>
	<input id="Apellido" name ="Apellido" type="text"><br>

	<label>Nombre</label><br/>
	<input id="Nombre" name ="Nombre" type="text"><br>

	<label>Fecha Nacimiento</label><br/>
	<input id="fechaNac" name ="fechaNac" type="text"><br>

	<label>Tel&eacute;fono</label><br/>
	<input id="Telefono" name ="Telefono" type="text"><br>

	<label>Domicilio</label><br/>
	<input id="Domicilio" name ="Domicilio" type="text"><br>

	<input id="accion" name ="accion" value="nuevo" type="hidden">
	<input type="submit">
</form>
<br><br>
<br><a href="../Ejercicio/auto_index.php" class="btn btn-success" role="button">Volver</a><br>
<button onclick="history.back();">Atras</button>
