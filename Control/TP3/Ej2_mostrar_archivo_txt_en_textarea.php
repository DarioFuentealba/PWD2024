<?php

class Ej2_mostrar_archivo_txt_en_textarea{
    private $dir;

    public function __construct(){
        // Definimos Directorio donde se guarda el archivo
        //Esta funcionalidad se va a ejecutar desde el scrip ej1_subir_archivo.php que esta en la carpeta Vista y no desde acá, por eso esta escrita de esta manera
        $this->dir = '../../../Archivos/';
    }


    //Setea el valor de $dir
    public function setDir($dir){
        $this->dir = $dir; 
    }

    //Obtiene el valor de $dir
    public function getDir(){
        return $this->dir; 
    }

    /**
     * Sube un archivo, guarda en espacio del array la informacion del mismo y verifica que no haya errores.
     * Recibe por parametro un array que contiene los datos de los arreglos $_POST o $_GET, segun corresponda y los datos del archivo ($_FILES)
     * Devuelve una respuesta que correspondera a algun mensaje (sera error o estara todo bien)
     * @param ARRAY $arrayDatosArchivo
     * return STRING $respuesta
     */
    public function subirArchivo($arrayDatosArchivo){
        $respuesta = "";
        $extension = ['txt']; //Solo podre subir archivos con estas extensiones
        $tamanio = 2 * 1024 * 1024; //Tamanio maximo del archivo a subir, 2MB

        //Comprobamos que no se hayan producido errores
        if($arrayDatosArchivo['subirArchivo']['error'] <= 0)
        {
            $archivoExtension = pathinfo($arrayDatosArchivo['subirArchivo']['name'], PATHINFO_EXTENSION);

            $archivoTamanio = $arrayDatosArchivo['subirArchivo']['size'];

            if(in_array($archivoExtension, $extension) && $archivoTamanio <= $tamanio)
            {
                if(!copy($arrayDatosArchivo['subirArchivo']['tmp_name'], $this->getDir() . $arrayDatosArchivo['subirArchivo']['name'])){
                    $respuesta = '0'; //Error al copiar el archivo
                }else{
                    $respuesta = '1'; //Archivo subido con exito
                }
            }else{
                if(!in_array($archivoExtension, $extension))
                {
                    $respuesta = '-2'; //Tipo de archivo no permitido
                }else{
                    $respuesta = '-3'; //El archivo excede el tamanio maximo permitido de 2 MB
                }
            }
        }else{
            $respuesta = '-1'; //Error en la subida del archivo
        }
        return $respuesta;
    }


    /**
     * Recibe como parametro un array con los datos de un archivo.
     * Devuelve un string que verifica si el archivo es de texto plano o no
     * @param ARRAY $arrayArchivo
     * @return STRING $respuesta
     */
    public function retornaContenidoArchivo($arrayArchivo){
        //Inicializo variables
        $nombreTemporalArchivo = $arrayArchivo["tmp_name"];
        $tipoArchivo = $arrayArchivo["type"];

        if($tipoArchivo == "text/plain")
        {
            $respuesta = file_get_contents($nombreTemporalArchivo);
        }else{
            $respuesta = "-1";
        }
        return $respuesta;
    }

}