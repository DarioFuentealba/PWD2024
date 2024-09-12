<?php
    $titulo = "Autos"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
    echo '<div class="divtitulo"> <h1>';
    echo $titulo.'</h1></div>';
    $datos = data_submitted();
    //verEstructura($datos);

    $resp = false;
    $objTrans = new AbmAuto();

    if (isset($datos['accion']))
    {
        if($datos['accion'] == 'editar')
        {
            if($objTrans->modificacion($datos))
            {
                $resp = true;
            }
        }

        if($datos['accion'] == 'borrar')
        {
            if($objTrans->baja($datos))
            {
                $resp = true;
            }
        }

        if($datos['accion'] == 'nuevo')
        {
            if($objTrans->alta($datos))
            {
                $resp = true;
            }
        }


        if($resp)
        {
            $mensaje = "La accion ".$datos['accion']." se realizo correctamente.";
        }else{
            $mensaje = "La accion ".$datos['accion']." no pudo concretarse.";
        }
    }
<<<<<<< Updated upstream
=======

    if($datos['accion'] == 'borrar'){
        if($objTrans->baja($datos)){
            $resp =true;
        }
    }
/*
    if($datos['accion'] == 'nuevo'){
        if($objTrans->alta($datos)){
            $resp =true;
        }
    }*/


    if($resp){
        $mensaje = "La accion ".$datos['accion']." se realizo correctamente.";
    }else {
        $mensaje = "La accion ".$datos['accion']." no pudo concretarse.";
    }
}
>>>>>>> Stashed changes
?>

<!-- Titulo en la pagina -->
<h3 class="text-center">Auto</h3>

<<<<<<< Updated upstream
<!-- Boton volver -->
<br><a href="../Ejercicio/auto_index.php">Volver</a><br>
=======
<br><a href="../Ejercicio/auto_index.php" class="btn btn-success" role="button">Volver</a><br>
>>>>>>> Stashed changes

<?php	
echo $mensaje;
?>

