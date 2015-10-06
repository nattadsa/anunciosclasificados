<?php

include("header.php");

include("clases.php");

include("adclass.php");

include("confirmacionlog.php");

session_start();

$usuarioactual  = $_SESSION['loginuser'];



?>

<div class="row welmsg">

<div class="col-md-12">

 <p>Sus datos</p>

</div>

 </div>

 <nav class="navbar navbar-default">
  <div class="container">
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="crear-anuncio.php">Crear Anuncio<span class="sr-only">(current)</span></a></li>
        <li><a href="mis-anuncios.php">Mis anuncios</a></li>
        <li><a href="mis-datos.php">Datos personales</a></li>


        
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Búsqueda de anuncios">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
      </form>
      
   
  </div>
</nav>




<?php





$usuarioactual->mostrardatos();

$_SESSION["useruactual"] = $usuarioactual->usuario; 

$_SESSION["correouactual"] = $usuarioactual->getcorreo();


?>

<script type="text/javascript">


	
$(document).ready(function(){


var editstatus=false;

   



 
$("#duedit").click(function(){


$("#nomdbstatus").html('<img src="img/ok.png"/>');
    $("#usdbstatus").html('<img src="img/ok.png"/>');
    $("#apdbstatus").html('<img src="img/ok.png"/>');
    $("#codbstatus").html('<img src="img/ok.png"/>');

    $("#nomdbstatus").show();
    $("#usdbstatus").show();
    $("#apdbstatus").show();
    $("#codbstatus").show();

if (editstatus===false){

editstatus = true;





var valorNombreO = $("#mdnombre").html();
var valorApellidoO = $("#mdapellido").html();
var valorUsuarioO = $("#mdusuario").html();
var valorCorreoO = $("#mdcorreo").html();

$("#mdnombre").html('<input type="text" id="txtnom" name="txtnom_txt" required>');
$("#txtnom").val(valorNombreO);

$("#mdapellido").html('<input type="text" id="txtap" name="txtap_txt" required>');
$("#txtap").val(valorApellidoO);

$("#mdusuario").html('<input type="text" id="txtus" name="txtus_txt" required>');
$("#txtus").val(valorUsuarioO);

$("#mdcorreo").html('<input type="text" id="txtmail" name="txtmail_txt" required>');
$("#txtmail").val(valorCorreoO);

$("#dusave").html('<button id="dusavebtn">Guardar cambios</button>');


$("#txtnom").on("input", function(){

var txnomValue= $("#txtnom").val();


         

        $.ajax({
        url: "user-data-edit.php",
        type: "POST",
        data: {nuevoNombre: txnomValue },
        success: function(data){
        $("#nomdbstatus").html(data);
        }
        });





});

$("#txtap").on("input", function(){

  var txtapValue= $("#txtap").val();

      $.ajax({
        url: "user-data-edit.php",
        type: "POST",
        data: {nuevoApellido: txtapValue },
        success: function(data){
        $("#apdbstatus").html(data);
        }
        });


});

$("#txtus").on("input", function(){

  var txtusValue= $("#txtus").val();

      $.ajax({
        url: "user-data-edit.php",
        type: "POST",
        data: {nuevoUsuario: txtusValue },
        success: function(data){
        $("#usdbstatus").html(data);
        }
        });


});


$("#txtmail").on("input", function(){

  var txtMailValue= $("#txtmail").val();

      $.ajax({
        url: "user-data-edit.php",
        type: "POST",
        data: {nuevoCorreo: txtMailValue },
        success: function(data){

         

        $("#codbstatus").html(data);
        


        }
        });


});













$("#dusavebtn").click(function(){


    

    
	$("#dusavebtn").hide();
    $("#nomdbstatus").hide();
    $("#usdbstatus").hide();
    $("#apdbstatus").hide();
    $("#codbstatus").hide();

	$("#mdnombre").html($("#txtnom").val());
    $("#mdapellido").html($("#txtap").val());
    $("#mdusuario").html($("#txtus").val());
    $("#mdcorreo").html($("#txtmail").val());



     

    editstatus = false;

    







});


} 


});



});




</script>


<?php include("footer.php"); ?>
