<?php
    $titulo = "Buscar Auto"; //Titulo en la pestania
    include_once '../../Estructura/header.php';

    $objAbmAuto = new AbmAuto();

    $listaAuto = $objAbmAuto->buscar(null);
?>	

<!-- Titulo en la pagina -->
<h3 class="text-center">Buscar un auto</h3>

<!-- Contenedor de formulario -->
<div class="container">
    <div class="row">

        <!-- Formulario -->
        <form action="../Accion/auto_accion_buscar.php" method="post" id="formAutoBuscar" name="formAutoBuscar" class="row g-3 mt-3 needs-validation" novalidate>

            <!-- Patente a buscar -->
            <div class="mb-3 form-floating">
                <input type="text" class="form-control" id="Patente" name="Patente" placeholder="AAA 123   ó   AA 456 AA" pattern="[A-z\s]{4}[0-9]{3}||[A-z]{2}[0-9]{3}[A-z]{2}" required>
                <label for="patente" class="form-label">Ingrese la patente a buscar - Formato permitidos AAA 123   ó   AA 456 AA</label>

                <!-- Mensajes aprobado y error -->
                <div class="valid-feedback">Ok!</div>
                <div class="invalid-feedback">S&oacute;lo se permiten patentes con el formato especificado</div>
            </div>

            <!-- Boton enviar -->
            <div class="col-md-4">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </form>
    </div>
</div>

<!-- Tabla -->
<table border="1">
    <tr>
        <th style="width:500px;">Patente</th>
        <th style="width:500px;">Marca</th>
        <th style="width:500px;">Modelo</th>
        <th style="width:500px;">Dueño</th>
    </tr>

    <?php	
        if( count($listaAuto) > 0)
        {
            foreach ($listaAuto as $objAuto)
            { 
                echo '<tr><td style="width:500px;">'.$objAuto->getPatente().'</td>';
                echo '<td style="width:500px;">'.$objAuto->getMarca().'</td>';
                echo '<td style="width:500px;">'.$objAuto->getModelo().'</td>';
                echo '<td style="width:500px;">'.$objAuto->getObjDuenio()->getNroDni().'</td>';
                echo '<td><a href="auto_editar.php?Patente='.$objAuto->getPatente().'">editar</a></td>';
                echo '<td><a href="../Accion/auto_accion.php?accion=borrar&Patente='.$objAuto->getPatente().'">borrar</a></td></tr>'; 
            }
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