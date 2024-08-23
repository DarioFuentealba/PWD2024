$(document).ready(function() {
    $("#cine").on('submit', function(event) {
        var verifica = true;
        var mensaje = "";
        
        // Validación del año
        var anio = $("#anio").val().trim();
        if(anio === "" || isNaN(anio) || anio.length > 4){
            verifica = false;
            $("#anio").addClass('is-invalid'); // Agrega clase para borde rojo
            $("#anio").addClass('bg-danger'); // Agrega clase para fondo rojo claro
            mensaje += "-El año debe ser un número con máximo 4 caracteres.\n";
        }

        // Validación de duración
        var duracion = $("#duracion").val().trim();
        if(duracion === "" || isNaN(duracion) || duracion.length > 3){
            verifica = false;
            $("#duracion").addClass('is-invalid'); // Agrega clase para borde rojo
            $("#duracion").addClass('bg-danger'); // Agrega clase para fondo rojo claro            
            mensaje += "-La duración debe ser un número con máximo 3 caracteres.\n";
        }

        // Validación de campos obligatorios
        $(".form-control, .form-select, .form-check-input").each(function(){
            if($(this).prop('required') && $(this).val().trim() === ""){
                verifica = false;
                $(this).addClass('is-invalid'); // Agrega clase para borde rojo
                $(this).addClass('bg-danger'); // Agrega clase para fondo rojo claro
                mensaje += "Todos los campos obligatorios deben completarse.\n";                            mensaje += "Todos los campos obligatorios deben completarse.\n";
            }
        });
        if(!verifica){
            alert(mensaje);
            event.preventDefault(); // Evitar el envío del formulario
        }
    });
});
