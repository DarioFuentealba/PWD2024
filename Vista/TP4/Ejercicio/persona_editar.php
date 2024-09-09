<?php
	$titulo = "Persona";
	include_once '../../Estructura/header.php';
	$objAbmPersona = new AbmPersona();
	$datos = data_submitted();
	$obj = NULL;
	if (isset($datos['NroDni'])){
		$listaPersona = $objAbmPersona->buscar($datos);
		if (count($listaPersona) == 1){
			$obj = $listaPersona[0];
		}
	}
?>	

<h3>Persona</h3>

<?php
if ($obj != null)
{
?>

	<!-- Formulario -->
	<form method="post" action="../Accion/persona_accion.php">

		<label>Numero Dni: </label><br/>
		<input id="NroDni:" readonly name="NroDni" width="80" type="text" value="<?php echo $obj->getNroDni()?>"><br/>

		<label>Apellido: </label><br/>
		<input id="Apellido:" name="Apellido" width="80" type="text" value="<?php echo $obj->getApellido()?>"><br/>

		<label>Nombre: </label><br/>
		<input id="Nombre:" name="Nombre" width="80" type="text" value="<?php echo $obj->getNombre()?>"><br/>

		<label>Fecha Nacimiento: </label><br/>
		<input id="fechaNac:" name="fechaNac" width="80" type="text" value="<?php echo $obj->getFechaNac()?>"><br/>

		<label>Tel&eacute;fono: </label><br/>
		<input id="Telefono:" name="Telefono" width="80" type="text" value="<?php echo $obj->getTelefono()?>"><br/>

		<label>Domicilio: </label><br/>
		<input id="Domicilio:" name="Domicilio" width="80" type="text" value="<?php echo $obj->getDomicilio()?>"><br/>

		<input id="accion" name ="accion" value="editar" type="hidden">
		<input type="submit">
	</form>

<?php
}else {
	echo "<p>No se encontro la clave que desea modificar";
}
?>
<br><br>

<a href="persona_index.php">Volver</a>
