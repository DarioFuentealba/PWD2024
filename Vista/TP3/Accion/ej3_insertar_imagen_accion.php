<?php
$titulo = "TP 3 - Ejercicio 4"; //Titulo en la pestania
include_once '../../Estructura/header.php';
include_once '../../../Control/TP3/Ej3_insertar_imagen.php';

//Titulo en la pagina
echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted()))
{
    // Recolectar datos del formulario y archivos
    $datos_form = $_POST;
    $array_img = $_FILES;
    $datos = data_submitted();
    $objCine = new Ej3_insertar_imagen(); //Creo el objeto cine

    // Llamar a la función y obtener la información
    $informacion = $objCine->cinema($datos_form, $array_img);

    /*
    var_dump($datos_form); // Agrega esto para verificar los datos
    echo "\n\n";
    var_dump($array_img);  // Agrega esto para verificar los archivos
    */
    ?>

<div class="container_cine my-4">
    <div class="container my-4 p-4"> <!-- Verde claro personalizado -->

        <!-- Títulos dentro del cuadro donde están las respuestas -->
        <h3 class="mb-4 text-light">Cinem@s</h3>

        <div class="contenedor_imagent_ej3_TP3">
            <!-- Contenedor para flexbox -->
            <div class="d-flex justify-content-between align-items-start"> <!-- Cambiado a Flexbox -->

                <!-- Datos de la película -->
                <div class="mb-3 w-50 data-section text-light">
                    <?php
                        echo "<strong>"."Titulo: "."</strong>".$informacion["titulo"]. "<br>";
                        echo "<strong>"."Actores: "."</strong>".$informacion["actores"] . "<br>";
                        echo "<strong>"."Director: "."</strong>".$informacion["director"] . "<br>";
                        echo "<strong>"."Guion: "."</strong>".$informacion["guion"] . "<br>";
                        echo "<strong>"."Producción: "."</strong>".$informacion["produccion"] . "<br>";
                        echo "<strong>"."Año: "."</strong>".$informacion["anio"] . "<br>";
                        echo "<strong>"."Nacionalidad: "."</strong>".$informacion["nacionalidad"] . "<br>";
                        echo "<strong>"."Género: "."</strong>".$informacion["genero"] . "<br>";
                        echo "<strong>"."Duración: "."</strong>".$informacion["duracion"] . "<br>";

                        if ($informacion["restriccion"] == "a") {
                            echo "<strong>"."Restricción de edad:"."</strong>"." Todo los públicos <br>";
                        } elseif($informacion["restriccion"] == "b") {
                            echo "<strong>"."Restricción de edad:"."</strong>"." Mayores de 7 años <br>";
                        } else {
                            echo "<strong>"."Restricción de edad: "."</strong>"."Mayores de 18 años <br>";
                        }

                        echo "<strong>"."Sinopsis: "."</strong>".$informacion["sinopsis"]."<br>";
                    ?>
                </div>

                <!-- Imagen a la derecha -->
                <div class="mb-3 w-50 image-section text-end"> <!-- Cambiado a w-50 y text-end -->
                    <?php
                        if($informacion["imagen"] !== "error. No se ha subido ninguna foto") {
                            $rutaDestino = '../../../Archivos/' . $informacion["imagen"];
                            if(move_uploaded_file($array_img["imagen"]["tmp_name"], $rutaDestino)) {
                                echo "<img src='$rutaDestino' style='height:400px; width:300px'>" . "<br>";
                            } else {
                                echo "<h3 align='center'>ERROR: no se pudo cargar el archivo</h3>";
                            }
                        } else {
                            echo "<h3>" . $informacion["imagen"] . "</h3>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ej3_insertar_imagen.php" class="btn-tp3" role="button">Volver</a></div></div>';
}
?>

<!-- Boton volver -->
<br>
<div id="botones" class="d-flex justify-content-center">
    <a href="../Ejercicio/ej3_insertar_imagen.php" class="btn-tp3  mt-5">Volver</a><br>
</div>

<?php
//Footer
include_once '../../Estructura/footer.php';
?>