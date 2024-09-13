<?php
    $titulo = "BD Autos"; //Titulo en la pestania
    include_once '../../Estructura/header.php';

    $objAbmAuto = new AbmAuto();

    $listaAuto = $objAbmAuto->buscar(null);
?>	

<div class="container mt-3">
  <h2>ABM Autos</h2>
  <p>Listado de los autos incluidos en la base de datos</p>            
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>DNI Propietario</th>
        <th colspan="2">Menu</th>
      </tr>
    </thead>
    <tbody>
    <?php	
  
    if( count($listaAuto)>0){
        foreach ($listaAuto as $objAuto) { 
            
            echo '<tr><td>'.$objAuto->getPatente().'</td>';
            echo '<td>'.$objAuto->getMarca().'</td>';
            echo '<td>'.$objAuto->getModelo().'</td>';
            echo '<td>'.$objAuto->getObjDuenio()->getNroDni().'</td>';
            echo '<td><a href="auto_editar.php?Patente='.$objAuto->getPatente().'" class="btn btn-color btn-sm" role="button">editar</a></td>';
            echo '<td><a href="../Accion/auto_accion.php?accion=borrar&Patente='.$objAuto->getPatente().'" class="btn btn-outline-danger btn-sm" role="button">borrar</a></td></tr>'; 
        }
    }
    ?>
    </tbody>
</table>
</div>

<div class="container mt-3"><a href="auto_nuevo.php" class="btn btn-success" role="button">Nuevo</a></div>
