<?php
$titulo = "Ejercicio N 3";
include_once '../../Estructura/header.php';
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<div class="divform rounded p-4 shadow">
    <h3 class="mb-3">Member Login</h3>
    <form action="../Accion/eje3accion.php" method="post" id='form3'>                    
            <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" name="usuario" id="usuario" required placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" id="clave" name="clave" required placeholder="Clave" aria-label="Clave" aria-describedby="basic-addon2">
            </div>
            <button type="submit" value="Ingresar" id="btn_enviar" name="iniciar" class="btn btn-success form-control">Enviar</button>
    </form>
</div>
<script type="text/javascript" src="../../Js/tp2ej3b.js"></script>



<?php
include_once '../../Estructura/footer.php';
?>



<script>
    //seleccionamos el formulario
    var formulario = document.getElementById("formularioLogin")
    //definimos un evento para validar
    formulario.addEventListener('submit', evento => {
        if (!formulario.checkValidity()) {//revisamos si algun campo es invalido
            event.preventDefault()
            event.stopPropagation()
            }
        formulario.classList.add('was-validated')
    })

    var loginModal = new bootstrap.Modal("#login")

    //mostramos el modal apenas carga la pagina
    window.addEventListener("DOMContentLoaded", () => {
        loginModal.show()
    })



</script>  



echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){


<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio1.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>