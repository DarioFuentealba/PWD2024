<?php
    $titulo = "Personas"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
    echo '<div class="divtitulo"> <h1>';
    echo $titulo.'</h1></div>';
    $datos = data_submitted();
   // Si no llegan datos del data_submited    
   if(!empty($datos))
   {
    
        $resp = false;
        $objTrans = new AbmPersona();

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
                //var_dump($datos);
                if($objTrans->alta($datos))
                {
                    $resp = true;
                }
            }

            if($resp)
            {
                $mensaje = "La accion ".$datos['accion']." se realizo correctamente.";
            }else {
                $mensaje = "La accion ".$datos['accion']." no pudo concretarse.";
            }
        }
    ?>

    <!-- Titulo en la pagina -->
    <h3 class="text-center">Persona</h3>

    <!-- Boton volver -->
    <br><a href="../Ejercicio/persona_index.php" class="btn btn-success" role="button">Volver</a><br>

        if($resp)
        {
            $mensaje = "La accion ".$datos['accion']." se realizo correctamente.";
        }else {
            $mensaje = "La accion ".$datos['accion']." no pudo concretarse.";
        }
    }
?>

<!-- Titulo en la pagina -->
<h3 class="text-center">Persona</h3>

<!-- Boton volver -->
<br><a href="../Ejercicio/persona_index.php" class="btn btn-success" role="button">Volver</a><br>

<!-- Boton atras -->
<div class="col-md-4">
    <<button class="btn btn-info" onclick="history.back();">Atr&aacute;s</button>
</div>

<?php	
echo $mensaje;
// Si no llegan datos del data_submited    
}else{
    echo "Acceso restringido";
}
?>


