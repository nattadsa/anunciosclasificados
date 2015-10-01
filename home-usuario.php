<?php

include("header.php");

include("clases.php");

include("adclass.php");

include("confirmacionlog.php");

session_start();

echo "Bienvenido al sistema " . $_SESSION['loginuser']->nombre . " " . $_SESSION['loginuser']->apellido . "<br>";










?>

<h2><a href="crear-anuncio.php">Crear anuncio</a></h2>

<?php


if($_GET["anuncio"]=="publicado"){


echo "Su anuncio fué publicado con éxito";

}



$consultaads = new Anuncios();

$consultaads->obtenerAnunciosDeBd();






?>







<?php include("footer.php"); ?>



















































