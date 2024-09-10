<?php
$titulo = "TP 4 - Ejercicio 1";
include_once '../../Estructura/header.php';
$objAbmAuto = new AbmAuto();
$datos = data_submitted();
$obj =NULL;
if (isset($datos['Patente'])){
    $listaAuto = $objAbmAuto->buscar($datos);
    if (count($listaAuto)==1){
        $obj= $listaAuto[0];
    }
}
?>	

<h3>Auto</h3>

<?php
if ($obj!=null)
{
?>

<form method="post" action="../Accion/auto_accion.php">

	<label>Patente</label><br/>
	<input id="Patente:" readonly name ="Patente" width="80" type="text" value="<?php echo $obj->getPatente()?>"><br/>

	<label>Marca</label><br/>
	<input id="Marca:" name ="Marca" width="80" type="text" value="<?php echo $obj->getMarca()?>"><br/>

	<label>Modelo</label><br/>
	<input id="Modelo:" name ="Modelo" width="80" type="text" value="<?php echo $obj->getModelo()?>"><br/>

	<label>DniDuenio</label><br/>
	<input id="DniDuenio:" name ="DniDuenio" width="80" type="text" value="<?php echo $obj->getObjDuenio()->getNroDni()?>"><br/>

	<input id="accion" name ="accion" value="editar" type="hidden">
	<input type="submit">
</form>

<?php
}else {
    echo "<p>No se encontro la clave que desea modificar";
}?>
<br><br>

<a href="auto_index.php">Volver</a>
