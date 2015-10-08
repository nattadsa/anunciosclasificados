<?php



include("clases.php");

include("adclass.php");

session_start();






$usuario = new Usuario();

if(isset($_POST["regUsuario"])){


$regUsuario= $_POST["regUsuario"];

if($usuario->buscarUsuario($regUsuario)==true){




echo '<img src="img/prohibido.png" class="validacionu"/><p class="validacionu">El usuario que está ingresando ya está registrado en sistema por otro usuario</p>';

} else {

echo '<img src="img/ok.png" class="validacionuok"/><p class="validacionuok">Ok</p>';


}



}

if(isset($_POST["regCorreoe"])){


$regCorreoe= $_POST["regCorreoe"];

if($usuario->buscarCorreo($regCorreoe)==true){




echo '<img src="img/prohibido.png" class="validacionu"/><p class="validacionu">El usuario que está ingresando ya está registrado en sistema por otro usuario</p>';

} else {

echo '<img src="img/ok.png" class="validacionuok"/><p class="validacionuok">Ok</p>';


}



}









if(isset($_POST["nuevoNombre"])){





echo '<img src="img/ok.png"/>';

}

if(isset($_POST["nuevoApellido"])){





echo '<img src="img/ok.png"/>';

}

if(isset($_POST["nuevoUsuario"])){


$nuevoUsuario= $_POST["nuevoUsuario"];

if($usuario->buscarUsuario($nuevoUsuario)==true && $nuevoUsuario != $_SESSION["useruactual"] ){

$responseArray = array(imagen=>'<img src="img/prohibido.png" class="validacionu"/><p class="validacionu">El usuario que está ingresando ya está registrado en sistema por otro usuario</p>',stat=>'false');


echo json_encode($responseArray);

} else {

$responseArray = array("imagen"=>'<img src="img/ok.png" class="validacionuok" id="vdok"/><p class="validacionuok">Ok</p>',"stat"=>'true');

echo json_encode($responseArray);



}



}






?>