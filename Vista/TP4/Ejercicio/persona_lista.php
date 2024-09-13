<?php
    $titulo = "Lista Personas"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
    $objAbmPersona = new AbmPersona();

    $listaPersona = $objAbmPersona->buscar(null);
?>	

<!-- Titulo en la pagina -->
<h3 class="text-center">Lista de personas</h3>

<!-- Tabla -->
<table border="1" class="container mt-3 table table-hover table-striped">
    <tr>
        <th style="width:200px;">Apellido</th>
        <th style="width:200px;">Nombre</th>
        <th style="width:200px;">Autos</th>
    </tr>

    <?php	
        if(count($listaPersona) > 0)
        {
            foreach ($listaPersona as $objPersona)
            {
                echo '<tr><td style="width:200px;">'.$objPersona->getApellido().'</td>';
                echo '<td style="width:200px;">'.$objPersona->getNombre().'</td>';
                echo '<td><a href="autos_persona.php?NroDni='.$objPersona->getNroDni().'"class="btn btn-color btn-sm" role="button">Ver Autos</a></td></tr>';
            }
        }
    ?>
</table>

<!-- Boton atras -->
<div class="col-md-4">
	<button class="btn btn-info m-3" type="submit" >Atr&aacute;s</button>
</div>

<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/tp2ej2-6-bootstrap-validation.js"></script>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>