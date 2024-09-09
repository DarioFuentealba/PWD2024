<?php
$titulo = "Ejercicio N 1";
include_once '../../Estructura/header.php';

$objAbmAuto = new AbmAuto();

$listaAuto = $objAbmAuto->buscar(null);

?>	
<h3>ABM - Auto</h3>
<a href="auto_nuevo.php">nuevo</a>
<table border="1">
<?php	

 if( count($listaAuto)>0){
    foreach ($listaAuto as $objAuto) { 
        
        echo '<tr><td style="width:500px;">'.$objAuto->getPatente().'</td>';
        echo '<td style="width:500px;">'.$objAuto->getMarca().'</td>';
        echo '<td style="width:500px;">'.$objAuto->getModelo().'</td>';
        echo '<td style="width:500px;">'.$objAuto->getObjDuenio()->getNroDni().'</td>';
        echo '<td><a href="auto_editar.php?id='.$objAuto->getPatente().'">editar</a></td>';
        echo '<td><a href="../Accion/auto_accion.php?accion=borrar&id='.$objAuto->getPatente().'">borrar</a></td></tr>'; 
	}
}

?>
</table>
