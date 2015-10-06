<?php

include("header.php");

include("clases.php");

include("adclass.php");

include("confirmacionlog.php");

session_start();




echo '<div class="row welmsg">';

echo '<div class="col-md-12">';

echo "<p>Bienvenido al sistema " .", ".  $_SESSION['loginuser']->nombre . " " . $_SESSION['loginuser']->apellido . ".</p>"  . "<br>";

echo '</div>';

echo '</div>';








?>


<nav class="navbar navbar-default">
  <div class="container">
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="crear-anuncio.php">Crear Anuncio<span class="sr-only">(current)</span></a></li>
        <li><a href="mis-anuncios.php">Mis anuncios</a></li>
        <li><a href="mis-datos">Datos personales</a></li>


        
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


if($_GET["anuncio"]=="publicado"){


echo "Su anuncio fué publicado con éxito";

}



$consultaads = new Anuncios();

$consultaads->obtenerAnunciosDeBd();






?>







<?php include("footer.php"); ?>



















































