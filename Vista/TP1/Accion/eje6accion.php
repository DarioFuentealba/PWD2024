<?php
$titulo = "TP 1 - Ejercicio 6";
include_once '../../Estructura/header.php';
echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $recibido = data_submitted();
    $objpersona = new PersonaTp1($recibido);

    foreach ($recibido as $indice => $valor) {
        if ($valor=="") break	;
        if ($indice == "d1" || $indice == "d2" || $indice == "d3" || $indice == "d4" || $indice == "d5" || $indice == "d6"){
            $objpersona->agregarDeporte($valor);
        }
    }

    $cadena = "Hola, yo soy ".$objpersona->getNombre()." ".$objpersona->getApellido()." tengo ".$objpersona->getEdad()." años y vivo en la calle ".$objpersona->getDireccion().
    ".  " . $objpersona->mayorEdad() . " mayor de edad."."<br>Estudios cursados: " . $objpersona->mostrarEstudios() . "<br> Soy de sexo " . $objpersona->mostrarSexo(). "<br>";
    $cadena .= "Mis deportes preferidos son: " . $objpersona->mostrarDeportes() . "<br>";
    ?>
    <div class="divform">
        <?php 
            echo $cadena;
        ?>
        <div id="botones" class="d-flex justify-content-center">
            <a href="../Ejercicio/ejercicio6.php" class="btn-tp1" role="button">Volver</a>
        </div>
    </div>


<?php
}else{
    echo '<div class="divform"><p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio6.php" class="btn-tp1" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>