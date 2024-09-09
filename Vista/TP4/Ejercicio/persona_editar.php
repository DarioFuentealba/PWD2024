<?php
$titulo = "Ejercicio N 1";
include_once '../../Estructura/header.php';
$objAbmPersona = new AbmPersona();
$datos = data_submitted();
$obj =NULL;
if (isset($datos['id'])){
    $listaPersona = $objAbmPersona->buscar($datos);
    if (count($listaPersona)==1){
        $obj= $listaPersona[0];
    }
}

?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Persona</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h3>Persona</h3>
<?php if ($obj!=null){?>
<form method="post" action="../Accion/persona_accion.php">
	<label>Numero Dni</label><br/>
	<input id="NroDni:" readonly name ="NroDni" width="80" type="text" value="<?php echo $obj->getNroDni()?>"><br/>
	<label>Apellido</label><br/>
	<input id="Apellido:" readonly name ="Apellido" width="80" type="text" value="<?php echo $obj->getApellido()?>"><br/>
	<label>Nombre</label><br/>
	<input id="Nombre:" readonly name ="Nombre" width="80" type="text" value="<?php echo $obj->getNombre()?>"><br/>
	<label>Fecha Nacimiento</label><br/>
	<input id="fechaNac:" readonly name ="fechaNac" width="80" type="text" value="<?php echo $obj->getFechaNac()?>"><br/>
	<label>Telefono</label><br/>
	<input id="Telefono:" readonly name ="Telefono" width="80" type="text" value="<?php echo $obj->getTelefono()?>"><br/>
	<label>Domicilio</label><br/>
	<input id="Domicilio:" readonly name ="Domicilio" width="80" type="text" value="<?php echo $obj->getDomicilio()?>"><br/>
	<input id="accion" name ="accion" value="editar" type="hidden">
	<input type="submit">
</form>
<?php }else {
    
    echo "<p>No se encontro la clave que desea modificar";
}?>
<br><br>
<a href="persona_index.php">Volver</a>
</body>
</html>