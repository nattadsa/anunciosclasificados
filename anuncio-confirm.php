<?php

include("header.php");

include("clases.php");

include("confirmacionlog.php");

include("adclass.php");

session_start();

$nuevoanuncio = new Anuncios();


$autor = $_SESSION['loginuser']->nombre . " " . $_SESSION['loginuser']->apellido;




$posttitulo = $_POST["titulo_txt"];
$posttexto = $_POST["texto_txt"];



$nuevoanuncio->crearDatosAnuncio($posttitulo,$posttexto,$autor);

$_SESSION['anuncionew'] = $nuevoanuncio;





?>


<div class="row welmsg">

<div class="col-md-12">

 <h3>Verifique los datos de su publicacion.</h3>

</div>

 </div>


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