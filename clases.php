<?php 




error_reporting(E_ALL ^ E_NOTICE);




class Usuario {

//atributos
	         public $nombre;
	         public $apellido;
	         private $correo;
	         public $usuario;
	         private $password;
 




//metodos

           public function getcorreo(){
 
            return $this->correo;          

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




 public function registro($nombre,$apellido,$correo,$usuario,$password) {

        
             $this->nombre = $nombre;
             $this->apellido = $apellido;
             $this->correo = $correo;
             $this->usuario = $usuario;
             $this ->password = password_hash($password,PASSWORD_DEFAULT);

}

 public function mostrardatosEdit(){

         echo '


         <div class="row" id="mdrow">


            <div class="col-md-3" ></div> 
            <div class="col-md-6" id="mdusuariocol"><div id="editstatus"></div>Nombre:<span class="dusuario" id="mdnombre">'.$this->nombre.'</span><span id="nomdbstatus"></span><br>Apellido: <span class="dusuario" id="mdapellido">'.$this->apellido.'</span><span id="apdbstatus"></span><br>Nombre de usuario: <span class="dusuario" id="mdusuario">'.$this->usuario.'</span><span id="usdbstatus"></span><br>Correo Electrónico: <span class="dusuario" id="mdcorreo">'.$this->correo.'</span><span id="codbstatus"></span> <br>

              <input type="submit" id="duedit" class="editubtn" name="duedit" value="Editar datos"><div class="editubtn" id="dusave"></div>

               </div>

            <div class="col-md-3"></div> 
            


  
           


         </div> ';

 }

public function mostrardatos(){

         echo '




            <div id="mdusuariocol"><div id="editstatus"></div>Nombre:<span class="dusuario" id="mdnombre">'.$this->nombre.'</span><span id="nomdbstatus"></span><br>Apellido: <span class="dusuario" id="mdapellido">'.$this->apellido.'</span><span id="apdbstatus"></span><br>Nombre de usuario: <span class="dusuario" id="mdusuario">'.$this->usuario.'</span><span id="usdbstatus"></span><br>Correo Electrónico: <span class="dusuario" id="mdcorreo">'.$this->correo.'</span><span id="codbstatus"></span> <br>



            


  
           


          ';

 }




 public function registrodb(){

$conexion = $this->conectarse();
$consultaEmail = "SELECT * FROM phpclases_table WHERE email='$this->correo'";
$consultaUsuario = "SELECT * FROM phpclases_table WHERE usuario='$this->usuario'";
$ejecutarConsultaEmail = $conexion->query(utf8_encode($consultaEmail));
$ejecutarConsultaUsuario = $conexion->query(utf8_encode($consultaUsuario));

 if($ejecutarConsultaEmail &&  $ejecutarConsultaUsuario){

        if($ejecutarConsultaEmail->num_rows > 0 || $ejecutarConsultaUsuario->num_rows > 0){


                  header("Location:registroform.php?datos=registrados");



        } else {
              $conexion->query("SET NAMES 'utf8'");
              $consulta = "INSERT INTO phpclases_table(nombre,apellido,email,usuario,password) VALUES ('{$this->nombre}','{$this->apellido}','{$this->correo}','{$this->usuario}','{$this->password}')";
			  }
              $ejecutar_consulta= $conexion->query(utf8_encode($consulta));

              if ($ejecutar_consulta){

                    session_destroy();

                    header("Location: index.php?mensaje=si");

              } else {

                   echo "Ha ocurrido un problema de conexión a la base de datos";

               }



        }


 }

public function eliminarusuario($email){
$consulta = "DELETE FROM phpclases_table WHERE email='$email'";
$conexion = $this->conectarse();
$ejecutar_consulta= $conexion->query(utf8_encode($consulta));

if ($ejecutar_consulta){

echo "El usuario ha sido eliminado";

} else {

echo "Ha ocurrido un problema de conexión a la base de datos";

}
          
           

 }

 public function loginusuario($usuario,$password){


$conexion = $this->conectarse();
$consultaUsuario = "SELECT * FROM phpclases_table WHERE usuario='$usuario'";
$consultaPassword = "SELECT password FROM phpclases_table WHERE usuario='$usuario'";
$ejecutarConsultaUsuario = $conexion->query(utf8_encode($consultaUsuario));
$ejecutarConsultaPassword = $conexion->query(utf8_encode($consultaPassword));
$passwordvalue = $ejecutarConsultaPassword->fetch_row()[0];
$verificarPass = password_verify($password, $passwordvalue);

if($ejecutarConsultaUsuario &&  $ejecutarConsultaPassword){

    

      



     if($ejecutarConsultaUsuario->num_rows ==1 && $verificarPass == true){

      

      return true;       
    




     }  else {


      header("Location:loginform.php?usuario=noencontrado");

     }








 } else {

echo "Existe un problema de conexión a la base de datos";


 }





}

public function obtenerDatos($usuario){

  $conexion = $this->conectarse();
  $consultaUsuario = "SELECT * FROM phpclases_table WHERE usuario='$usuario'";
  $ejecutarConsultaUsuario = $conexion->query(utf8_encode($consultaUsuario));
  $datos=$ejecutarConsultaUsuario->fetch_assoc();
  
  return $datos;


}

public function buscarUsuario($usuario){

  $conexion = $this->conectarse();
  $consultaUsuario = "SELECT * FROM phpclases_table WHERE usuario='$usuario'";
  $ejecutarConsultaUsuario = $conexion->query(utf8_encode($consultaUsuario));

  if($ejecutarConsultaUsuario->num_rows ==1){

   return true;


  }

  else {

  return false;


  }





}

public function buscarCorreo($correo){

  $conexion = $this->conectarse();
  $consultaCorreo = "SELECT * FROM phpclases_table WHERE email='$correo'";
  $ejecutarConsultaCorreo = $conexion->query(utf8_encode($consultaCorreo));

  if($ejecutarConsultaCorreo->num_rows ==1){

   return true;


  }

  else {

  return false;



  }

  



}

public function actualizarDatos($nombre,$apellido,$usuario,$correo){

    
    $this->correo = $correo;
 
   

     $conexion = $this->conectarse();
     $conexion->query("SET NAMES 'utf8'");

     
     if($nombre!=$this->nombre){

       $this->nombre = $nombre;
      $consultaNombre = "UPDATE phpclases_table SET nombre='$nombre' WHERE email='$this->correo'";
     $ejecutarConsultaNombre = $conexion->query(utf8_encode($consultaNombre));

       if($ejecutarConsultaNombre){   

        echo '<p>Nombre actualizado</p>';

      }


     } 


     if($apellido!=$this->apellido){


       $this->apellido = $apellido;
      $consultaApellido = "UPDATE phpclases_table SET apellido='$apellido' WHERE email='$this->correo'";
     $ejecutarConsultaApellido = $conexion->query(utf8_encode($consultaApellido));

          
       if($ejecutarConsultaApellido){
       
          echo '<p>Apellido actualizado</p>';

     }
      
     } 


     if($usuario!=$this->usuario && $this->buscarUsuario($usuario)==false){
    
      $this->usuario = $usuario;
      $consultaUsuario = "UPDATE phpclases_table SET usuario='$usuario' WHERE email='$this->correo'";
     $ejecutarConsultaUsuario = $conexion->query(utf8_encode($consultaUsuario));

     if( $ejecutarConsultaUsuario){
   
     echo '<p>Usuario actualizado</p>';

   }
      
     }

    

     



      
}

}



?>










