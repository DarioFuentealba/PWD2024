<?php
$titulo = "Ejercicio N 1";
include_once '../../Estructura/header.php';
$objAbmPersona = new AbmPersona();

$listaPersona = $objAbmPersona->buscar(null);

?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Persona</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h3>ABM - Persona</h3>
<a href="persona_nuevo.php">nuevo</a>
<table border="1">
<?php	

 if( count($listaPersona)>0){
    foreach ($listaPersona as $objPersona) { 
        
        echo '<tr><td style="width:500px;">'.$objPersona->getNroDni().'</td>';
        echo '<tr><td style="width:500px;">'.$objPersona->getApellido().'</td>';
        echo '<tr><td style="width:500px;">'.$objPersona->getNombre().'</td>';
        echo '<tr><td style="width:500px;">'.$objPersona->getFechaNac().'</td>';
        echo '<tr><td style="width:500px;">'.$objPersona->getTelefono().'</td>';
        echo '<tr><td style="width:500px;">'.$objPersona->getDomicilio().'</td>';
        echo '<td><a href="persona_editar.php?id='.$objPersona->getNroDni().'">editar</a></td>';
        echo '<td><a href="../Accion/persona_accion.php?accion=borrar&id='.$objPersona->getNroDni().'">borrar</a></td></tr>'; 
	}
}

?>
</table>
</body>
</html>