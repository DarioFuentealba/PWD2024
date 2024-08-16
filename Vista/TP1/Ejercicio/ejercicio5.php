<?php
$titulo = "Ejercicio N 5";
include_once '../../Estructura/header.php';
?>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
  <p>Enunciado: </p>
  <p>
    Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2estudios primarios, 3-estudios secundarios. Agregar el componente que crea más apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además un mensaje que indique el tipo de estudios que posee y su sexo. 
  </p>
</div>
<div class="divform">
    <form id="form5" name="form4" action="../Accion/eje5accion.php" method="get">
        <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido"><br>
        <label for="ledad">Edad:</label><br>
        <input type="text" name="edad" id="edad"><br>
        <label for="ldireccion">Direcci&oacute;n</label><br>
        <input type="text" name="direccion" id="direccion"><br>
        <label for="lnivelestudio">Nivel de estudios:</label><br>
        <input type="radio" id="estudios" name="estudios" value="1">
        <label for="lsin">Sin Estudios</label><br>
        <input type="radio" id="estudios" name="estudios" value="2">
        <label for="lsecundario">Secundarios</label><br>
        <input type="radio" id="estudios" name="estudios" value="3">
        <label for="lterciario">Terciarios</label><br>

        <select name="sexo" id="sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br>
        <br>
        <input class="boton" type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
</div>





<?php
include_once '../../Estructura/footer.php';
?>