<?php
    $titulo = "BD Personas"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
    $objAbmPersona = new AbmPersona();

    $listaPersona = $objAbmPersona->buscar(null);
?>	

<<<<<<< Updated upstream
<!-- Titulo en la pagina -->
<h3 class="text-center">Base de datos de personas</h3>

<!-- Boton agregar nueva persona -->
<a href="persona_nuevo.php">nuevo</a>

<!-- Tabla -->
<table border="1">
    <tr>
        <th style="width:500px;">Dni</th>
        <th style="width:500px;">Apellido</th>
        <th style="width:500px;">Nombre</th>
        <th style="width:500px;">Fecha Nacimiento</th>
        <th style="width:500px;">Teléfono</th>
        <th style="width:500px;">Domicilio</th>
    </tr>

    <?php	
        if( count($listaPersona) > 0)
        {
            foreach ($listaPersona as $objPersona)
            {
                echo '<tr><td style="width:500px;">'.$objPersona->getNroDni().'</td>';
                echo '<td style="width:500px;">'.$objPersona->getApellido().'</td>';
                echo '<td style="width:500px;">'.$objPersona->getNombre().'</td>';
                echo '<td style="width:500px;">'.$objPersona->getFechaNac().'</td>';
                echo '<td style="width:500px;">'.$objPersona->getTelefono().'</td>';
                echo '<td style="width:500px;">'.$objPersona->getDomicilio().'</td>';
                echo '<td><a href="persona_editar.php?NroDni='.$objPersona->getNroDni().'">editar</a></td>';
                echo '<td><a href="../Accion/persona_accion.php?accion=borrar&NroDni='.$objPersona->getNroDni().'">borrar</a></td></tr>'; 
=======
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
                echo '<td><a href="persona_editar.php?NroDni='.$objPersona->getNroDni().'" class="btn btn-outline-info btn-sm" role="button">editar</a></td>';
                echo '<td><a href="../Accion/persona_accion.php?accion=borrar&NroDni='.$objPersona->getNroDni().'" class="btn btn-outline-danger btn-sm" role="button">borrar</a></td></tr>'; 
>>>>>>> Stashed changes
            }
        }
    ?>
    </tbody>
</table>
</div>
<div class="container mt-3">
    <a href="persona_nuevo.php" class="btn btn-success" role="button">nuevo</a>
</div>