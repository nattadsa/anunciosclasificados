<?php


include("clases.php");

include("adclass.php");

include("confirmacionlog.php");

session_start();

include("header.php");


$usuarioactual  = $_SESSION['loginuser'];









$usuarioactual->mostrardatosEdit();

$_SESSION["useruactual"] = $usuarioactual->usuario; 

$_SESSION["correouactual"] = $usuarioactual->getcorreo();


?>

<script type="text/javascript">


	
$(document).ready(function(){


var editstatus=false;
var ajaxUserResponse="true";

   



 
$("#duedit").click(function(){

	           $("#editstatus").html("");



$("#nomdbstatus").html('<img src="img/ok.png"/>');
    $("#usdbstatus").html('<img src="img/ok.png"/>');
    $("#apdbstatus").html('<img src="img/ok.png"/>');

    $("#nomdbstatus").show();
    $("#usdbstatus").show();
    $("#apdbstatus").show();

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
        dataType: "json",
        data: {nuevoUsuario: txtusValue },
        success: function(data){
        $("#usdbstatus").html(data.imagen);
    
        ajaxUserResponse= data.stat;

        }
        });


});














$("#dusavebtn").click(function(){


	if(ajaxUserResponse=="true"){


    
	$("#dusavebtn").hide();
    $("#nomdbstatus").hide();
    $("#usdbstatus").hide();
    $("#apdbstatus").hide();
    $("#codbstatus").hide();

	$("#mdnombre").html($("#txtnom").val());
    $("#mdapellido").html($("#txtap").val());
    $("#mdusuario").html($("#txtus").val());
    $("#mdcorreo").html($("#txtmail").val());

    var nuevoEditNombre= $("#mdnombre").html();
    var nuevoEditApellido= $("#mdapellido").html();
    var nuevoEditUsuario= $("#mdusuario").html();
    var nuevoEditCorreo= $("#mdcorreo").html();


    $.ajax({

       url:"save-edit.php",
       type:"POST",
       data: {newEditname:nuevoEditNombre,newEditLast:nuevoEditApellido,newEditUser:nuevoEditUsuario,newEditMail:nuevoEditCorreo},

       success: function(data){

       $("#editstatus").html(data);       


       }




    });






     

    editstatus = false;

    



} else {


alert("Ingrese un nombre de usuario válido");

}



});


} 


});



});




</script>


<?php include("footer.php"); ?>
