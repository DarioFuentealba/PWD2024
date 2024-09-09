<?php
$titulo = "Ejercicio N 1";
include_once '../../Estructura/header.php';

$objAbmAuto = new AbmAuto();

$listaAuto = $objAbmAuto->buscar(null);

?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Auto</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h3>ABM - Auto</h3>
<a href="auto_nuevo.php">nuevo</a>
<table border="1">
<?php	

 if( count($listaAuto)>0){
    foreach ($listaAuto as $objAuto) { 
        
        echo '<tr><td style="width:500px;">'.$objAuto->getPatente().'</td>';
        echo '<tr><td style="width:500px;">'.$objAuto->getMarca().'</td>';
        echo '<tr><td style="width:500px;">'.$objAuto->getModelo().'</td>';
        echo '<tr><td style="width:500px;">'.$objAuto->getObjDuenio()->getNroDni().'</td>';
        echo '<td><a href="auto_editar.php?id='.$objAuto->getPatente().'">editar</a></td>';
        echo '<td><a href="../Accion/auto_accion.php?accion=borrar&id='.$objAuto->getPatente().'">borrar</a></td></tr>'; 
	}
}

?>
</table>
</body>
</html>