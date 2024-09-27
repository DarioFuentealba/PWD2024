<?php
$titulo = "TP 1 - Ejercicio 4";
include_once '../../Estructura/header.php';
?>

<!--Incluyo el archivo JS con las validaciones de los campos-->
<script src="../../Js/tp1eje4.js"></script>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado"  id="enunciado">
  <p>Enunciado: </p>
  <p>
    Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar esos datos a otra p&aacute;gina en donde se muestren mensajes distintos dependiendo si la persona es mayor de edad o no; (si la edad es mayor o igual a 18). Enviar los datos usando el m&eacute;todo GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes. 
  </p>
</div>
<div class="divform">
    <form id="form4" name="form4" action="../Accion/eje4accion.php" method="get">
        <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" ><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido" ><br>
        <label for="ledad">Edad:</label><br>
        <input type="number" name="edad" id="edad" min="1" max='90'><br>
        <label for="ldireccion">Direcci&oacute;n</label><br>
        <input type="text" name="direccion" id="direccion" ><br>
        <br>
        <input class="btn-tp1" role="button" type="submit" name="enviar" id="enviar" value="Enviar">
        
        <!-- Campo oculto estudio -->
        <input type="hidden" name="estudio" value=""><br>
        <!-- Campo oculto sexo -->
        <input type="hidden" name="sexo" value=""><br>
    </form>
</div>


<?php
include_once '../../Estructura/footer.php';
?>
<script type="text/javascript" src="../../Js/validacionTP1.js"></script>
<script>
    document.getElementById("form4").addEventListener("submit", function(event){
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