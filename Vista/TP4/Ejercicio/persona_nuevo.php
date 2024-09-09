<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Persona</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h3>Persona</h3>

<form method="post" action="../Accion/persona_accion.php">
	<label>Numero Dni</label><br/>
	<input id="NroDni" name ="NroDni" type="text">
	<label>Apellido</label><br/>
	<input id="Apellido" name ="Apellido" type="text">
	<label>Nombre</label><br/>
	<input id="Nombre" name ="Nombre" type="text">
	<label>Fecha Nacimiento</label><br/>
	<input id="fechaNac" name ="fechaNac" type="text">
	<label>Telefono</label><br/>
	<input id="Telefono" name ="Telefono" type="text">
	<label>Domicilio</label><br/>
	<input id="Domicilio" name ="Domicilio" type="text">
	<input id="accion" name ="accion" value="nuevo" type="hidden">
	<input type="submit">
</form>
<br><br>
<a href="persona_index.php">Volver</a>
</body>
</html>