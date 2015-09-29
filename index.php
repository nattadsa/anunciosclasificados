




<?php

error_reporting(E_ALL ^ E_NOTICE);


 include("header.php");

 if($_GET["mensaje"]=="si"){

 echo "El usuario se ha registrado exitosamente, ingrese al sistema con sus credenciales";


}





 ?>

 <h1>Bienvenido al sistema</h1>

 <a href="loginform.php">Ingresar</a>


 <a href="registroform.php">Registrarse</a>









<?php include("footer.php"); ?>






	
