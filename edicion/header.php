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



</head>
<body>

<div class="container" id="contenedor">

    <div class="row" id="header">

           <div class="col-md-2" >
        
            <img src="img/headerimg.png"/>


          </div> 


          

          <div class="col-md-6" >
      	
      	    <h1 id="titulo">Anuncios Clasificados Ecuador</h1>


          </div> 

 <?php 
 
        if($_SERVER['REQUEST_URI']=="/" OR $_SERVER['REQUEST_URI']=="/index.php" or $_SERVER['REQUEST_URI']=="/index.php?mensaje=si"  ){

         echo '
       
          <div class="col-md-4" id="rightregpanel" >
      	
      	    <button class="botones"><a href="loginform.php">Ingresar</a></button>


            <button class="botones"><a href="registroform.php">Registrarse</a></button>



          </div>






         ';

        } else if($_SERVER['REQUEST_URI']=="/crear-anuncio.php" or $_SERVER['REQUEST_URI']=="/crear-anuncio.php?anuncio=revisar"  ){

         echo '
       
          <div class="col-md-4" id="rightsalirpanel" >
      	
      	    <button class="botones"><a href="salir.php">Salir del sistema</a></button>

            <button class="botones"><a href="home-usuario.php">Atrás</a></button>

            



          </div>






         ';

        }

        else if($_SERVER['REQUEST_URI']=="/home-usuario.php" or $_SERVER['REQUEST_URI']=="/home-usuario.php?anuncio=publicado"   ){

         echo '
       
          <div class="col-md-4" id="righthomepanel" >
      	
      	    <button class="botones"><a href="salir.php">Salir del sistema</a></button>

            

            



          </div>






         ';

        }




         else if($_SERVER['REQUEST_URI']=="/loginform.php" OR $_SERVER['REQUEST_URI']=="/registro.php" OR $_SERVER['REQUEST_URI']=="/loginform.php?usuario=noencontrado" OR $_SERVER['REQUEST_URI']=="/registroform.php" or $_SERVER['REQUEST_URI']=="/registroform.php?vd=si" or $_SERVER['REQUEST_URI']=="/registroform.php?datos=registrados" ){

         echo '
       
          <div class="col-md-4" id="rightprinpanel" >
      	
      	    <button class="botones"><a href="index.php">Página principal</a></button>


            



          </div>






         ';

        }




 ?>         
	


     </div>
