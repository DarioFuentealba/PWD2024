<?php
$titulo = "Autos";
include_once '../../Estructura/header.php';
echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';
$datos = data_submitted();
//verEstructura($datos);
$resp = false;
$objTrans = new AbmAuto();
if (isset($datos['accion'])){
    if($datos['accion']=='editar'){
        if($objTrans->modificacion($datos)){
            $resp = true;
        }
    }
    if($datos['accion']=='borrar'){
        if($objTrans->baja($datos)){
            $resp =true;
        }
        
    }
    if($datos['accion']=='nuevo'){
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Auto</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h3>Auto</h3>
<br><a href="../Ejercicio/auto_index.php">Volver</a><br>

<?php	
echo $mensaje;
?>

</body>
</html>



