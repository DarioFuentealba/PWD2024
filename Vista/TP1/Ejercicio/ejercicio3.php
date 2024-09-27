<?php
    $titulo = "Ejercicio 3";
    include_once '../../Estructura/header.php';
?>

<!--Incluyo el archivo JS con las validaciones de los campos-->
<script src="../../Js/tp1eje3.js"></script>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado">
    <p>Enunciado: </p>
    <p>
    Crear una p&aacute;gina php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el m&eacute;todo Post a otra p&aacute;gina php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy nombre , apellido tengo edad años y vivo en direcci&oacute;n”, usando la informaci&aacute;o recibida. Cambiar el m&eacute;todo Post por Get y analizar las diferencias 
    </p>
</div>
<div class="divform">
    <form id="form3" name="form3" action="../Accion/eje3accion.php" method="post">
        <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido" ><br>
        <label for="ledad">Edad:</label><br>
        <input type="number" name="edad" id="edad"  min="1" max='90'><br>
        <label for="ldireccion">Direcci&oacute;n:</label><br>
        <input type="text" name="direccion" id="direccion"><br>
        <br>
        <input class="btn btn-success" role="button" type="submit" name="enviar" id="enviar" value="Enviar">

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
    document.getElementById("form3").addEventListener("submit", function(event){
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