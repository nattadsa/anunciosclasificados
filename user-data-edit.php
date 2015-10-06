<?php



include("clases.php");

include("adclass.php");

session_start();






$usuario = new Usuario();


if(isset($_POST["nuevoNombre"])){





echo '<img src="img/ok.png"/>';

}

if(isset($_POST["nuevoApellido"])){





echo '<img src="img/ok.png"/>';

}

if(isset($_POST["nuevoUsuario"])){


$nuevoUsuario= $_POST["nuevoUsuario"];

if($usuario->buscarUsuario($nuevoUsuario)==true && $nuevoUsuario != $_SESSION["useruactual"] ){




echo '<img src="img/prohibido.png" class="validacionu"/><p class="validacionu">El usuario que está ingresando ya está registrado en sistema por otro usuario</p>';

} else {

echo '<img src="img/ok.png" class="validacionuok"/><p class="validacionuok">Ok</p>';


}



}


if(isset($_POST["nuevoCorreo"])){

$nuevoCorreo= $_POST["nuevoCorreo"];

if($usuario->buscarCorreo($nuevoCorreo)==true && $nuevoCorreo != $_SESSION["correouactual"] ){




echo '<img src="img/prohibido.png" class="validacionc"/><p class="validacionc">El correo electrónico que está ingresando ya está registrado en sistema por otro usuario</p>' ;

} else {

echo '<img src="img/ok.png" class="validacioncok"/><p class="validacioncok">Ok</p>';


}







}



?>