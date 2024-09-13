<?php
    $titulo = "Ver Autos"; //Titulo en la pestania
    include_once '../../Estructura/header.php';

    $objAbmAuto = new AbmAuto();

    $listaAuto = $objAbmAuto->buscar(null);
?>	

<!-- Titulo en la pagina -->
<div class="container mt-3">
    <h2>Autos</h2>
    <p>Listado de los autos incluidos en la base de datos</p>

    <!-- Tabla -->
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th colspan="2">Nombre Propietario</th>
                <th colspan="2">Menu</th>
            </tr>
        </thead>

        <tbody>
            <?php	
                if(!empty($listaAuto))
                {
                    if( count($listaAuto) > 0)
                    {
                        foreach ($listaAuto as $objAuto)
                        {    
                            echo '<tr><td>'.$objAuto->getPatente().'</td>';
                            echo '<td>'.$objAuto->getMarca().'</td>';
                            echo '<td>'.$objAuto->getModelo().'</td>';
                            echo '<td>'.$objAuto->getObjDuenio()->getNombre().'</td>';
                            echo '<td>'.$objAuto->getObjDuenio()->getApellido().'</td>';
                            echo '<td><a href="auto_editar.php?Patente='.$objAuto->getPatente().'"class="btn btn-color btn-sm" role="button">editar</a></td>';
                            echo '<td><a href="../Accion/auto_accion.php?accion=borrar&Patente='.$objAuto->getPatente().'"class="btn btn-outline-danger btn-sm" role="button">borrar</a></td></tr>'; 
                        }
                    }
                }else{
                    echo "<h2>No hay datos en la base de datos</h2>";
                }
            ?>
        </tbody>
    </table>
</div>

<!-- Boton atras -->
<div class="col-md-4">
	<button class="btn btn-info" type="submit">Atr&aacute;s</button>
</div>

<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-6-bootstrap-validation.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>