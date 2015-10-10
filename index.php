




<?php

error_reporting(E_ALL ^ E_NOTICE);


 include("header.php");
 include("adclass.php");

 ?>





<?php



 if($_GET["mensaje"]=="si"){

 echo "El usuario se ha registrado exitosamente, ingrese al sistema con sus credenciales";


}





 


$consultaads = new Anuncios();

echo "<h3>Ultimos anuncios publicados</h3>";



$consultaads->obtenerAnunciosDeBd();

?>







<?php include("footer.php"); ?>






	
