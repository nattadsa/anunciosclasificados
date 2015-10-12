<?php

include("header.php");

include("clases.php");

include("confirmacionlog.php");

include("adclass.php");


session_start();














?>


 
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

<th></th><td><img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" /></td>

</tr>



<tr>
<th>Introduzca los caracteres mostrados en la imagen</th><td><input type="text" name="captcha_code" size="10" maxlength="6" style="width:100%" /><a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php' + Math.random(); return false"></a></td>
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