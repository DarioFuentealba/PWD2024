<?php
$titulo = "Ejercicio 5";
include_once '../../Estructura/header.php';
?>

<!--Incluyo el archivo JS con las validaciones de los campos-->
<script src="../../Js/tp1eje5.js"></script>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
  <p>Enunciado: </p>
  <p>
    Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-estudios primarios, 3-estudios secundarios. Agregar el componente que crea m&aacute;s apropiado para solicitar el sexo. En la p&aacute;gina que procesa el formulario mostrar adem&aacute;s un mensaje que indique el tipo de estudios que posee y su sexo. 
  </p>
</div>
<div class="divform">
    <form id="form5" name="form4" action="../Accion/eje5accion.php" method="get">
        <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" ><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido"><br>
        <label for="ledad">Edad:</label><br>
        <input type="number" name="edad" id="edad" ><br>
        <label for="ldireccion">Direcci&oacute;n</label><br>
        <input type="text" name="direccion" id="direccion" ><br>
        <label for="lnivelestudio">Nivel de estudios:</label><br>
        <input type="radio" id="estudio" name="estudio" value="1" checked>
        <label for="lsin">Sin Estudios</label><br>
        <input type="radio" id="estudio" name="estudio" value="2">
        <label for="lsecundario">Secundarios</label><br>
        <input type="radio" id="estudio" name="estudio" value="3">
        <label for="lterciario">Terciarios</label><br>

        <select name="sexo" id="sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br>
        <br>
        <input class="btn btn-success" role="button" type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
</div>

<?php
include_once '../../Estructura/footer.php';
?>
<script type="text/javascript" src="../../Js/validacionTP1.js"></script>
<script>
    document.getElementById("form5").addEventListener("submit", function(event){
        var campos =[
            document.getElementById("nombre"),
            document.getElementById("apellido"),
            document.getElementById("edad"),
            document.getElementById("direccion")
        ];
        var todosValidos = true; 
        // Validar todos los campos
        campos.forEach(function(campo){
            if(!validarCampo(campo)){
                todosValidos = false;
            }
        });
        var nombres= [
            document.getElementById("nombre"),
            document.getElementById("apellido")
        ]
        nombres.forEach(function(campo){
            if(!validarNombre(campo)){
                todosValidos = false; 
            }
        });
        if(!todosValidos){
            event.preventDefault(); // Evitar que se envíe el formulario si alguno es inválido
        }
    });
</script>