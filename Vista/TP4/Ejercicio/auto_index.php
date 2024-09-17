<?php
    $titulo = "BD Autos"; //Titulo en la pestania
    include_once '../../Estructura/header.php';

    $objAbmAuto = new AbmAuto();
    $listaAuto = $objAbmAuto->buscar(null);

    // Si no llegan datos del data_submited    
    $datos = data_submitted();
    if(!empty($datos))
    {
      if($datos['Patente'] == 'null'){$datos['Patente'] = "";}
      $listaAuto= $objAbmAuto->buscarPorPatente($datos['Patente']);  //../Accion/persona_accion_buscar.php
    }

?>	

<!-- Cuadro sombreado que rodea todo -->
<div class="container mt-3 mt-5 p-4 border rounded shadow">

  <!-- Titulo en la pagina -->
  <h2 class="text-center text-primary mb-4">Listado de autos</h2>

  <p class="text-center text-primary mb-4">Listado de los autos incluidos en la base de datos</p>

  <div class="mb-2">
    <form action="auto_index.php" method="post" class="container mt-5 p-4 border rounded shadow">
        <label for="buscar" class="form-label text-primary fw-bold">Buscar por Patente:</label>
        <input name="Patente" id="Patente" type="text" pattern="[A-z0-9]" >
        <input type="submit" name="buscar" id="buscar" class="btn btn-info btn-sm" role="button" value="Buscar">
        <div class="text-success">Buscar en vacio para refrescar</div>
    </form>
  </div> 

  <table class="table table-hover table-striped text-primary ">
    <thead>
      <tr class="text-primary mb-4">
        <th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>DNI Propietario</th>
        <th class="text-center">Editar</th>
        <th class="text-center">Eliminar</th>
        <th class="text-center">Cambio de due&ntilde;o</th>
      </tr>
    </thead>

    <tbody>
      <?php	
        if(count($listaAuto) > 0)
        {
            foreach ($listaAuto as $objAuto)
            { 
                echo '<tr><td class="uppercase">'.$objAuto->getPatente().'</td>';
                echo '<td>'.$objAuto->getMarca().'</td>';
                echo '<td>'.$objAuto->getModelo().'</td>';
                echo '<td>'.$objAuto->getObjDuenio()->getNroDni().'</td>';
                echo '<td class="text-center"><a href="auto_editar.php?Patente='.$objAuto->getPatente().'" class="btn btn-color btn-sm" role="button">Editar</a></td>';
                echo '<td class="text-center"><a href="../Accion/auto_accion.php?accion=borrar&Patente='.$objAuto->getPatente().'" class="btn btn-outline-danger btn-sm" role="button">Borrar</a></td>'; 
                echo '<td class="text-center"><a href="auto_cambio_duenio.php?Patente='.$objAuto->getPatente().'" class="btn btn-outline-success btn-sm" role="button">Cambio</a></td>'; 
              }
        }
      ?>
    </tbody>
  </table>

  <!-- Boton Agregar nuevo auto -->
  <div class="container mt-3">
    <a href="auto_nuevo.php" class="btn btn-primary" role="button">Agregar nuevo auto</a>
  </div>
</div>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>
