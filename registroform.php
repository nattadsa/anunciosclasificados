<?php include("header.php");


error_reporting(E_ALL ^ E_NOTICE);

if($_GET["datos"]=="registrados"){

 echo "Ya existe un usuario con su correo o nombre de usuario registrado, intente nuevamente con otro correo o usuario.";


}







if($_GET["vd"]=="si") {


	echo "Ingrese sus datos nuevamente";
	


	
}


 ?>






<form  name="formulario_txt" method="POST" action="registro.php" enctype="application/x-www-form-urlencoded">

<fieldset>



<table>

<tr>
<th><label for="nombre">Nombre: </label></th>
<td><input type="text" id="nombre" name="nombre_txt"/></td>
</tr>


<tr>
<th><label for="apellido">Apellido: </label></th>
<td><input type="text" id="apellido" name="apellido_txt"/></td>
</tr>


<tr>
<th><label for="correoe">Correo electrónico: </label></th>
<td><input type="text" id="correoe" name="correoe_txt"/> </td>
</tr>

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