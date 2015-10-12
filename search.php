<?php

include("clases.php");

include("adclass.php");

session_start();


$keyword = $_POST["searchQuery"];

$anuncios = new Anuncios();


$anuncios->buscarAnuncios($keyword);







?>