<?php
    $titulo = "BD Personas"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
    $objAbmPersona = new AbmPersona();

    $listaPersona = $objAbmPersona->buscar(null);
?>	

<div class="container mt-3">
  <h2>ABM Personas</h2>
  <p>Listado de personas incluidas en la base de datos</p>      
  <div>
    <form action="../Accion/persona_accion_buscar.php" method="post">
        <label for="buscar">Buscar Por DNI:</label>
        <input name="NroDni" id="NroDni" type="text" pattern="[0-9]{6,8}" required onchange="buscador()"/>
        <input type="submit" name="buscar" id="buscar" class="btn btn-info" role="button" value="Buscar">
	</form>
  </div>      
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>D.N.I.</th>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>Fecha Nacimiento</th>
        <th>Teléfono</th>
        <th>Domicilio</th>
        <th colspan="2">Menu</th>
      </tr>
    </thead>
    <tbody>
    <?php	
        if( count($listaPersona) > 0){
            foreach ($listaPersona as $objPersona) { 
                
                echo '<tr><td>'.$objPersona->getNroDni().'</td>';
                echo '<td>'.$objPersona->getApellido().'</td>';
                echo '<td>'.$objPersona->getNombre().'</td>';
                echo '<td>'.$objPersona->getFechaNac().'</td>';
                echo '<td>'.$objPersona->getTelefono().'</td>';
                echo '<td>'.$objPersona->getDomicilio().'</td>';
                echo '<td><a href="persona_editar.php?NroDni='.$objPersona->getNroDni().'" class="btn btn-color btn-sm" role="button">editar</a></td>';
                echo '<td><a href="../Accion/persona_accion.php?accion=borrar&NroDni='.$objPersona->getNroDni().'" class="btn btn-outline-danger btn-sm" role="button">borrar</a></td></tr>'; 
            }
        }
    ?>
    </tbody>
</table>
</div>

<div class="container mt-3">
    <a href="persona_nuevo.php" class="btn btn-success" role="button">nuevo</a>
</div>