<?php

include("clases.php");


session_start();

$usuarioactual  = $_SESSION['loginuser'];

$newName= $_POST["newEditname"];

$newLast= $_POST["newEditLast"];

$newUser=$_POST["newEditUser"];

$newEmail=$_POST["newEditMail"];

$usuarioactual->actualizarDatos($newName,$newLast,$newUser,$newEmail);







?>