<?php 

	



include("adclass.php");



session_start();

if(isset($_GET["aceptarbtnan"])){


$_SESSION['anuncionew']->registrarAnuncioBd();

header("Location:home-usuario.php?anuncio=publicado");









} else if (isset($_GET["cancelarbtnan"])){


header("Location:crear-anuncio.php?anuncio=revisar");



}










?>

