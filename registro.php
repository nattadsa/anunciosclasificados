 <?php include("header.php");?>

 <?php

$postnombre = $_POST["nombre_txt"];
$postapellido = $_POST["apellido_txt"];
$postcorreo = $_POST["correoe_txt"];
$postusuario =$_POST["usuario_txt"];
$postpass =$_POST["pass_txt"];

include("clases.php");



$usuarionuevo = new Usuario();
$usuarionuevo->registro($postnombre,$postapellido,$postcorreo,$postusuario,$postpass);
$usuarionuevo->mostrardatos();

session_start();

$_SESSION['usuarionuevo']  = $usuarionuevo;






?>


<p>¿Sus datos están correctos?</p>

<form name="confirmacion_frm" id="confirmform" action="validacion.php" method="GET" enctype="application/x-www-form-urlencoded">
  
<input type="submit" id="aceptarbtn" name="aceptarbtn" value="aceptar"/>

<input type="submit" id="cancelarbtn" name="cancelarbtn" value="cancelar"/>






</form>











<?php include("footer.php"); ?>
