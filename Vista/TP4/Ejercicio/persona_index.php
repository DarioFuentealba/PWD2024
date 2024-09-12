<?php
    $titulo = "BD Personas"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
    $objAbmPersona = new AbmPersona();

    $listaPersona = $objAbmPersona->buscar(null);
?>	

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
            }
        }
    ?>
</table>
