<?php 

include("clases.php");	
session_start();

if(isset($_GET["aceptarbtn"])){





$_SESSION['usuarionuevo']->registrodb();




} else if (isset($_GET["cancelarbtn"])){


header("Location:registroform.php?vd=si");



}










?>








