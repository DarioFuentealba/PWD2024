$(document).ready(function(){
    $("#form8").on('submit', function(event) {
        var verifica = true;
        var mensaje = "Por favor, corrija los siguientes errores:\n";
        var regexLetras = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/; // Expresión regular solo letras y espacios

        var edad = $("#edad").val().trim();
        if(edad === "" || regexLetras.test(edad)){
            $("#edad").css("border-color", "red");
            mensaje += "- Ingrese un número válido.\n";
            verifica = false;
        }

        if (!$("input[name='estudia']:checked").val()){
            mensaje += "- Por favor, seleccione si estudia o no.\n";
            verifica = false;
        }

        if(!verifica){
            alert(mensaje); // Mostrar alerta general si hay errores
            event.preventDefault(); // Prevenir el envío del formulario si hay errores
        }
    });
});
