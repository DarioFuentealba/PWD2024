$(document).ready(function(){
    $("#form5").on('submit', function(event) {
        var verifica = true;
        var mensaje = "Por favor, corrija los siguientes errores:\n";
        var regexLetras = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/; // Expresion regular solo letras y espacios

        // Validar el campo nombre
        var nombre = $("#nombre").val().trim();
        if(nombre === "" || !regexLetras.test(nombre)){
            $("#nombre").css("border-color", "red");
            mensaje += "- Ingrese un nombre válido (solo letras).\n";
            verifica = false;
        }

        // Validar el campo apellido
        var apellido = $("#apellido").val().trim();
        if (apellido === "" || !regexLetras.test(apellido)){
            $("#apellido").css("border-color", "red");
            mensaje += "- Ingrese un apellido válido (solo letras).\n";
            verifica = false;
        }

        // Validar el campo edad
        var edad = $("#edad").val();
        if(edad === "" || !/^\d+$/.test(edad) || parseInt(edad) < 0){
            $("#edad").css("border-color", "red");
            mensaje += "- Ingrese una edad válida.\n";
            verifica = false;
        }

        // Validar el campo dirección
        var direccion = $("#direccion").val().trim();
        if(direccion === ""){
            $("#direccion").css("border-color", "red");
            mensaje += "- Ingrese su dirección.\n";
            verifica = false;
        }
        
        var estudiosLabel = $("label[for='lnivelestudio']");
        if (!$("input[name='estudios']:checked").val()) {
            mensaje += "- Por favor, seleccione un nivel de estudios.\n";
            estudiosLabel.css("color", "red"); // Cambia el color del label a rojo            
            verifica = false;
        }

        // Validar el select de sexo
        if ($("#sexo").val() === "") {
            mensaje += "- Por favor, seleccione un sexo.\n";
            $("#sexo").css("border-color", "red");
            verifica = false;
        } 
        var deportes = document.querySelectorAll("input[type='checkbox']:checked");
        if(deportes.length == 0 ){
            verifica = false;
            mensaje += "- Por favor, seleccione un deporte.\n";
            $("input[type='checkbox']").parent().css("color", "red");
        }        

        if(!verifica){
            alert(mensaje); // Mostrar alerta general si hay errores
            event.preventDefault(); // Prevenir el envío del formulario si hay errores
        }
    });
});
