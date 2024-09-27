<?php
$titulo = "Ejercicio 7";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
<p>Enunciado:</p> 
    Crear una p&aacute;gina con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán n&uacute;meros y el select debe dar la opci&oacute;n de una operaci&oacute;n matem&aacute;tica que podr&aacute; resolverse usando los n&uacute;meros ingresados. En la p&aacute;gina que procesa la informaci&oacute;n se debe mostrar por pantalla la operaci&oacute;n seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operaci&oacute;n. Ejemplo del formulario: 
</p>
</div>

<div class="divform">
    <form method="get" action="../Accion/eje7accion.php" id='form7'>
        <label>Número 1:</label>
        <input type="number" id="numero1" name="numero1" step="any" ><br><br>

        <label>Número 2:</label>
        <input type="number" id="numero2" name="numero2" step="any" ><br><br>

        <label>Operación:</label>
        <select id="operacion" name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>

        <input type="submit" value="Calcular" class="btn btn-success" role="button">
    </form>
</div>

<?php
include_once '../../Estructura/footer.php';
?>
<script type="text/javascript" src="../../Js/validacionTP1.js"></script>
<script>
    document.getElementById("form7").addEventListener("submit", function(event) {
    var numeros =[
        document.getElementById("numero1"),
        document.getElementById("numero2")
    ] 
    var todosValidos = true;
    numeros.forEach(function(campo){
            if(!validarCampo(campo)){
                todosValidos = false; 
            }
        });
        if(!todosValidos){
            event.preventDefault(); // Evitar que se envíe el formulario si alguno es inválido
        }
    });
</script>