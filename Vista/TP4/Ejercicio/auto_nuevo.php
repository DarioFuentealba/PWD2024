<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Auto</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h3>Auto</h3>

<form method="post" action="../Accion/auto_accion.php">
	<label>Patente</label><br/>
	<input id="Patente" name ="Patente" type="text">
	<label>Marca</label><br/>
	<input id="Marca" name ="Marca" type="text">
	<label>Modelo</label><br/>
	<input id="Modelo" name ="Modelo" type="text">
	<label>Dni del Dueño</label><br/>
	<input id="DniDuenio" name ="DniDuenio" type="text">
	<input id="accion" name ="accion" value="nuevo" type="hidden">
	<input type="submit">
</form>
<br><br>
<a href="auto_index.php">Volver</a>
</body>
</html>