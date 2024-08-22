$(document).ready(function(){
    $("#form7").on('submit', function(event) {
        var verifica = true;
        var mensaje = "Por favor, corrija los siguientes errores:\n";
        var regexLetras = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/; // Expresión regular solo letras y espacios

        var numero1 = $("#numero1").val().trim();
        if(numero1 === "" || regexLetras.test(numero1)){
            $("#numero1").css("border-color", "red");
            mensaje += "- Ingrese un número válido.\n";
            verifica = false;
        }

        var numero2 = $("#numero2").val().trim();
        if (numero2 === "" || regexLetras.test(numero2)){
            $("#numero2").css("border-color", "red");
            mensaje += "- Ingrese un número válido.\n";
            verifica = false;
        }


        if(!verifica){
            alert(mensaje); // Mostrar alerta general si hay errores
            event.preventDefault(); // Prevenir el envío del formulario si hay errores
        }
    });
});
