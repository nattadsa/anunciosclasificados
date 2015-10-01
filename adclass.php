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


        echo "<b>Titulo:</b> " . $this->tituloAnuncio . "<br>";
        echo "<b>Anuncio:</b> " . $this ->textoAnuncio .  "<br>";

        echo "<b><Autor:</b>" . $this ->autor . "<br>";

     }


     public function conectarse()

{

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd="phpclases";
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
              $consulta = "SELECT * FROM anuncios ORDER BY anuncioid DESC limit 7";
              $ejecutar_consulta= $conexion->query(utf8_encode($consulta));
              

             echo '<div class="row">';

              while ($resultado = $ejecutar_consulta->fetch_assoc()) {
               
                 
                
                echo '
	
	               <div class="col-lg-4 anuncios">

	                   <h3>' .$resultado["titulo"] . '</h3>
	      	
	                   <p>' . $resultado["texto"]. '</p>

	                   <p><b>' . $resultado["autor"]. '</b></p>
	      	

	              </div>

                  


              ';

             
               }

               echo '</div>';

             

              



     }


}










?>
