<?php
    $titulo = "Personas - Edición o barrado"; //Titulo en la pestania
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
                    $mensaje = "La accion ".$datos['accion']." se realizo correctamente.";
                    //$resp = true;
                }
            }

            if($datos['accion'] == 'borrar')
            {
                if(!$objTrans->verificarAuto($datos)){
                    if($objTrans->baja($datos))
                    {
                        $mensaje = "La accion ".$datos['accion']." se realizo correctamente.";
                        //$resp = true;
                                    }else{
                        $mensaje = "La accion ".$datos['accion']." no pudo concretarse.";}
                }else{
                    $mensaje = "La accion ".$datos['accion']." no pudo concretarse porque la persona tiene un auto";
                }
            }

        if($datos['accion'] == 'nuevo')
        {
            if($objTrans->alta($datos))
            {
                $mensaje = "La accion ".$datos['accion']." se realizo correctamente.";
                //$resp = true;
            }
        }

            //if($resp)
            //{
            //    $mensaje = "La accion ".$datos['accion']." se realizo correctamente.";
            //}else {
            //    $mensaje = "La accion ".$datos['accion']." no pudo concretarse.";
            //}
        }
    ?>

<!-- Titulo en la pagina -->
<h3 class="text-center">Persona - Edici&oacute;n o barrado</h3>

<!-- Mensaje mostrado en pantalla -->
<p class="alert alert-info text-center p-3">
    <?php	
        echo $mensaje;
        // Si no llegan datos del data_submited    
}else{
    echo "Acceso restringido";
}
    ?>
</p>

<!-- Boton volver -->
<br><a href="../Ejercicio/persona_index.php" class="btn btn btn-info m-3" role="button">Volver</a><br>

<!-- Footer -->
<?php include_once '../../Estructura/footer.php'; ?>


