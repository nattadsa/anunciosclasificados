<?php



include("clases.php");

include("adclass.php");

include("confirmacionlog.php");

session_start();

include("header.php");













?>




<h2 id="editstatus"></h2>

<?php


if($_GET["anuncio"]=="publicado"){


echo "Su anuncio fué publicado con éxito";

}





$consultaads = new Anuncios();

$consultaads->obtenerAnunciosDeBd();






?>







<?php include("footer.php"); ?>



















































