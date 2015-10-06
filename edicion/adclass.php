<?php

class Anuncios {

     public $tituloAnuncio;
     public $textoAnuncio;
     public $autor;





     public function crearDatosAnuncio($title,$ad,$adautor){


        $this->tituloAnuncio = $title;

        $this ->textoAnuncio = $ad;

        $this ->autor =$adautor;

     }

     public function mostrarDatosAnuncio(){

        echo '<div class="row ">';

        echo '<div class="col-md-12 adconfirm">';


        
        echo "<b>Titulo:</b> " . $this->tituloAnuncio . "<br>";
        echo "<b>Anuncio:</b> " . $this ->textoAnuncio .  "<br>";

        echo "<b>Autor: </b>" . $this ->autor . "<br>" ;

     }


     public function conectarse()

{

$servidor = "localhost";
$usuario = "veneijbo_ctr";
$password = "-Soraj03";
$bd="veneijbo_ace";
$conectar = new mysqli($servidor,$usuario,$password,$bd) or die ("No se pudo conectar al servidor de BD Mysql");

return $conectar;

}

     public function registrarAnuncioBd(){

     $conexion = $this->conectarse();
     $conexion->query("SET NAMES 'utf8'");
     $consulta = "INSERT INTO anuncios(titulo,texto,autor) VALUES ('$this->tituloAnuncio','$this->textoAnuncio','$this->autor')";
     $ejecutar_consulta= $conexion->query(utf8_encode($consulta));

     if ($ejecutar_consulta){

          echo "Se ha publicado el anuncio correctamente";

     } else{


        echo "Ha ocurrido un problema de conexión a la base de datos";

     }
        


     }

     public function obtenerAnunciosDeBd() {
    

              $conexion = $this->conectarse();
              $consulta = "SELECT * FROM anuncios ORDER BY anuncioid DESC limit 6";
              $ejecutar_consulta= $conexion->query(utf8_encode($consulta));
              

            

              while ($resultado = $ejecutar_consulta->fetch_assoc()) {
               
                 
                
                echo '
	
                <div class="row">
                 <div class="col-md-2"></div>
	               <div class="col-md-8 anuncios">

	                   <h3 class="tituload">' .$resultado["titulo"] . '</h3><br>
	      	
	                   <p class="adtext">' . $resultado["texto"]. '</p>

	                   <p class="autorad"><b>' . $resultado["autor"]. '</b></p>
	      	

	              </div>
                <div class="col-md-2"></div>
                </div>

                

                  


              ';

             
               }

                

             

              



     }


}










?>

<div class="col-md-2"></div>