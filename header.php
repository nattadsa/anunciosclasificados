<?php

error_reporting(E_ALL ^ E_NOTICE);


switch ($_SERVER["REQUEST_URI"]) {
   







  
case '/phpclases/index.php':
     $enlace1= "Ingrese al Sistema";
     $enlace2= "Registro";
     $link1= "loginform.php";
     $link2= "registroform.php";
     $home= "index.php";
     $crearAd="";
     $mensaje="Bienvenido al sistema. ";




     break;

     case '/phpclases/':
     $enlace1= "Ingrese al Sistema";
     $enlace2= "Registro";
     $link1= "loginform.php";
     $link2= "registroform.php";
     $home= "index.php";
     $crearAd="";
     $mensaje="Bienvenido al sistema. ";




     break;

   case '/phpclases/loginform.php':
     $enlace1= "Ingrese al Sistema";
     $enlace2= "Registro";
     $link1= "loginform.php";
     $link2= "registroform.php";
     $home= "index.php";
     $crearAd="";
    $mensaje="Ingrese sus credenciales.";




     break;

   case '/phpclases/login.php':
     $enlace1= "Ingrese al Sistema";
     $enlace2= "Registro";
     $link1= "loginform.php";
     $link2= "registroform.php";
     $home= "index.php";
     $crearAd="";
    $mensaje="";




     break;

   case '/phpclases/registroform.php':
     $enlace1= "Ingrese al Sistema";
     $enlace2= "Registro";
     $link1= "loginform.php";
     $link2= "registroform.php";
     $home= "index.php";
     $crearAd="";
    $mensaje="Ingrese sus datos para registrarse.";




     break;

   case '/phpclases/registro.php':
     $enlace1= "Ingrese al Sistema";
     $enlace2= "Registro";
     $link1= "loginform.php";
     $link2= "registroform.php";
     $home= "index.php";
     $crearAd="";
     $mensaje="Verifique sus datos.";

     break;

      case '/phpclases/registroform.php?vd=si':
     $enlace1= "Ingrese al Sistema";
     $enlace2= "Registro";
     $link1= "loginform.php";
     $link2= "registroform.php";
     $home= "index.php";
     $crearAd="";
     $mensaje="Ingrese sus datos para registrarse.";

      break;

     case '/phpclases/index.php?mensaje=si':
     $enlace1= "Ingrese al Sistema";
     $enlace2= "Registro";
     $link1= "loginform.php";
     $link2= "registroform.php";
     $home= "index.php";
     $crearAd="";
     $mensaje="Bienvenido al sistema.";

      break;

       case '/phpclases/loginform.php?usuario=noencontrado':
     $enlace1= "Ingrese al Sistema";
     $enlace2= "Registro";
     $link1= "loginform.php";
     $link2= "registroform.php";
     $home= "index.php";
     $crearAd="";
     $mensaje="Ingrese sus credenciales.";

      break;


     

      case '/phpclases/home-usuario.php':
     $enlace1= "Mis anuncios";
     $enlace2= "Mis datos";
     $link1= "mis-anuncios.php";
     $link2= "mis-datos.php";
     $home= "home-usuario.php";
     $crearAd="Crear anuncio";
     $crearLink="crear-anuncio.php";
     $salir = "Salir del sistema";
     $salirLink="salir.php";
     $nombre = $_SESSION['loginuser']->nombre ." ".$_SESSION['loginuser']->apellido;

     $mensaje="Bienvenido al sistema" ." ". $nombre ;


     break;

     case '/phpclases/mis-anuncios.php':
     $enlace1= "Mis anuncios";
     $enlace2= "Mis datos";
     $link1= "mis-anuncios.php";
     $link2= "mis-datos.php";
     $home= "home-usuario.php";
     $crearAd="Crear anuncio";
     $crearLink="crear-anuncio.php";
     $salir = "Salir del sistema";
     $salirLink="salir.php";
     $mensaje="Sus anuncios";
    $nombre = $_SESSION['loginuser']->nombre ." ".$_SESSION['loginuser']->apellido;


     


     break;

     case '/phpclases/mis-datos.php':
     $enlace1= "Mis anuncios";
     $enlace2= "Mis datos";
     $link1= "mis-anuncios.php";
     $link2= "mis-datos.php";
     $home= "home-usuario.php";
     $crearAd="Crear anuncio";
     $crearLink="crear-anuncio.php";
     $salir = "Salir del sistema";
     $salirLink="salir.php";
     $mensaje="Sus datos";
     $nombre = $_SESSION['loginuser']->nombre ." ".$_SESSION['loginuser']->apellido;


     break;

     case '/phpclases/crear-anuncio.php':
     $enlace1= "Mis anuncios";
     $enlace2= "Mis datos";
     $link1= "mis-anuncios.php";
     $link2= "mis-datos.php";
     $home= "home-usuario.php";
     $crearAd="Crear anuncio";
     $crearLink="crear-anuncio.php";
     $salir = "Salir del sistema";
     $salirLink="salir.php";
     $mensaje="Cree su anuncio";


     break;

     case '/phpclases/borrarad-cfrm.php?andel=0':
     $enlace1= "Mis anuncios";
     $enlace2= "Mis datos";
     $link1= "mis-anuncios.php";
     $link2= "mis-datos.php";
     $home= "home-usuario.php";
     $crearAd="Crear anuncio";
     $crearLink="crear-anuncio.php";
     $salir = "Salir del sistema";
     $salirLink="salir.php";
     $mensaje="Eliminar anuncio";
     $nombre = $_SESSION['loginuser']->nombre ." ".$_SESSION['loginuser']->apellido;



     break;

     case '/phpclases/mis-anuncios.php?anuncio=eliminado':
     $enlace1= "Mis anuncios";
     $enlace2= "Mis datos";
     $link1= "mis-anuncios.php";
     $link2= "mis-datos.php";
     $home= "home-usuario.php";
     $crearAd="Crear anuncio";
     $crearLink="crear-anuncio.php";
     $salir = "Salir del sistema";
     $salirLink="salir.php";
     $mensaje="Sus anuncios";
     $nombre = $_SESSION['loginuser']->nombre ." ".$_SESSION['loginuser']->apellido;



     break;

     case '/phpclases/anuncio-confirm.php':
     $enlace1= "Mis anuncios";
     $enlace2= "Mis datos";
     $link1= "mis-anuncios.php";
     $link2= "mis-datos.php";
     $home= "home-usuario.php";
     $crearAd="Crear anuncio";
     $crearLink="crear-anuncio.php";
     $salir = "Salir del sistema";
     $salirLink="salir.php";
     $mensaje="Cree su anuncio";
     $nombre = $_SESSION['loginuser']->nombre ." ".$_SESSION['loginuser']->apellido;


     break;

     case '/phpclases/crear-anuncio.php?anuncio=revisar':
     $enlace1= "Mis anuncios";
     $enlace2= "Mis datos";
     $link1= "mis-anuncios.php";
     $link2= "mis-datos.php";
     $home= "home-usuario.php";
     $crearAd="Crear anuncio";
     $crearLink="crear-anuncio.php";
     $salir = "Salir del sistema";
     $salirLink="salir.php";
     $mensaje="Cree su anuncio";
     $nombre = $_SESSION['loginuser']->nombre ." ".$_SESSION['loginuser']->apellido;


     break;

     case '/phpclases/home-usuario.php?anuncio=publicado':
     $enlace1= "Mis anuncios";
     $enlace2= "Mis datos";
     $link1= "mis-anuncios.php";
     $link2= "mis-datos.php";
     $home= "home-usuario.php";
     $crearAd="Crear anuncio";
     $crearLink="crear-anuncio.php";
     $salir = "Salir del sistema";
     $salirLink="salir.php";
     $mensaje="Bienvenido al sistema";
     $nombre = $_SESSION['loginuser']->nombre ." ".$_SESSION['loginuser']->apellido;



     break;






   
   
 } 
 



 ?> 


