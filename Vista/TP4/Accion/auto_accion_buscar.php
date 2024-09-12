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
        if($arregloAuto = $objAbmAuto->buscar($datos))
        {
            //var_dump($arregloAuto);
            $objAuto = $arregloAuto[0];
?>

            <!-- Titulo en la pagina -->
            <h3 class="text-center">ABM - Auto</h3>

            <!-- Tabla -->
            <table border="1">
                <tr>
                    <th style="width:500px;">Patente</th>
                    <th style="width:500px;">Marca</th>
                    <th style="width:500px;">Modelo</th>
                    <th style="width:500px;">Dueño</th>
                </tr>

<?php
                echo '<tr><td style="width:500px;">'.$objAuto->getPatente().'</td>';
                echo '<td style="width:500px;">'.$objAuto->getMarca().'</td>';
                echo '<td style="width:500px;">'.$objAuto->getModelo().'</td>';
                echo '<td style="width:500px;">'.$objAuto->getObjDuenio()->getNroDni().'</td>';

        }else{
            $mensaje = "No se encontraron los datos";
        }

    // Si no llegan datos del data_submited    
    }else{
        echo "Acceso restringido";
    }
?>