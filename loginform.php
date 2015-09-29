<?php include("header.php"); ?>


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



<a href="salir.php">Salir del sistema</a>















<?php include("footer.php"); ?>