<!DOCTYPE html>
<html lang="es">
<head>
	<title>Anuncios clasificados Ecuador</title>
	<meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="True" name="HandheldFriendly">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

     <meta name="viewport" content="width=device-width">	


    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
   
    <script src="js/jquery.js"></script>
     <script src="js/bootstrap.js"></script>

      <script type="text/javascript">

      $(document).ready(function(){


         $("#search_frm").submit(function(event){

        event.preventDefault();



        });




        $("#search_txt").on("input", function(){

        var keyword= $("#search_txt").val();


         

        $.ajax({
        url: "search.php",
        type: "POST",
        data: {searchQuery: keyword },
        success: function(data){

        $("#search_results").html(data);
       
                   




        }
        });





});

     








      });





      </script>



</head>
<body>

<div class="container" id="contenedor">

    <div class="row" id="header">

           <div class="col-md-2" >
        
           <img src="img/shout.png" id="imagenbanner">

          </div> 


          

          <div class="col-md-8" >
      	
      	    <h3 id="titulo">Anuncios Clasificados Ecuador<span id="betatag"> Beta</span></h3>


          </div> 

          <div class="col-md-2" >
        
            <p id="titulo"><?php echo $nombre ?></p>


          </div> 

         


	


     </div>

     <div class="row welmsg">

<div class="col-md-12">

 <p><?php echo $mensaje ?></p>

</div>

 </div>

     <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href=<?php echo $home ?>>Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href=<?php echo $link1 ?>><?php echo $enlace1 ?> <span class="sr-only">(current)</span></a></li>
        <li><a href=<?php echo $link2 ?>><?php echo $enlace2 ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sobre Nosotros <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Información</a></li>
            <li><a href="#">Contacto</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Recibe anuncios en tu correo</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>
      <form id="search_frm" class="navbar-form navbar-left" role="search" enctype="application/x-www-form-urlencoded">
        <div class="form-group">
          <input type="text" name="search_txt" id="search_txt" class="form-control" placeholder="Búsqueda de anuncios">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=<?php echo $crearLink ?>><?php echo $crearAd ?></a></li>
        <li><a href=<?php echo $salirLink ?>><?php echo $salir ?></a></li>

        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div id="search_results"></div>

     
