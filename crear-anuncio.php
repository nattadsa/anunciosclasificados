<?php

include("header.php");

include("clases.php");

include("confirmacionlog.php");

include("adclass.php");


session_start();


$nuevoanuncio = new Anuncios();


$autor = $_SESSION['loginuser']->nombre . " " . $_SESSION['loginuser']->apellido;


if($_GET["anuncio"]=="revisar"){


echo "Por favor revise los datos de su anuncio";

}








?>



<form name="anuncio_frm" id="anunciofrm" method="POST" enctype="application/x-www-form-urlencoded">

<table>

<tr>

<th><label for="titulo">Titulo: </label></th><td><input type="text" name="titulo_txt" id="titulo"/></td>

</tr>


<tr>

<th><label for="texto">Anuncio: </label></th><td><textarea name="texto_txt" id="texto"  style="height:200px"></textarea>	</td>

</tr>
 
<tr>

<td><input type="submit" id="enviar-anuncio" name="enviar-anuncio-btn" value="enviar"/></td>
	
</tr>

</table>


</form>

<br>

<?php

if (isset($_POST["titulo_txt"])){

$posttitulo = $_POST["titulo_txt"];
$posttexto = $_POST["texto_txt"];



$nuevoanuncio->crearDatosAnuncio($posttitulo,$posttexto,$autor);

$_SESSION['anuncionew'] = $nuevoanuncio ;

$nuevoanuncio->mostrarDatosAnuncio(); 


echo "<br>¿Desea publicar estos datos?";

echo '<form name="confirmacionanuncios_frm" id="confirmformanun" action="validacionanuncio.php"  method="GET" enctype="application/x-www-form-urlencoded">
  
<input type="submit" id="aceptarbtnan" name="aceptarbtnan" value="aceptar"/>

<input type="submit" id="cancelarbtnan" name="cancelarbtnan" value="cancelar"/></form>';



}








?>










<?php include("footer.php");?>