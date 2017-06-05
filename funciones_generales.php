<?php
extract($_POST);
extract($_GET);
extract($_COOKIE);

error_reporting(E_ERROR);

set_time_limit(120);

extract($_GET);
extract($_POST);
extract($_FILES);


//Conectamos a la base de datos
define('DB_SERVER', 'localhost:3036');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'reservacion');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start();

$remote_ip=$_SERVER["REMOTE_ADDR"];

function loguearse($user,$pass){


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // Usamos el nombre de usuario enviado de nuestroformulario
      
      $myusername = mysqli_real_escape_string($db,$user);
      $mypassword = mysqli_real_escape_string($db,$pass); 
      
      $sql = "SELECT * FROM usuario WHERE usu_nombre = '$myusername' and usu_pass = '$mypassword'";

      $result = mysqli_query($db,$sql);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $rol = $row['usu_rol'];
      
      $count = mysqli_num_rows($result);
      
      // Si el resultado combinado $myusername y $mypassword,fila de la tabla debe estar en 1 fila
        
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }

}


function insertar($tabla, $arreglo){

	$campos="(";
	$valores="(";

    $total=count($arreglo);

	foreach ($arreglo as $campo => $valor) {

        if ($total==1) {
            $campos.=$campo;
            $valores.="\"$valor\"";
        }
        else{
            $campos.=$campo.",";
            $valores.="\"$valor\", ";
        }
        $total--;

	}

	$valores.=");";
	$campos.=")";

	$sql= "INSERT INTO $tabla $campos VALUES $valores";

    $result = mysqli_query($db,$sql);¿


	//mysqli_query($link, "INSERT INTO agenda VALUES ('Pedro2', 'Gómez Gómez', 'C/ Buenaventura 54', '699887766', 35, 1.98)");
}

?>
