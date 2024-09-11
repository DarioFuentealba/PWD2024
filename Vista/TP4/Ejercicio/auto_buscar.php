<?php
$titulo = "Buscar Auto";
include_once '../../Estructura/header.php';

$objAbmAuto = new AbmAuto();

$listaAuto = $objAbmAuto->buscar(null);
?>	

<h3>ABM - Auto Ej 4a</h3>

<form action="../Accion/auto_accion_buscar.php" method="post" id="formBuscar" name="formBuscar">
    <label for="patente" class="form-label">Patente</label>
    <input type="text" class="form-control" id="Patente" name="Patente" placeholder="AAA 123   ó   AA 456 AA" pattern="[A-z\s]{4}[0-9]{3}||[A-z]{2}[0-9]{3}[A-z]{2}" required>
	<input id="accion" name ="accion" value="buscar" type="hidden"><br>
	<input type="submit" value="Buscar"><br>
</form>
<div></div>
<table border="1">
    <tr>
        <th style="width:500px;">Patente</th>
        <th style="width:500px;">Marca</th>
        <th style="width:500px;">Modelo</th>
        <th style="width:500px;">Dueño</th>
    </tr>
    <?php	

    if( count($listaAuto)>0){
        foreach ($listaAuto as $objAuto) { 
           
            
            echo '<tr><td style="width:500px;">'.$objAuto->getPatente().'</td>';
            echo '<td style="width:500px;">'.$objAuto->getMarca().'</td>';
            echo '<td style="width:500px;">'.$objAuto->getModelo().'</td>';
            echo '<td style="width:500px;">'.$objAuto->getObjDuenio()->getNroDni().'</td>';
            echo '<td><a href="auto_editar.php?Patente='.$objAuto->getPatente().'">editar</a></td>';
            echo '<td><a href="../Accion/auto_accion.php?accion=borrar&Patente='.$objAuto->getPatente().'">borrar</a></td></tr>'; 
        }
    }
    ?>
</table>