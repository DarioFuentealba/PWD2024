<?php
$titulo = "Personas";
include_once '../../Estructura/header.php';
echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';
$datos = data_submitted();
//verEstructura($datos);
$resp = false;
$objTrans = new AbmPersona();

if (isset($datos['accion'])){
    if($datos['accion'] == 'editar'){
        if($objTrans->modificacion($datos)){
            $resp = true;
        }
    }

    if($datos['accion'] == 'borrar'){
        if($objTrans->baja($datos)){
            $resp =true;
        }
    }

    if($datos['accion'] == 'nuevo'){
        //var_dump($datos);
        if($objTrans->alta($datos)){
            $resp =true;
        }
    }

    if($resp){
        $mensaje = "La accion ".$datos['accion']." se realizo correctamente.";
    }else {
        $mensaje = "La accion ".$datos['accion']." no pudo concretarse.";
    }
}
?>

<h3>Persona</h3>

<br><a href="../Ejercicio/persona_index.php">Volver</a><br>

<?php	
echo $mensaje;
?>


