<?php

include("header.php");

include("clases.php");

include("adclass.php");

include("confirmacionlog.php");

session_start();




echo '<div class="row welmsg">';

echo '<div class="col-md-12">';

echo "<h3>Bienvenido al sistema " .", ".  $_SESSION['loginuser']->nombre . " " . $_SESSION['loginuser']->apellido . ".</h3>"  . "<br>";

echo '</div>';

echo '</div>';








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



















































