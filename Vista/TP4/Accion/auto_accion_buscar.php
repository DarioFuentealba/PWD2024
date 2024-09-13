<?php
    $titulo = "Autos Buscar"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
    echo '<div class="divtitulo"> <h1>';
    echo $titulo.'</h1></div>';
    $datos = data_submitted();
    //verEstructura($datos);


    if(!empty($datos))
    {
        $resp = false;
        $arregloAuto = Array();
        $objAbmAuto = new AbmAuto();
        $listaAutos = $objAbmAuto->buscar($datos);
        if(!empty($listaAutos)){
            $objAuto = $listaAutos[0];
?>
            <!-- Titulo en la pagina -->
        <div class="container mt-3">
            <h2>Datos del Auto</h2>
            <p>Detalle de los datos incluidos en la base de datos</p>            
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>DNI Propietario</th>
                    </tr>
                </thead>
            <tbody>
    <?php
        echo '<tr><td>'.$listaAutos[0]->getPatente().'</td>';
        echo '<td>'.$objAuto->getMarca().'</td>';
        echo '<td>'.$objAuto->getModelo().'</td>';
        echo '<td>'.$objAuto->getObjDuenio()->getNroDni().'</td>';
        }else{
            echo '<div class="col-md-4"> <h1>No se encontraron los datos del auto</h1></div>';
        }
    ?>
    </tbody>
    </table>
    <div class="col-md-4">  
        <!-- Boton atras -->
        <button class="btn btn-info" onclick="history.back();">Atr&aacute;s</button>
    </div>
</div>
    <?php
    // Si no llegan datos del data_submited    
    }else{
        echo "Acceso restringido";
    }
?>