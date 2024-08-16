<?php
$titulo = "Ejercicio N 7";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
  <p>Enunciado: </p>
  <p>
    Crear una página con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del formulario: 
  </p>
</div>

<div class="divform">
    <form method="get" action="../Accion/eje7accion.php">
        <label>Número 1:</label>
        <input type="text" id="numero1" name="numero1" required>

        <label>Número 2:</label>
        <input type="text" id="numero2" name="numero2" required>

        <label>Operación:</label>
        <select id="operacion" name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>

        <input type="submit" value="Calcular">
    </form>
</div>

</body>
</html>

</div>

<?php
include_once '../../Estructura/footer.php';
?>