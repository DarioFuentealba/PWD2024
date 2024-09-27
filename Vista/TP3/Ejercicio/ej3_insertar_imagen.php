<?php
    $titulo = "TP 3 - Ejercicio 3"; //Titulo en la pestania
    include_once '../../Estructura/header.php';
?>

<!-- Titulo en la pagina con fondo violeta -->
<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<!-- Contenedor -->
<div class="container full-height text-light">
    <!-- Cuadro sombreado que contiene a todo -->
    <div class="form-container rounded p-4 shadow-lg  mt-5">
        <!-- Titulo dentro del cuadro con imagen -->
        <h3 class="mb-4 text-primary"><i class="bi bi-pencil-square"></i>Cinem@s</h3>

        <!-- Formulario -->
        <form action="../Accion/ej3_insertar_imagen_accion.php" method="post" id='cine' class="needs-validation" enctype="multipart/form-data" novalidate>

            <!-- Fila 1 -->
            <div class="row mb-3">
                <!-- Titulo de la pelicula -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">T&iacute;tulo: </label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Este campo es obligatorio</div>
                    </div>
                </div>

                <!-- Actores -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="actores" class="form-label">Actores: </label>
                        <input type="text" class="form-control" id="actores" name="actores" placeholder="Actores" pattern="[A-Za-z\s]+" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Este campo es obligatorio</div>
                    </div>
                </div>
            </div>

            <!-- Fila 2 -->
            <div class="row mb-3">
                <!-- Director -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="director" class="form-label">Director: </label>
                        <input type="text" class="form-control" id="director" name="director" placeholder="Director" pattern="[A-Za-z\s]+" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Este campo es obligatorio</div>
                    </div>
                </div>

                <!-- Guion -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="guion" class="form-label">Gui&oacute;n: </label>
                        <input type="text" class="form-control" id="guion" name="guion" placeholder="Guion" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Este campo es obligatorio</div>
                    </div>
                </div>
            </div>
            
            <!-- Fila 3 -->
            <div class="row mb-3">
                <!-- Produccion -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="produccion" class="form-label">Producci&oacute;n: </label>
                        <input type="text" class="form-control" id="produccion" name="produccion" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Este campo es obligatorio</div>
                    </div>
                </div>

                <!-- Anio -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="anio" class="form-label">A&ntilde;o:</label>
                        <input type="text" class="form-control" id="anio" name="anio" maxlength="4" pattern="\d{4}"   required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Por favor, ingrese un a&ntilde;o v&aacute;lido (4 d&iacute;gitos).</div>
                    </div>
                </div>
            </div>

            <!-- Fila 4 -->
            <div class="row mb-3">
                <!-- Nacionalidad -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nacionalidad" class="form-label">Nacionalidad: </label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" pattern="[A-Za-z\s]+" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Este campo es obligatorio</div>
                    </div>
                </div>

                <!--Genero -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="genero" class="form-label">G&eacute;nero:</label>
                        <select class="form-select" id="genero" name="genero" required>
                            <option value="" disabled selected>Seleccione un g&eacute;nero</option>
                            <option value="drama">Drama</option>
                            <option value="comedia">Comedia</option>
                            <option value="terror">Terror</option>
                            <option value="romance">Romance</option>
                            <option value="suspenso">Suspenso</option>
                            <option value="otras">Otras</option>
                        </select>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Este campo es obligatorio</div>
                    </div>
                </div>
            </div>
            
            <!-- Fila 5 - Radio buttons -->
            <div class="row mb-3">
                <!-- Duracion de la pelicula -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="duracion" class="form-label">Duraci&oacute;n (minutos): </label>
                            <input type="text" class="form-control" id="duracion" name="duracion"  maxlength="3" pattern="\d{1,3}" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Este campo es obligatorio</div>
                    </div>
                </div>

                <!-- Restriccion de edad -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <strong>Restricci&oacute;n de edad </strong><br>

                        <!-- Para todo publico -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="restriccion" id="restriccion_a" value="a" required>
                            <label class="form-check-label" for="restriccion_a">Todos los p&uacute;blicos</label>
                        </div>

                        <!-- Mayores de 7 anios -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="restriccion" id="restriccion_b" value="b">
                            <label class="form-check-label" for="restriccion_b">Mayores de 7 a&ntilde;os</label>
                        </div>

                        <!-- Mayores de 18 anios -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="restriccion" id="restriccion_c" value="c">
                            <label class="form-check-label" for="restriccion_c">Mayores de 18 a&ntilde;os</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fila 6 -->
            <div class="mb-3">
                <!-- Sinopsis -->
                <label for="sinopsis" class="form-label">Sin&oacute;psis:</label>
                <textarea class="form-control" id="sinopsis" name="sinopsis" maxlength="100" required></textarea>
                <div class="valid-feedback">¡Se ve bien!</div>
                <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>

            <!-- Fila 7 -->
            <div class="mb-3">
                <!-- Insertar imagen de la pelicula -->
                <label for="imagen" class="form-control">Seleccione una imagen para la pel&iacute;cula </label>
                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                <div class="valid-feedback">¡Se ve bien!</div>
                <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>

            <!-- Botones "Enviar" y "Borrar" -->
            <div id="botones" class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                <button type="reset" class="btn btn-secondary ms-2" name="reset" >Borrar</button>
            </div>
        </form>
    </div>
</div>

<!-- Mas JS -->
<script>
  /*  $(document).ready(function(){
        $("#anio").keypress(function(){
            validarAnio(this);
        });
    });*/
    document.getElementById("anio").addEventListener("blur", function(){ validarAnio(this);});
</script>

<!-- Link JS vlidaciones -->
<script type="text/javascript" src="../../Js/tp2ej4.js"></script>

<!-- Footer -->
<?php
include_once '../../Estructura/footer.php';
?>