<?php
    $titulo = "BD Autos"; //Titulo en la pestania
    include_once '../../Estructura/header.php';

    $objAbmAuto = new AbmAuto();

    $listaAuto = $objAbmAuto->buscar(null);
?>	

<!-- Titulo en la pagina -->
<h3>Base de datos de autos</h3>

<a href="auto_nuevo.php">nuevo</a><br><br>

<!-- Tabla -->
<table border="1">
    <tr>
        <th style="width:500px;">Patente</th>
        <th style="width:500px;">Marca</th>
        <th style="width:500px;">Modelo</th>
        <th style="width:500px;">Dueño</th>
    </tr>

    <?php	
        //var_dump($listaAuto);
        if( count($listaAuto) > 0)
        {
            foreach ($listaAuto as $objAuto)
            {
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
