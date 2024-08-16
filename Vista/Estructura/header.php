<?php
  include_once "../../../configuracion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo "<title>". $titulo . "</title>"; ?>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--LINK BOOSTRAP -->
  <link rel="stylesheet" href="../../Librerias/bootstrap5/css/bootstrap.min.css">
  
  <!--LINK ICONOS BOOTSTRAP  -->
  <link rel="stylesheet" href="../../Librerias/node_modules/bootstrap-icons/font/bootstrap-icons.css">
  
  <!--LINK JS - BOOTSTRAP-->
  <script src="../../Librerias/bootstrap5/js/bootstrap.min.js"></script>
  
  <!--LINK JS - JQUERY-->
  <script src="../../Librerias/node_modules/jquery/dist/jquery.min.js"></script>
  
  <!-- LINK CSS -->
  <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
  <!-- LINK JS -->
  <script src="../../Js/funciones.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../../Inicio/Principal/principal.php">Grupo X</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav"> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">TP N° 1</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../../TP1/Ejercicio/ejercicio1.php">Ejercicio 1</a></li>
            <li><a class="dropdown-item" href="../../TP1/Ejercicio/ejercicio2.php">Ejercicio 2</a></li>
            <li><a class="dropdown-item" href="../../TP1/Ejercicio/ejercicio3.php">Ejercicio 3</a></li>
            <li><a class="dropdown-item" href="../../TP1/Ejercicio/ejercicio4.php">Ejercicio 4</a></li>
            <li><a class="dropdown-item" href="../../TP1/Ejercicio/ejercicio5.php">Ejercicio 5</a></li>
            <li><a class="dropdown-item" href="../../TP1/Ejercicio/ejercicio6.php">Ejercicio 6</a></li>
            <li><a class="dropdown-item" href="../../TP1/Ejercicio/ejercicio7.php">Ejercicio 7</a></li>
            <li><a class="dropdown-item" href="../../TP1/Ejercicio/ejercicio8.php">Ejercicio 8</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">TP N° 2</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../../TP2/Ejercicio/ejercicio1.php">Ejercicio 1</a></li>
            <li><a class="dropdown-item" href="../../TP2/Ejercicio/ejercicio2.php">Ejercicio 2</a></li>
            <li><a class="dropdown-item" href="../../TP2/Ejercicio/ejercicio3.php">Ejercicio 3</a></li>
            <li><a class="dropdown-item" href="../../TP2/Ejercicio/ejercicio4.php">Ejercicio 4</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">TP N° 3</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../../TP3/Ejercicio/ejercicio1.php">Ejercicio 1</a></li>
            <li><a class="dropdown-item" href="../../TP3/Ejercicio/ejercicio2.php">Ejercicio 2</a></li>
            <li><a class="dropdown-item" href="../../TP3/Ejercicio/ejercicio3.php">Ejercicio 3</a></li>
            <li><a class="dropdown-item" href="../../TP3/Ejercicio/ejercicio4.php">Ejercicio 4</a></li>
            <li><a class="dropdown-item" href="../../TP3/Ejercicio/ejercicio5.php">Ejercicio 5</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

