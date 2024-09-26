<?php
$titulo = "TP 2 - Ejercicio 4"; //Titulo en la pestania
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

<div class="container my-4">
    <div class="container my-4 p-4 text-success border border-success rounded" style="background-color: #d4edda;"> <!-- Verde claro personalizado -->

        <!-- Títulos dentro del cuadro donde están las respuestas -->
        <h3 class="mb-4 text-primary">Cinem@s</h3>

        <div class="contenedor_imagent_ej3_TP3">
            <!-- Contenedor para flexbox -->
            <div class="content-wrapper"> <!-- Nuevo contenedor para flexbox -->
                <div class="mb-3 image-section">
                    <?php
                        // Mostrar imagen si se ha subido
                        if($informacion["imagen"] !== "error. No se ha subido ninguna foto")
                        {
                            // Definir la ruta donde se guardará la imagen
                            $rutaDestino = '../../../Archivos/' . $informacion["imagen"];

                            // Intentar mover el archivo desde la carpeta temporal a la ruta de destino
                            if(move_uploaded_file($array_img["imagen"]["tmp_name"], $rutaDestino))
                            {
                                echo "<img src='$rutaDestino' style='height:400px; width:300px'>" . "<br>";
                            }else{
                                echo "<h3 align='center'>ERROR: no se pudo cargar el archivo</h3>";
                            }
                        } else {
                            echo "<h3>" . $informacion["imagen"] . "</h3>";
                        }
                    ?>
                </div>

                <!-- Datos de la película -->
                <div class="mb-3 data-section">
                    <?php
                        // Titulo
                        echo "<strong>"."Titulo: "."</strong>".$informacion["titulo"]. "<br>";

                        // Actores
                        echo "<strong>"."Actores: "."</strong>".$informacion["actores"] . "<br>";

                        // Director
                        echo "<strong>"."Director: "."</strong>".$informacion["director"] . "<br>";

                        // Guion
                        echo "<strong>"."Guion: "."</strong>".$informacion["guion"] . "<br>";

                        // Producción
                        echo "<strong>"."Producción: "."</strong>".$informacion["produccion"] . "<br>";

                        // Año
                        echo "<strong>"."Año: "."</strong>".$informacion["anio"] . "<br>";

                        // Nacionalidad
                        echo "<strong>"."Nacionalidad: "."</strong>".$informacion["nacionalidad"] . "<br>";

                        // Género
                        echo "<strong>"."Género: "."</strong>".$informacion["genero"] . "<br>";

                        // Duración
                        echo "<strong>"."Duración: "."</strong>".$informacion["duracion"] . "<br>";

                        // Restricción de edad
                        if ($informacion["restriccion"] == "a")
                        {
                            echo "<strong>"."Restricción de edad:"."</strong>"." Todo los públicos <br>";
                        }elseif($informacion["restriccion"] == "b")
                        {
                            echo "<strong>"."Restricción de edad:"."</strong>"." Mayores de 7 años <br>";
                        }else{
                            echo "<strong>"."Restricción de edad: "."</strong>"."Mayores de 18 años <br>";
                        }

                        // Sinopsis
                        echo "<strong>"."Sinopsis: "."</strong>".$informacion["sinopsis"]."<br>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}else{
    echo '<div class="divform"> <p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ej3_insertar_imagen.php" class="btn btn-success" role="button">Volver</a></div></div>';
}
?>

<!-- Boton volver -->
<br><a href="../Ejercicio/ej3_insertar_imagen.php" class="btn btn-primary m-3" role="button">Volver</a><br>

<?php
//Footer
include_once '../../Estructura/footer.php';
?>