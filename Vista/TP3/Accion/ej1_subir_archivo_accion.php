<?php
    $titulo = "TP 3 - Ejercicio 1 - Subir archivo";
    include_once '../../Estructura/header.php';
    include_once '../../../Control/TP3/Ej1SubirArchivo.php';

    if(!empty(data_submitted()))
    {
        $datos = data_submitted();
        $objArchivo = new Ej1SubirArchivo(); //Creo el objeto
        $respuesta = $objArchivo->subirArchivo($datos); //Invoco al metodo subirArchivo y le asigno lo que me retorna a la variable $respuesta

        if($respuesta === '0')
        {
            $mensaje = '<p>ERROR: No se puede cargar el archivo.</p>';
        }else if($respuesta === '1'){
            $mensaje = '<p>El archivo'.$datos['subirArchivo']['name'].' se ha copiado con éxito!</p><br>';
        }else if($respuesta === '-1'){
            $mensaje = '<p>ERROR: No se puede cargar el archivo. No se puede acceder al archivo temporal</p><br>';
        }else if($respuesta === '-2'){
            $mensaje = '<p>ERROR: El tipo de archivo no está permitido. Sólo se pueden cargar archivos .doc o .pdf</p><br>';
        }else if($respuesta === '-3'){
            $mensaje = '<p>ERROR: El archivo excede el tamaño máximo de 2 MB.</p><br>';
        }else{
            $mensaje = '<p>ERROR: Ocurrió un error desconocido.</p><br>';
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
    <div><a href="../Ejercicio/ej1_subir_archivo.php" class="btn btn-primary" role="button">Volver</a></div></div>';
    }
    // Footer
    include_once '../../Estructura/footer.php';
?>
