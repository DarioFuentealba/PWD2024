<?php
    $titulo = "TP 3 - Ejercicio 2 - Mostrar txt en textarea";
    include_once '../../Estructura/header.php';
    include_once '../../../Control/TP3/Ej2_mostrar_archivo_txt_en_textarea.php';
    ?>

    <!-- Titulo en la pagina con fondo violeta -->
    <div class="divtitulo">
        <h1><?php echo $titulo;?></h1>
    </div>
    
    <?php
    
    if(!empty(data_submitted()))
    {
        $datos = data_submitted();
        $objArchivo = new Ej2_mostrar_archivo_txt_en_textarea(); //Creo el objeto

        //Invoco al metodo subirArchivo y le asigno lo que me retorna a la variable $respuesta
        $respuesta = $objArchivo->subirArchivo($datos);
        
        //Invoco al metodo retornaContenidoArchivo y le asigno lo que me retorna a la variable $informacion
        $informacion = $objArchivo->retornaContenidoArchivo($datos["subirArchivo"]);

        if($respuesta === '0')
        {
            $mensaje = '<p class=" text-light" id="tituloAccion">ERROR: No se puede cargar el archivo.</p>';

        }else if($respuesta === '1' && $informacion != '' && $informacion != '-1'){
            $mensaje = '<p class=" text-light" id="tituloAccion">El archivo ' . $datos['subirArchivo']['name'] . ' se ha copiado con éxito!</p><br>';
            $mensaje .= '<p class=" text-light" id="tituloAccion">Textarea donde muestro el contenido del archivo<br><textarea name="muestraInformacion" rows="25" cols="70">' . $informacion . '</textarea>';

        }else if($respuesta === '-1'){
            $mensaje = '<p class=" text-light" id="tituloAccion">ERROR: No se puede cargar el archivo. No se puede acceder al archivo temporal</p><br>';

        }else if($respuesta === '-2' || $informacion === '-1'){
            $mensaje = '<p class=" text-light" id="tituloAccion">ERROR: El tipo de archivo no está permitido. Sólo se pueden cargar archivos .txt</p><br>';

        }else if($respuesta === '-3'){
            $mensaje = '<p class=" text-light" id="tituloAccion">ERROR: El archivo excede el tamaño máximo de 2 MB.</p><br>';

        }else{
            $mensaje = '<p class=" text-light" id="tituloAccion">ERROR: Ocurrió un error desconocido.</p><br>';
        }
?>

    <p>
        <?php
            echo $mensaje;
        ?>
    </p>

<?php
    }else{
        echo '<div class="container"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/Ej2_mostrar_txt_en_textarea.php" class="btn btn-primary" role="button">Volver</a></div></div>';
    }
    // Footer
    include_once '../../Estructura/footer.php';
?>
