<?php include("header.php");


error_reporting(E_ALL ^ E_NOTICE);

 ?>

 <div class="row welmsg">

<div class="col-md-12">

 <h3>Ingrese sus credenciales</h3>

</div>

 </div>


<div class="row" id="logform">

<div class="col-md-4"></div>

<div class="col-md-4">

<form  name="formulario_txt" method="POST" action="login.php" enctype="application/x-www-form-urlencoded">

<fieldset>



<table>






<tr>
<th><label for="usuario">Usuario: </label></th>
<td><input type="text" id="usuario" name="usuario_txt"/></td>
</tr>

<tr>
<th><label for="pass">Password: </label></th>
<td><input type="password" id="pass" name="pass_txt"/></td>
</tr>

<tr>
<td><input type="submit" id="btnenviar" name="enviar_txt" value="enviar"/></td>
</tr>
</table>


</fieldset>




</form>





</div>


<div class="col-md-4"></div>

</div>

<?php

if($_GET["usuario"]=="noencontrado"){

echo "Datos de ingreso incorrectos, verífiquelos o registrese antes de ingresar al sistema.";

}

?>













<?php include("footer.php"); ?>