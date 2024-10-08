<?php
$titulo = "TP 1 - Ejercicio 8";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado"  id="enunciado">
    <p>Enunciado: </p>
    <p>
    La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en funci&oacute;n de la edad y de la condici&oacute;n de estudiante del cliente.
    Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una p&aacute;gina web. Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un bot&oacute;n enviar los datos a un script encargado de realizar el c&aacute;lculo y visualizarlo. 
    Agregar un bot&oacute;n para limpiar el formulario y volver a consultar. 
    </p>
</div>

<div class="divform">
    <form method="get" action="../Accion/eje8accion.php" id='form8'>
        <label>Ingrese sus datos para calcular la tarifa:</label><br><br>
        <label>Edad:</label><br>
        <input type="number" name="edad" id='edad' min='1' max='90'><br><br>

        <label>Estudia:</label><br>
        <input type="radio" name="estudia" value="si" required>Estudio<br>
        <input type="radio" name="estudia" value="no" required>No estudio<br><br>

        <input type="submit" name="submit" value="Enviar" class="btn-tp1" role="button">
        <input type="reset" value="Limpiar Formulario" class="btn-tp1" role="button">

    </form>
</div>

<?php
include_once '../../Estructura/footer.php';
?>
<script type="text/javascript" src="../../Js/validacionTP1.js"></script>
<script>
    document.getElementById("form8").addEventListener("submit", function(event) {
        var edad = document.getElementById("edad");
        var todosValidos = true;
        if(!validarCampo(edad)){
            todosValidos = false; 
        }
        if(!todosValidos){
            event.preventDefault(); // Evitar que se envíe el formulario si alguno es inválido
        }
    });
</script>