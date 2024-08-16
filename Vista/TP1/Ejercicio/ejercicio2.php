<?php
include_once('../../Estructura/head.php');

?>
<script type="text/javascript" src="./Vista/Js/funciones.js"></script>

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