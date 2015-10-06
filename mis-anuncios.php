<?php 


include("header.php");

include("clases.php");

include("adclass.php");

include("confirmacionlog.php");

session_start();

$usuarioactual  = $_SESSION['loginuser'];

$anunciosDeUsuario = new Anuncios();







?>

<div class="row welmsg">

<div class="col-md-12">

 <p>Sus anuncios</p>

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



<h2 id="editstatus"></h2>

<?php 

if(isset($_GET["anuncio"])){


Echo "Se ha eliminado el anuncio exitosamente.";


}





$autorusuarioactual = $usuarioactual->nombre . " " . $usuarioactual->apellido;




$arrayaid=$anunciosDeUsuario->mostrarAnunciosUsuario($autorusuarioactual);



$_SESSION["arrayid"] = $arrayaid;

$_SESSION["objetoaborrar"] =$anunciosDeUsuario;

$jsarray = $_SESSION["arrayid"];






 ?>



<script type="text/javascript">

  
    var edicion=false;
    var ediciontxt=false;

   $(".editad").click(function(){

    

    if(edicion===false && ediciontxt===false ){

        var anuncioId=$(this).attr("id");

        var anuncioIdNum= anuncioId.substr(4);

        var tituloAnuncioId=  "ta" + anuncioIdNum;

        var textoAnuncioId= "tt" + anuncioIdNum;

        var otitle=document.getElementById(tituloAnuncioId).innerHTML;
        var otxt=document.getElementById(textoAnuncioId).innerHTML;


    
        $('#' + tituloAnuncioId).css("color","black");

        document.getElementById(tituloAnuncioId).innerHTML ='<form name="titleedit'+anuncioIdNum+'" id="titleedit'+anuncioIdNum+'" method="POST" action="ajax.php" enctype="application/x-www-form-urlencoded"><input type="text" id="edittextbox'+anuncioIdNum+'" value="'+otitle+'"/><input type="submit" id="savectit'+anuncioIdNum+'" value="Guardar cambios"/></form>' ;    
        document.getElementById(textoAnuncioId).innerHTML ='<form form name="txtedit'+anuncioIdNum+'" id="txtedit'+anuncioIdNum+'" method="POST" action="ajax.php" enctype="application/x-www-form-urlencoded"><input type="text" id="etextbox'+anuncioIdNum+'" value="'+otxt+'"/><input type="submit" id="savectxt'+anuncioIdNum+'" value="Guardar cambios"/></form>' ;    

        
        edicion=true;
        ediciontxt=true;



   }   else {

       alert("Termine de editar el anuncio actual antes de editar otro.");

       }

        var saveTitleChanges= "savectit" + anuncioIdNum;
        var txtTitleEditId= "edittextbox" +anuncioIdNum;
        var saveTxtChanges= "savectxt" + anuncioIdNum;
        var txtEditId= "etextbox" +anuncioIdNum;
        var titleEditformId="titleedit" +anuncioIdNum;
        var txtEditformId="txtedit" +anuncioIdNum;

        

        $('#' + saveTitleChanges).click(function(){

        
        var newTitle = $('#' + txtTitleEditId).val();

           
         $('#' + titleEditformId ).submit(function( event ) {
         
        event.preventDefault();

       


        $.ajax({
        url: "ajax.php",
        type: "POST",
        data: {noArreglo: anuncioIdNum , nuevoTitulo:newTitle },
        success: function(data){
        $("#editstatus").html(data);
        }
        });

    

        });  


         $('#' + tituloAnuncioId).css("color","white");
         document.getElementById(tituloAnuncioId).innerHTML = newTitle;
         edicion=false;
       


        });

        $('#' + saveTxtChanges).click(function(){

        
        var newTxt = $('#' + txtEditId).val();
    
         $('#' + txtEditformId ).submit(function( event ) {
         
        event.preventDefault();

       


        $.ajax({
        url: "ajax.php",
        type: "POST",
        data: {noArreglo: anuncioIdNum , nuevoTexto:newTxt },
        success: function(data){
        console.log(data);
        }
        });

    

        });  







        document.getElementById(textoAnuncioId).innerHTML = newTxt;
        ediciontxt=false;
       


        });




    });



</script>


<?php include("footer.php"); ?>

