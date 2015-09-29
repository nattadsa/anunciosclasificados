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


        echo "Titulo: " . $this->tituloAnuncio . "<br>";
        echo "Anuncio: " . $this ->textoAnuncio .  "<br>";

        echo "Autor:  " . $this ->autor . "<br>";

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
     $consulta = "INSERT INTO anuncios(titulo,texto,autor) VALUES ('$this->tituloAnuncio','$this->textoAnuncio','$this->autor')";
     $ejecutar_consulta= $conexion->query(utf8_encode($consulta));

     if ($ejecutar_consulta){

          echo "Se ha publicado el anuncio correctamente";

     } else{


        echo "Ha ocurrido un problema de conexión a la base de datos";

     }
        


     }


}










?>
