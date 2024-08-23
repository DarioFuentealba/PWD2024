<?php
$titulo = "Ejercicio N 2";
include_once '../../Estructura/header.php';
$datos = data_submitted();
$archivos = new ControlTxt();
$informacion = $archivos->retornaContenidoArchivo($datos["archivo"]);
if($informacion === '-1'){
    $mensaje = '<p>ERROR: El archivo subido no fue txt, por lo que no se podrá mostrar.</p>';
}elseif($informacion != ''){
    $mensaje = "<textarea name='muestraInformacion' rows='25' cols='70'>" . $informacion . "</textarea>";
}else{
    $mensaje = '<p>ERROR: Ocurrió un error desconocido.</p>';
}
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<h1><?php echo $mensaje; ?></h1>
<div><a href="../Ejercicio/ejercicio2.php" class="btn btn-success" role="button">Volver</a></div>

<?php
include_once '../../Estructura/footer.php';
?>