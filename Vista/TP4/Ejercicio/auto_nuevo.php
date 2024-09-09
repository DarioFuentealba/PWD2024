<?php
$titulo = "Ejercicio N 1";
include_once '../../Estructura/header.php';
?>

<h3>Auto</h3>

<form method="post" action="../Accion/auto_accion.php">

	<label>Patente</label>
	<input id="Patente" name ="Patente" type="text"><br/>

	<label>Marca</label>
	<input id="Marca" name ="Marca" type="text"><br/>

	<label>Modelo</label>
	<input id="Modelo" name ="Modelo" type="text"><br/>

	<label>Dni del Dueño</label>
	<input id="DniDuenio" name ="DniDuenio" type="text"><br/>

	<input id="accion" name ="accion" value="nuevo" type="hidden">
	<input type="submit">
</form>
<br><br>

<a href="auto_index.php">Volver</a>
