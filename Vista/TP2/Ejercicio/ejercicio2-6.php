<?php
$titulo = "TP 2 - Ejercicio 2-6";
include_once '../../Estructura/header.php';
?>

<!--Incluyo el archivo JS con las validaciones de los campos-->
<script src="../../Js/tp2.js"></script>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado" id="enunciado">
  <p class="h5 mb-4">Enunciado: </p>
  <p>
    Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-estudios primarios, 3-estudios secundarios. Agregar el componente que crea m&aacute;s apropiado para solicitar el sexo. En la p&aacute;gina que procesa el formulario mostrar adem&aacute;s un mensaje que indique el tipo de estudios que posee y su sexo. 
  </p>
</div>
<div class="divform">
    <form id="miFormulario" name="form6" action="../Accion/ej2-6accion.php" method="get">
      <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" class="nombreApellido" ><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido" class="nombreApellido"><br>
        <div class="mensaje-error"></div>
        <label for="ledad">Edad:</label><br>
        <input type="text" name="edad" id="edad" ><br>
        <div class="error-numero"></div>
        <label for="ldireccion">Direcci&oacute;n:</label><br>
        <input type="text" name="direccion" id="direccion"><br>
        <div class="error-direccion"></div>
        <br><br>

        <label for="lnivelestudio">Nivel de estudios:</label><br>
        <div class="radio-group">
          <input type="radio" id="estudio1" name="estudio" value="1" >
          <label for="lsin">Sin Estudios</label><br>
          <input type="radio" id="estudio2" name="estudio" value="2" >
          <label for="lsecundario">Secundarios</label><br>
          <input type="radio" id="estudio3" name="estudio" value="3" >
          <label for="lterciario">Terciarios</label>
        </div>
        <div class="error-radio"></div>
        <br><br>

        <select name="sexo" id="sexo">
          <option value="">Seleccione una opci&oacute;n</option>
          <option value="M">Masculino</option>
          <option value="F">Femenino</option>
        </select>
        <div class="error-select"></div>
        <br>
        <br>

        <label for="deportes-practica">Deportes que practica: </label><br>
          <div iclass="grupo-deportes"><br>
            <input type="checkbox" id="futbol" name="deportes" value="futbol">
            <label for="futbol">F&uacute;tbol</label><br>
            <input type="checkbox" id="basket" name="deportes" value="basket">
            <label for="basket">B&aacute;squet</label><br>
            <input type="checkbox" id="voley" name="deportes" value="voley">
            <label for="voley">Voley</label><br>
            <input type="checkbox" id="tenis" name="deportes" value="tenis">
            <label for="tenis">Tenis</label><br>
            <input type="checkbox" id="handbol" name="deportes" value="handbol">
            <label for="handbol">Handbol</label><br>
            <input type="checkbox" id="otros" name="deportes" value="otros">
            <label for="otros">Otros</label><br>
            <input type="checkbox" id="ninguno" name="deportes" value="ninguno">
            <label for="ninguno">Ninguno</label><br>
          </div>
          <div class="error-box"></div><br><br>

        <input class="btn btn-tp2" role="button" type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
</div>

<?php
include_once '../../Estructura/footer.php';
?>