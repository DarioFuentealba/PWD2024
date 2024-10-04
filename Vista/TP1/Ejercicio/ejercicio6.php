<?php
$titulo = "TP 1 - Ejercicio 6";
include_once '../../Estructura/header.php';
?>


<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>
<div class="enunciado"  id="enunciado">
  <p>Enunciado: </p>
  <p>
    Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes deportes que practica (f&uacute;tbol, basket, tennis, voley) un alumno. Mostrar en la p&aacute;gina que procesa el formulario la cantidad de deportes que practica. 
  </p>
</div>
<div class="divform">
    <form id="form6" name="form4" action="../Accion/eje6accion.php" method="post">
        <label for="lnombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="lapellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido"><br>
        <label for="ledad">Edad:</label><br>
        <input type="number" name="edad" id="edad" min="0" max='90'><br>
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
        <input type="checkbox" id="deporte" name="d1" value="futbol">
        <label for="lfutbol">Futbol</label><br>
        <input type="checkbox" id="basket" name="d2" value="basket">
        <label for="lbasket">Basket</label><br>
        <input type="checkbox" id="voley" name="d3" value="voley">
        <label for="lvoley">Voley</label><br>
        <input type="checkbox" id="tenis" name="d4" value="tenis">
        <label for="ltenis">Tenis</label><br>
        <input type="checkbox" id="handbol" name="d5" value="handbol">
        <label for="lhandbol">Handbol</label><br>
        <input type="checkbox" id="otros" name="d6" value="otros">
        <label for="lotros">Otros</label><br>

        <input class="btn-tp1" role="button" type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
</div>

<?php
include_once '../../Estructura/footer.php';
?>
<script type="text/javascript" src="../../Js/validacionTP1.js"></script>
<script>
    document.getElementById("form6").addEventListener("submit", function(event){
        var campos =[
            document.getElementById("nombre"),
            document.getElementById("apellido"),
            document.getElementById("edad"),
            document.getElementById("direccion")
        ];
        var todosValidos = true; 
        // Validar que todos los campos no esten vacios
        campos.forEach(function(campo){
            if(!validarCampo(campo)){
                todosValidos = false;
            }
        });
        var nombres= [
            document.getElementById("nombre"),
            document.getElementById("apellido")
        ]
        // Valida los campos nombre y apellido
        nombres.forEach(function(campo){
            if(!validarNombre(campo)){
                todosValidos = false; 
            }
        });

        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var checkboxMarcado = false;
        // Usar un bucle `for` para comprobar si al menos uno está seleccionado
        for(var i = 0; i < checkboxes.length; i++){
            if(checkboxes[i].checked){
                checkboxMarcado = true;
              break; // Detener el bucle si se encuentra un checkbox seleccionado
            }
        }
        if(!checkboxMarcado){
            event.preventDefault(); // Evitar que se envíe el formulario si alguno es inválido
        }
        if(!todosValidos){
            event.preventDefault(); // Evitar que se envíe el formulario si alguno es inválido
        }
    });
</script>