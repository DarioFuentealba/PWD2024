<?php
	$titulo = "Autos x Persona";
	include_once '../../Estructura/header.php';
	$objAbmPersona = new AbmPersona();
    $objAbmAuto = new AbmAuto();
	$datos = data_submitted();
	$obj = NULL;
	if (isset($datos['NroDni'])){
		$listaPersona = $objAbmPersona->buscar($datos);
        $enviar['DniDuenio'] = $datos['NroDni'];
        $listaAutos = $objAbmAuto->buscar($enviar);
		if (count($listaPersona) == 1){
			$obj = $listaPersona[0];
		}
	}
?>	

<h3>Autos x Persona Ej 3b</h3>
<table border="1">
<tr>
        <th style="width:200px;">Dni</th>
        <th style="width:200px;">Apellido</th>
        <th style="width:200px;">Nombre</th>
        <th style="width:200px;">Fecha Nacimiento</th>
        <th style="width:200px;">Teléfono</th>
        <th style="width:200px;">Domicilio</th>
    </tr>
<?php
if ($obj != null)
{

                echo '<tr><td style="width:200px;">'.$obj->getNroDni().'</td>';
                echo '<td style="width:200px;">'.$obj->getApellido().'</td>';
                echo '<td style="width:200px;">'.$obj->getNombre().'</td>';
                echo '<td style="width:200px;">'.$obj->getFechaNac().'</td>';
                echo '<td style="width:200px;">'.$obj->getTelefono().'</td>';
                echo '<td style="width:200px;">'.$obj->getDomicilio().'</td></tr>';


}else {
	echo "<p>No se encontro la clave que desea modificar";
}
?>
</table>
<br><br>
<table border="1">
    <tr>
        <th style="width:200px;">Patente</th>
        <th style="width:200px;">Marca</th>
        <th style="width:200px;">Modelo</th>
    </tr>
    <?php	
    //var_dump($listaAuto);
    if( count($listaAutos)>0){
        foreach ($listaAutos as $objAuto) { 
           
            echo '<tr><td style="width:200px;">'.$objAuto->getPatente().'</td>';
            echo '<td style="width:200px;">'.$objAuto->getMarca().'</td>';
            echo '<td style="width:200px;">'.$objAuto->getModelo().'</td></tr>'; 
        }
    }
    ?>
</table>




<a href="persona_index.php">Volver</a>
