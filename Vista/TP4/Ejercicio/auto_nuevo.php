<?php
$titulo = "Ejercicio N 1";
include_once '../../Estructura/header.php';
?>

<h3>Auto</h3>

<form method="post" action="../Accion/auto_accion_nuevo.php">

	<label>Patente</label><br>
	<input type="text" id="Patente" name="Patente" placeholder="AAA 123 ó AA 456 AA" pattern="[A-z\s]{4}[0-9]{3}||[A-z]{2}[0-9]{3}[A-z]{2}" required><br/>

	<label>Marca</label><br>
	<input id="Marca" name ="Marca" type="text" pattern="[A-z]{2,14}" required><br/>

	<label>Modelo</label><br>
	<input id="Modelo" name ="Modelo" type="text" placeholder="96 ó 2010" pattern="[0-9]{2}||[0-9]{4}" required><br/>

	<label>Dni del Dueño</label><br>
	<input id="DniDuenio" name ="DniDuenio" type="text" placeholder="40222666" pattern="[0-9]{6,8}" required><br/>

	
	<input type="submit">
</form>
<br><br>

<a href="auto_index.php">Volver</a>
