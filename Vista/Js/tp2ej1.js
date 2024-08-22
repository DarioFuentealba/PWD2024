
$(document).ready(function() {
    $("form[name='form1']").on('submit', function(event) {
      var numero = $("#numero").val();  // Obtener el valor del campo
      if (numero === "" ) {  // Verificar si el campo está vacío
        alert("El campo 'Ingrese un número' es obligatorio.");  // Mostrar alerta
        event.preventDefault();  // Prevenir el envío del formulario
    }
    // Verificar si el valor ingresado no es un número válido
    if(isNaN(numero)){
        alert("Por favor, ingresa un número válido."); 
        event.preventDefault();  // Prevenir el envío del formulario
        return;
    }
    // Verificar si el número ingresado es un valor entero (opcional)
    if(!Number.isInteger(parseFloat(numero))) {//Verifica si el valor proporcionado es un número entero.
        alert("Por favor, ingresa un número entero."); 
        event.preventDefault();  // Prevenir el envío del formulario
        return;
    }
    });
});
