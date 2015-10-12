<?php

class Anuncios {

     public $tituloAnuncio;
     public $textoAnuncio;
     public $autor;
     public $autormail;






     public function crearDatosAnuncio($title,$ad,$adautor,$adautormail){


        $this->tituloAnuncio = $title;

        $this ->textoAnuncio = $ad;

        $this ->autor =$adautor;

        $this ->autormail =$adautormail;


     }

     public function mostrarDatosAnuncio(){

        echo '<div class="row ">';

        echo '<div class="col-md-12 adconfirm">';


        
        echo "<b>Titulo:</b> " . $this->tituloAnuncio . "<br>";
        echo "<b>Anuncio:</b> " . $this ->textoAnuncio .  "<br>";

        echo "<b>Autor: </b>" . $this ->autor . "<br>" ;

        echo "<b>Correo Electrónico: </b>" . $this ->autormail . "<br>" ;


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
     $consulta = "INSERT INTO anuncios(titulo,texto,autor,autormail) VALUES ('$this->tituloAnuncio','$this->textoAnuncio','$this->autor','$this->autormail')";
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

	                   <p class="tituload"><b>' .$resultado["titulo"] . '</b></p><br>
	      	
	                   <p class="adtext">' . $resultado["texto"]. '</p>

	                   <p class="autorad"><b>Autor: </b>' . $resultado["autor"].'<br><b>Contacto: </b>'.$resultado["autormail"].'</p>

                    

	      	

	              </div>
                <div class="col-md-2"></div>
                </div>

                

                  


              ';

             
               }

                

             

              



     }

     public function mostrarAnunciosUsuario($autormail){


          $conexion = $this->conectarse();
          $consulta = "SELECT * FROM anuncios WHERE autormail='$autormail'";
          $ejecutar_consulta= $conexion->query(utf8_encode($consulta));


             $i= 0;
             $anuncioid =[];

          while ($resultado = $ejecutar_consulta->fetch_assoc()) {
               
                 $i++;

                 $anuncioid[] = $resultado["anuncioid"];
                
                echo '
    
                <div class="row">
                 <div class="col-md-1"></div>
                   <div class="col-md-7 anuncios">

                       <h3 class="tituload userads" id="'. "ta" . ($i-1) .'">' .$resultado["titulo"] . '</h3><br>
            
                       <p class="adtext userads" id="'. "tt" . ($i-1) .'">' . $resultado["texto"]. '</p>

                       <p class="autorad userads" id="'. "aa" . ($i-1) .'"><b>Autor: </b>' . $resultado["autor"].'<br><b>Contacto: </b>'. $resultado["autormail"].'</p>

                     
            

                  </div>
                <div class="col-md-4 aucontainer"><a href="borrarad-cfrm.php?andel='. ($i-1 ).'"><img class="imgdelua" src="img/delete.png"></a><p>Eliminar anuncio</p><img src="img/edit.png" class="editad" id="edit'. ($i-1 ).'" style="cursor:pointer"><p>Editar anuncio</p></div>
                </div>

                

                  



              ';

             
               }

               return  $anuncioid;
           


     }


      public function buscarAnuncios($keyword){


          $conexion = $this->conectarse();
          $consulta = "SELECT * FROM anuncios WHERE MATCH (titulo,texto) AGAINST ('$keyword')";

          $ejecutar_consulta= $conexion->query(utf8_encode($consulta));


             $i= 0;
             $anuncioid =[];


          if ($ejecutar_consulta->num_rows == 0){

             echo '<p style="text-align:center">No se han encontrado anuncios que coincidan con la palabra introcucida</p>';
          }    

             

          while ($resultado = $ejecutar_consulta->fetch_assoc()) {
               
                 $i++;

                 $anuncioid[] = $resultado["anuncioid"];
                
                echo '
    
                <div class="row">
                 <div class="col-md-2"></div>
                   <div class="col-md-8 anuncios_found">

                       <h3 class="tituload userads" id="'. "ta" . ($i-1) .'">' .$resultado["titulo"] . '</h3><br>
            
                       <p class="adtext userads" id="'. "tt" . ($i-1) .'">' . $resultado["texto"]. '</p>

                       <p class="autorad_found userads" id="'. "aa" . ($i-1) .'"><b>Autor: </b>' . $resultado["autor"].'<br><b>Contacto: </b>'. $resultado["autormail"].'</p>

                     
            

                  </div>
                 <div class="col-md-2"></div>

                
                </div>

                

                  



              ';

             
               }

               return  $anuncioid;
           


     }


         public function mostrarAnunciosideliminar($anuncioid){


          $conexion = $this->conectarse();
          $consulta = "SELECT * FROM anuncios WHERE anuncioid='$anuncioid'";
          $ejecutar_consulta= $conexion->query(utf8_encode($consulta));
          $resultado = $ejecutar_consulta->fetch_assoc();
               
                 

                 
                
                echo '
    
                 

                <div class="row">
                 <div class="col-md-1"></div>
                   <div class="col-md-7 anuncios">

                       <h3 class="tituload">' .$resultado["titulo"] . '</h3><br>
            
                       <p class="adtext">' . $resultado["texto"]. '</p>

                       <p class="autorad"><b><b>Autor: </b>' . $resultado["autor"]. '<br><b>Contacto: </b>'. $resultado["autormail"].'</b></p>


            

                  </div>
                <div class="col-md-4 aucontainer"><a href="borrarad-cfrm.php?andel=si"><img class="imgdelua" src="img/delete.png"></a><p>Eliminar anuncio</p><img src="img/edit.png"><p>Editar anuncio</p></div>
                </div>

                <div class="row">

    <div class="col-md-2"></div>

    <div class="col-md-6">

            <p>¿Está seguro que desea eliminar este anuncio?</p>

            <form name="borrarad_cfrm" method="get" enctype="application/x-www-form-urlencoded">

                <input type="submit" name="acptrdelad" id="acptrdelad" value="aceptar">

                <input type="submit" name="canceldelad" id="canceldelad" value="cancelar">

                



            </form>

    </div>

    <div class="col-md-2"></div>

</div>


                  



              ';

             
               }



       public function borrarAnuncioUsuario($anuncioid){

          
          $conexion = $this->conectarse();
          $consulta = "DELETE FROM anuncios WHERE anuncioid='$anuncioid'";
          $ejecutar_consulta= $conexion->query(utf8_encode($consulta));


          header("Location:mis-anuncios.php?anuncio=eliminado");









       }

        public function editarTituloAnuncioUsuario($anuncioid,$titulo){

          
          $conexion = $this->conectarse();
          $conexion->query("SET NAMES 'utf8'");
          $consulta = "UPDATE anuncios SET titulo='$titulo' WHERE anuncioid='$anuncioid'";
          $ejecutar_consulta= $conexion->query(utf8_encode($consulta));


          









       }

       public function editarTextoAnuncioUsuario($anuncioid,$texto){

          
          $conexion = $this->conectarse();
          $conexion->query("SET NAMES 'utf8'");
          $consulta = "UPDATE anuncios SET texto='$texto' WHERE anuncioid='$anuncioid'";
          $ejecutar_consulta= $conexion->query(utf8_encode($consulta));


          









       }



}










?>

