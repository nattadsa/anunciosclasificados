<?php

include("header.php");

include("clases.php");

include("confirmacionlog.php");

include("adclass.php");

include_once $_SERVER['DOCUMENT_ROOT'] . '/phpclases/securimage/securimage.php';

 

$securimage = new Securimage();

if ($securimage->check($_POST['captcha_code']) == false) {
  // the code was incorrect
  // you should handle the error so that the form processor doesn't continue

  // or you can use the following code if there is no validation or you do not know how
  echo "El código de seguridad que introdujo es incorrecto<br /><br />";
  echo "Por favor <a href='javascript:history.go(-1)'>regrese</a> e intente nuevamente";
  exit;
}


session_start();

$nuevoanuncio = new Anuncios();


$autor = $_SESSION['loginuser']->nombre . " " . $_SESSION['loginuser']->apellido;
$autormail = $_SESSION['loginuser']->getcorreo();




$posttitulo = $_POST["titulo_txt"];
$posttexto = $_POST["texto_txt"];



$nuevoanuncio->crearDatosAnuncio($posttitulo,$posttexto,$autor,$autormail);

$_SESSION['anuncionew'] = $nuevoanuncio;





?>





<?php

$nuevoanuncio->mostrarDatosAnuncio(); 




echo "<br>¿Desea publicar estos datos?";

echo '<form name="confirmacionanuncios_frm" id="confirmformanun" action="validacionanuncio.php"  method="GET" enctype="application/x-www-form-urlencoded">
  
<input type="submit" id="aceptarbtnan" name="aceptarbtnan" value="aceptar"/>

<input type="submit" id="cancelarbtnan" name="cancelarbtnan" value="cancelar"/></form>';



'</div>';
'</div>';



?>

<?php include("footer.php") ?>