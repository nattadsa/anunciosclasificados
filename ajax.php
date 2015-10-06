<?php


session_start();

include("adclass.php");

if(isset($_POST["nuevoTitulo"])){

$noarreglo= $_POST["noArreglo"];

$nuevotitulo= $_POST["nuevoTitulo"];

$idAnuncio= $_SESSION["arrayid"][$noarreglo];

$editarAnuncio= new Anuncios();

$editarAnuncio->editarTituloAnuncioUsuario($idAnuncio,$nuevotitulo);

}

if(isset($_POST["nuevoTexto"])){

$noarreglo= $_POST["noArreglo"];

$nuevotexto= $_POST["nuevoTexto"];

$idAnuncio= $_SESSION["arrayid"][$noarreglo];

$editartextoAnuncio= new Anuncios();

$editartextoAnuncio->editarTextoAnuncioUsuario($idAnuncio,$nuevotexto);

}

echo "Ha editado su anuncio exitosamente."

?>