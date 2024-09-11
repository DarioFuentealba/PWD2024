<?php
    $titulo = "TP 4 - Ej 3 Lista Personas";
    include_once '../../Estructura/header.php';
    $objAbmPersona = new AbmPersona();

    $listaPersona = $objAbmPersona->buscar(null);
?>	

<h3>Lista - Persona Ej 3b</h3>

<table border="1">
    <tr>
        <th style="width:200px;">Apellido</th>
        <th style="width:200px;">Nombre</th>
        <th style="width:200px;">Autos</th>
    </tr>
    <?php	
        if( count($listaPersona) > 0){
            foreach ($listaPersona as $objPersona) { 

                echo '<tr><td style="width:200px;">'.$objPersona->getApellido().'</td>';
                echo '<td style="width:200px;">'.$objPersona->getNombre().'</td>';
                echo '<td><a href="autos_persona.php?NroDni='.$objPersona->getNroDni().'">Ver Autos</a></td></tr>';
            }
        }
    ?>
</table>
