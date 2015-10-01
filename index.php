




<?php

error_reporting(E_ALL ^ E_NOTICE);


 include("header.php");
 include("adclass.php");

 ?>


<div class="row welmsg">

<div class="col-md-12">

 <h3>Bienvenido al sistema</h3>

</div>

 </div>

 <br><br>



<?php



 if($_GET["mensaje"]=="si"){

 echo "El usuario se ha registrado exitosamente, ingrese al sistema con sus credenciales";


}





 


$consultaads = new Anuncios();

echo "<h2>Ultimos anuncios publicados</h2>";



$consultaads->obtenerAnunciosDeBd();

?>







<?php include("footer.php"); ?>






	
