<?php



include("clases.php");

include("confirmacionlog.php");

session_start();

echo "Bienvenido al sistema " . $_SESSION['loginuser']->nombre . " " . $_SESSION['loginuser']->apellido . "<br>";










?>

<h2><a href="crear-anuncio.php">Crear anuncio</a></h2>






<a href="salir.php">Salir del sistema</a>