<?php include("header.php");





 ?>

 <div class="row welmsg">

<div class="col-md-12">

 <p>Ingrese sus datos para registrarse en el sistema.</p>

</div>

 </div>




<div class="row" id="regform">

<div class="col-md-2"></div>

<div class="col-md-6">


<form  name="formulario_txt" method="POST" action="registro.php" enctype="application/x-www-form-urlencoded">

<fieldset>



<table>

<tr>
<th><label for="nombre">Nombre: </label></th>
<td><input type="name" id="nombre" name="nombre_txt"/ required></td>
</tr>


<tr>
<th><label for="apellido">Apellido: </label></th>
<td><input type="name" id="apellido" name="apellido_txt" required/></td>
</tr>


<tr>
<th><label for="correoe">Correo electrónico: </label></th>
<td><input class="validarc" type="email" id="correoe" name="correoe_txt" required/><div id="regcorreoestatus" class="validarc"></div> </td>
</tr>

<tr>
<th><label for="usuario">Usuario: </label></th>
<td><input class="validar" type="name" id="usuario" name="usuario_txt" required/><div id="reguserstatus" class="validar"></div></td>
</tr>

<tr>
<th><label for="pass">Password: </label></th>
<td><input type="password" id="pass" name="pass_txt"required/></td>
</tr>

<tr>
<td><input type="submit" id="btnenviar" name="enviar_txt" value="enviar"/></td>
</tr>
</table>


</fieldset>

</div>


<div class="col-md-2"></div>

</form>

</div>

<?php 

error_reporting(E_ALL ^ E_NOTICE);

if($_GET["datos"]=="registrados"){

 echo "Ya existe un usuario con su correo o nombre de usuario registrado, intente nuevamente con otro correo o usuario.";


}







if($_GET["vd"]=="si") {


	echo "Ingrese sus datos nuevamente";
	


	
}

?>











<script type="text/javascript">
	
$("#usuario").on("input", function(){

var txuserValue= $("#usuario").val();


         

        $.ajax({
        url: "user-data-edit.php",
        type: "POST",
        data: {regUsuario: txuserValue },
        success: function(data){
        $("#reguserstatus").html(data);
       
                   




        }
        });


});

$("#correoe").on("input", function(){

var txcorreoeValue= $("#correoe").val();


         

        $.ajax({
        url: "user-data-edit.php",
        type: "POST",
        data: {regCorreoe: txcorreoeValue },
        success: function(data){
        $("#regcorreoestatus").html(data);
       
                   




        }
        });


});





</script>








<?php include("footer.php"); ?>