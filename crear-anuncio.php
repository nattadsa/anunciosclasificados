<?php

include("header.php");

include("clases.php");

include("confirmacionlog.php");

include("adclass.php");


session_start();














?>

<div class="row welmsg">

<div class="col-md-12">

 <h3>Cree su anuncio.</h3>

</div>

 </div>

 <br><br>

 <?php 


 if($_GET["anuncio"]=="revisar"){


echo "Por favor revise los datos de su anuncio";

}

 ?>



<div class="row" id="anunciosformrow">

<div class="col-md-4"></div>

<div class="col-md-4" id="adform">

<form name="anuncio_frm" id="anunciofrm" method="POST" action="anuncio-confirm.php" enctype="application/x-www-form-urlencoded">

<table>

<tr>

<th><label for="titulo">Titulo: </label></th><td><input type="text" name="titulo_txt" id="titulo"/></td>

</tr>


<tr>

<th><label for="texto">Anuncio: </label></th><td><textarea name="texto_txt" id="texto"  style="height:200px"></textarea>	</td>

</tr>
 
<tr>

<th></th><td id="adsendbutton"><input type="submit" id="enviar-anuncio" name="enviar-anuncio-btn" value="enviar"/></td>
	
</tr>

</table>


</form>

</div>

<div class="col-md-4"></div>

</div>

<br>











<?php include("footer.php");?>