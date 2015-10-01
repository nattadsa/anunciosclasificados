<?php 




error_reporting(E_ALL ^ E_NOTICE);




class Usuario {

//atributos
	         public $nombre;
	         public $apellido;
	         public $correo;
	         public $usuario;
	         public $password;
 




//metodos


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
             $this ->password = $password;

}

 public function mostrardatos(){

          echo "<b>Nombre: </b>" . $this->nombre . "<br>" . "<b>Apellido:</b>" . $this->apellido . "<br>" . "<b>Correo electrónico:</b> " . $this->correo . "<br>" . "<b>Nombre de Usuario: </b>". $this->usuario ; 


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
              $consulta = "INSERT INTO phpclases_table(nombre,apellido,email,usuario,password) VALUES ('$this->nombre','$this->apellido','$this->correo','$this->usuario','$this->password')";
              $ejecutar_consulta= $conexion->query(utf8_encode($consulta));

              if ($ejecutar_consulta){

                    session_destroy();

                    header("Location: index.php?mensaje=si");

              } else {

                   echo "Ha ocurrido un problema de conexión a la base de datos";

               }



        }


} else {

echo "Ha ocurrido un problema de conexión a la base de datos";


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

if($ejecutarConsultaUsuario &&  $ejecutarConsultaPassword){

    

      



     if($ejecutarConsultaUsuario->num_rows ==1 && $passwordvalue == $password){

      

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

}



?>










