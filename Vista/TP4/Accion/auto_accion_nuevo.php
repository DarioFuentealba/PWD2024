<?php
    $titulo = "Autos"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
    echo '<div class="divtitulo"> <h1>'.$titulo.'</h1></div>';
    $datos = data_submitted();
    //verEstructura($datos);
    $autoLoad = false;
    $objAbmAuto = new AbmAuto();
    $objAbmDuenio = new AbmPersona();
    $aviso = '';
    if(!empty(data_submitted()))
    {

        if(isset($datos['DniDuenio']))
        {
            $enviar['NroDni'] = $datos['DniDuenio'];
            $listaPersona = $objAbmDuenio->buscar($enviar);
            if(!empty($listaPersona))
            {
                if($objAbmAuto->alta($datos))
                {
                    $autoLoad =true;
                }

            }else{ //Si la persona duenio no existe
                $aviso .= "No existe en la base de datos el propietario.<br>";
                $aviso .= "<div>Desea ingresar un nuevo Dueño. <a href='../Ejercicio/persona_nuevo.php'>click aqui</a></div><br>";
            }
        }

       /* //Buscar en la BDD si ya existe el auto con esa patente
        $enviar['Patente'] = $datos['Patente'];      //Enviamos solo la patente
        $listaAuto = $objAbmAuto->buscar($enviar);
        if(empty($listaAuto)){

            if(isset($datos['DniDuenio'])){
                $enviar['NroDni'] = $datos['DniDuenio'];
                $listaPersona = $objAbmDuenio->buscar($enviar);
                if(!empty($listaPersona)){
                    if($objAbmAuto->alta($datos)){
                        $autoLoad =true;
                    }  
                }else{ //Si la persona duenño no existe
                    $aviso .= "No existe el propietario en la base de datos.<br>";
                    $aviso .= "<div>Desea ingresar un nuevo Dueño. <a href='../Ejercicio/persona_nuevo.php'>click aqui</a></div><br>";
                }
            }
        }else{
            $aviso .= "La patente ya está registrada en la base de datos <br>";
        }*/
    

    if($autoLoad){
        $mensaje = "La carga en la base de datos se realizo correctamente.";
    }else {
        $mensaje = "La carga no pudo concretarse.";
    }
?>

<!-- Titulo en la pagina -->
<h3 class="text-center">Agregar nuevo auto</h3>

        
<div class="alert alert-info text-center p-3">
    <?php
        echo $aviso ;	
        echo $mensaje;
        }else{
            echo '<div class="divform"> <p>NO HAY DATOS</p><br>
            <div><a href="../Ejercicio/auto_index.php" class="btn btn-success" role="button">Volver</a></div></div>';
        }

        include_once '../../Estructura/footer.php';
    ?>
</div>

<!-- Boton volver -->
<br><a href="../Ejercicio/auto_index.php" class="btn btn-primary m-3" role="button">Volver</a><br>