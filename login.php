<?php



$postusuario =$_POST["usuario_txt"];
$postpass =$_POST["pass_txt"];

include("clases.php");

$loginUsuario = new Usuario();

if($loginUsuario->loginusuario($postusuario,$postpass)){

$datos = $loginUsuario->obtenerDatos($postusuario);

$loginUsuario->registro($datos["nombre"],$datos["apellido"],$datos["email"],$datos["usuario"],$datos["password"]);

session_start();
$_SESSION['autenticado'] = true;
$_SESSION['loginuser']= $loginUsuario;

header("Location:home-usuario.php");


}









?>








