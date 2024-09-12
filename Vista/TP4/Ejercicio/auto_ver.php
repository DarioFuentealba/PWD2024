<?php
    $titulo = "Ver Autos"; //Titulo en la pestania
    include_once '../../Estructura/header.php';

    $objAbmAuto = new AbmAuto();

    $listaAuto = $objAbmAuto->buscar(null);
?>	

<!-- Titulo en la pagina -->
<h3 class="text-center">Ver Autos</h3>

<!-- Tabla -->
<table border="1">
    <tr>
        <th style="width:500px;">Patente</th>
        <th style="width:500px;">Marca</th>
        <th style="width:500px;">Modelo</th>
        <th colspan="2" style="width:500px;">Dueño</th>
    </tr>

    <?php	
        if(!empty($listaAuto))
        {
            if( count($listaAuto) > 0)
            {
                foreach ($listaAuto as $objAuto)
                {    
                    echo '<tr><td style="width:500px;">'.$objAuto->getPatente().'</td>';
                    echo '<td style="width:500px;">'.$objAuto->getMarca().'</td>';
                    echo '<td style="width:500px;">'.$objAuto->getModelo().'</td>';
                    echo '<td style="width:500px;">'.$objAuto->getObjDuenio()->getNombre().'</td>';
                    echo '<td style="width:500px;">'.$objAuto->getObjDuenio()->getApellido().'</td>';
                    echo '<td><a href="auto_editar.php?Patente='.$objAuto->getPatente().'">editar</a></td>';
                    echo '<td><a href="../Accion/auto_accion.php?accion=borrar&Patente='.$objAuto->getPatente().'">borrar</a></td></tr>'; 
                }
            }
        }else{
            echo "<h2>No hay datos en la base de datos</h2>";
        }
    ?>
</table>

<!-- Boton atras -->
<div class="col-md-4">
	<button class="btn btn-info" type="submit">Atr&aacute;s</button>
</div>

<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-6-bootstrap-validation.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>