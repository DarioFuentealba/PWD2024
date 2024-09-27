<?php
$titulo = "TP 2 - Ejercicio 3";
include_once '../../Estructura/header.php';
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<div class="divform rounded p-4 shadow">
    <h3 class="mb-3">Member Login</h3>
    <form action="../Accion/eje3accion.php" method="post" id='form3' class="needs-validation" novalidate>                    
            <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person" style="font-size: 22px; color: black;"></i></span>
                <input type="text" class="form-control" name="usuario" id="usuario" required placeholder="Usuario" >
                <div class="valid-feedback">¡Se ve bien!</div>
                <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock-fill" style="font-size: 22px;"></i></span>
                <input type="password" class="form-control" id="clave" name="clave" required placeholder="Clave" >
                <div class="valid-feedback">¡Se ve bien!</div>
                <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
            <button type="submit" value="Ingresar" id="btn_enviar" name="iniciar" class="btn btn-success form-control">Enviar</button>
    </form>
</div>

<?php
include_once '../../Estructura/footer.php';
?>
<!-- BOOTSTRAP con las validaciones de los campos -->
<script type="text/javascript" src="../../Js/bootstrap-validation.js"></script> 
<script>
    document.getElementById("form3").addEventListener("submit", function(event) {
    var clave = document.getElementById("clave");
    var usuario = document.getElementById("usuario");
    if (!validarClave(clave) || !validarNombre(usuario)) {
      event.preventDefault();  // Evitar que se envíe el formulario si la validación falla
    }
    });
</script>