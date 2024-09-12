<?php
    $titulo = "Autos"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
    echo '<div class="divtitulo"> <h1>'.$titulo.'</h1></div>';
    $datos = data_submitted();
    //verEstructura($datos);
    $autoLoad = false;
    $objAbmAuto = new AbmAuto();
    $objAbmDuenio = new AbmPersona();

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
                echo "No existe en la base de datos el propietario.";
                echo "<div>Desea ingresar un nuevo Dueño. <a href='../Ejercicio/persona_nuevo.php'>click aqui</a></div>";

<<<<<<< Updated upstream
            }
        }
=======
    //Buscar en la BDD si ya existe el auto con esa patente
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
                echo "No existe el propietario en la base de datos.";
                echo "<div>Desea ingresar un nuevo Dueño. <a href='../Ejercicio/persona_nuevo.php'>click aqui</a></div>";
            }
        }
    }else{
        echo "La patente ya está registrada en la base de datos";
    }
    

    if($autoLoad){
        $mensaje = "La carga en la base de datos se realizo correctamente.";
    }else {
        $mensaje = "La carga no pudo concretarse.";
    }
>>>>>>> Stashed changes

        if($autoLoad){
            $mensaje = "La carga en la base de datos se realizo correctamente.";
        }else {
            $mensaje = "La carga no pudo concretarse.";
        }
?>

        <!-- Titulo en la pagina -->
        <h3 class="text-center">Auto</h3>

        <!-- Boton volver -->
        <br><a href="../Ejercicio/auto_index.php" class="btn btn-success" role="button">Volver</a><br>

<?php	
    echo $mensaje;
    }else{
        echo '<div class="divform"> <p>NO HAY DATOS</p><br>
        <div><a href="../Ejercicio/auto_index.php" class="btn btn-success" role="button">Volver</a></div></div>';
    }

    include_once '../../Estructura/footer.php';
?>
