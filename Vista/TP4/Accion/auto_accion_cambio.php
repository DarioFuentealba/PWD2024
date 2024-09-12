<?php
$titulo = "Autos";
include_once '../../Estructura/header.php';
echo '<div class="divtitulo"> <h1>'.$titulo.'</h1></div>';
$datos = data_submitted();
//verEstructura($datos);
$autoExiste = false;
$personaExiste = false;
$objAbmAuto = new AbmAuto();
$objAbmDuenio = new AbmPersona();

if(!empty(data_submitted())){

    if(isset($datos['NroDni'])){
        $listaPersona = $objAbmDuenio->buscar($datos);
        if(!empty($listaPersona)){
            $personaExiste =true;
        }else{ //Si la persona duenño no existe
            echo "No existe en la base de datos el propietario.";
            echo "<div>Desea ingresar un nuevo Dueño. <a href='../Ejercicio/persona_nuevo.php'>click aqui</a></div>";
            echo '<button onclick="history.back();">Atras</button>';
        }
    }

    if(isset($datos['Patente'])){
        $listaAuto = $objAbmAuto->buscar($datos);
        if(!empty($listaAuto)){
            $autoExiste =true;
        }else{ //Si la persona duenño no existe
            echo "No existe en la base de datos el auto solicitado.";
            echo "<div>Desea ingresar un nuevo auto. <a href='../Ejercicio/auto_nuevo.php'>click aqui</a></div>";
            echo '<button onclick="history.back();">Atras</button>';
        }
    }
   
    if($autoExiste && $personaExiste && $objAbmAuto->modificarDni($datos)){
        $mensaje = "La carga en la base de datos se realizo correctamente.";
    }else {
        $mensaje = "La carga no pudo concretarse.";
    }

?>

<h3>Auto</h3>

<br><a href="../Ejercicio/auto_index.php" class="btn btn-success" role="button">Volver</a><br>

<?php	
echo $mensaje;
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/auto_index.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>
