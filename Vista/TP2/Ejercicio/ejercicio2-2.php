<?php

$titulo = "Ejercicio N 2";
include_once('../../Estructura/header.php');

?>
<div class="divtitulo">
    <h1>Ejercicio 2</h1>
</div>
<div class="divform">
    <form action="../Accion/eje2-2accion.php" method="get" id="form2" name="form2">
        Lunes:<input type="number" id="lunes" name="lunes" required><br><br>

        Martes:<input type="number" id="martes" name="martes" required><br><br>

        Miércoles:<input type="number" id="miércoles" name="miércoles" required><br><br>

        Jueves:<input type="number" id="jueves" name="jueves" required><br><br>

        Viernes:<input type="number" id="viernes" name="viernes" required><br><br>

        <button type="submit" >Calcular Horas Totales</button>
    </form>
    <script type="text/javascript" src="../../Js/tp2ej2.js"></script>
</div>

</body>
<?php
include_once('../../Estructura/footer.php');
?>