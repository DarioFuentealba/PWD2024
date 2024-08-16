<?php
$titulo = "Ejercicio N 8";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
  <p>Enunciado: </p>
  <p>
  La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente.
     Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. Si es estudiante o menor de 12 años el precio es de $160,
      si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y 
      permita ingresar si se trata de un  estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. 
       Agregar un botón para limpiar el formulario y volver a consultar. 
  </p>
</div>

<div class="divform">
    <form method="get" action="../Accion/eje8accion.php">
        <label>Ingrese sus datos para calcular la tarifa:</label><br><br>
        <label>Edad:</label><br>
        <input type="text" name="edad" id='edad'><br><br>

        <label>Estudia:</label><br>
        <input type="radio" name="estudia" value="si" required>Estudio<br>
        <input type="radio" name="estudia" value="no" required>No estudio<br><br>

        <input type="submit" name="submit" value="Enviar" class="botonFormulario">
        <input type="reset" value="Limpiar Formulario">

    </form>
</div>

</body>
</html>

</div>

<?php
include_once '../../Estructura/footer.php';
?>