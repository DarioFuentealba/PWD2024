<?php
$titulo = "Ejercicio N 7";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1>Ejercicio N° 7 </h1>
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