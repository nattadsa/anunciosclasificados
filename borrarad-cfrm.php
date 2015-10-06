<?php 


include("header.php");

include("clases.php");

include("adclass.php");

include("confirmacionlog.php");

session_start();



if(isset($_GET["andel"])){


$index = $_GET["andel"];
$idandel = $_SESSION["arrayid"][$index];

$_SESSION["objetoaborrar"]->mostrarAnunciosideliminar($idandel);

$_SESSION["idandel"] = $idandel;






}

if(isset($_GET["acptrdelad"])){


$_SESSION["objetoaborrar"]->borrarAnuncioUsuario($_SESSION["idandel"]);





}

if(isset($_GET["canceldelad"])){


header ("Location: mis-anuncios.php");




}











?>























<?php include("footer.php"); ?>