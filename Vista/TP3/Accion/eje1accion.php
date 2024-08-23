<?php
$titulo = "Ejercicio N 1";
include_once '../../Estructura/header.php';
$datos = data_submitted();
$archivos = new ControlArchivo();
$respuesta = $archivos->subirArchivo($datos);
if($respuesta === '0'){
    $mensaje = '<p>ERROR: No se puede cargar el archivo.</p>';
}elseif($respuesta === '1'){
    $mensaje = '<p>El archivo ' . $datos['archivo']['name'] . ' se ha copiado con éxito.</p>';
}elseif($respuesta === '-1'){
    $mensaje = '<p>ERROR: No se puede cargar el archivo. No se puede acceder al archivo temporal.</p>';
}elseif($respuesta === '-2'){
    $mensaje = '<p>ERROR: El tipo de archivo no está permitido. Solo se permiten archivos .doc o .pdf.</p>';
}elseif($respuesta === '-3'){
    $mensaje = '<p>ERROR: El archivo excede el tamaño máximo permitido de 2MB.</p>';
}else{
    $mensaje = '<p>ERROR: Ocurrió un error desconocido.</p>';
}
?>

<div class="divtitulo">
    <h1>Ejercicio 1</h1>
</div>
<h1><?php echo $mensaje; ?></h1>





<?php
include_once '../../Estructura/footer.php';
?>