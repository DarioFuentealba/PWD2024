<?php
$titulo = "TP 1 - Ejercicio 4";
include_once '../../Estructura/header.php';
echo '<div class="divtitulo"> <h1>';
echo $titulo.'</h1></div>';

if(!empty(data_submitted())){
    $recibido = data_submitted();
    $objpersona = new PersonaTp1($recibido);

    $mayor = "";

    if ($objpersona->mayorEdad() == "Soy"){
        $mayor = "Soy ";
    }else{
        $mayor = "No soy ";
    }

    ?>
    
    <div class="divform">
        <?php 
            echo "Hola, yo soy ".$objpersona->getNombre()." ".$objpersona->getApellido()." tengo ".$objpersona->getEdad()." años y vivo en la calle ".$objpersona->getDireccion(); 
            echo ".  " .$mayor . " mayor de edad."; 
        ?>
        <div id="botones" class="d-flex justify-content-center">
            <a href="../Ejercicio/ejercicio4.php" class="btn-tp1" role="button">Volver</a>
        </div>
    </div>

<?php
}else{
    echo '<div class="divform"><p>NO HAY DATOS</p><br>
    <div><a href="../Ejercicio/ejercicio4.php" class="btn-tp1" role="button">Volver</a></div></div>';
}
include_once '../../Estructura/footer.php';
?>