<?php

session_start();

if(!$_SESSION['autenticado']){

 
header("Location:salir.php");


}










?>