<?php
    $titulo = "TP 4 - Ejercicio 1";
    include_once '../../Estructura/header.php';
    $objAbmPersona = new AbmPersona();

    $listaPersona = $objAbmPersona->buscar(null);
?>	

<h3>ABM - Persona</h3>

<a href="persona_nuevo.php">nuevo</a>

<table border="1">
    <?php	
        if( count($listaPersona) > 0){
            foreach ($listaPersona as $objPersona) { 
                
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
