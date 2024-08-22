$(document).ready(function(){
    $("#form2").on('submit', function(event){
        var verifica = true;

        // Itera sobre cada input de tipo número
        $("input[type='number']").each(function() {
            var valor = $(this).val();
            
            // Verifica que el valor sea un número entero no negativo
            if(!/^\d+$/.test(valor) || parseInt(valor) < 0) {
                verifica = false;
                $(this).css("border-color", "red"); 
                alert("Por favor, ingrese un número entero no negativo.");
            }
        });

        if(!verifica){
            event.preventDefault(); // Evita el envío del formulario si hay un error
        }
    });
});
