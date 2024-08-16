<?php
$titulo = "Ejercicio 2";
include_once('../../Estructura/header.php');
?>
<script type="text/javascript" src="./Vista/Js/funciones.js"></script>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
  <p>Enunciado: </p>
  <p>
    Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana. Enviar los datos del formulario por el método Get a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana. 
  </p>
</div>
<form action="../Accion/ej2accion.php" method="get" id="form2" name="form2" onsubmit="return validarej2();">
    Lunes:<input type="number" id="lunes" name="lunes" required><br><br>

    Martes:<input type="number" id="martes" name="martes" required><br><br>

    Miércoles:<input type="number" id="miércoles" name="miércoles" required><br><br>

    Jueves:<input type="number" id="jueves" name="jueves" required><br><br>

    Viernes:<input type="number" id="viernes" name="viernes" required><br><br>

<button type="submit">Calcular Horas Totales</button>
</form>

</body>
<?php
include_once('../../Estructura/footer.php');
?>