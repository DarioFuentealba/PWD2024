function validarNombre(event) {
    const regex = /^[a-zA-Z\s]*$/; //Expresión regular para letras y espacios
    const input = event.target;
    if (!regex.test(input.value)) {
        alert('El campo Nombre solo debe contener letras y espacios.');
        input.value = input.value.replace(/[^a-zA-Z\s]/g, ''); //Elimina caracteres no permitidos
    }
}

function validarEdad(event) {
    const input = event.target;
    if (isNaN(input.value) || input.value < 0) {
        alert('El campo Edad debe ser un número entero positivo.');
        input.value = ''; //Limpia el campo si no es válido
    }
}

function validarFormulario(event) {
    const nombre = document.getElementById('nombre').value;
    const edad = document.getElementById('edad').value;
    const direccion = document.getElementById('direccion').value;

    if (!/^[a-zA-Z\s]+$/.test(nombre)) {
        alert('El campo Nombre solo debe contener letras y espacios.');
        event.preventDefault(); //Evita el envío del formulario
        return;
    }

    if (isNaN(edad) || edad < 0) {
        alert('El campo Edad debe ser un número entero positivo.');
        event.preventDefault(); //Evita el envío del formulario
        return;
    }

    //Validaciones pasadas, puedes agregar más lógica aquí si es necesario
}