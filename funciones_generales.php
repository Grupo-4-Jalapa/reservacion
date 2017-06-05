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
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'reservacion');
$connect = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
session_start();
$remote_ip=$_SERVER["REMOTE_ADDR"];
$persona_idpk = $_SESSION["user2"];
$direccion = "http://localhost/proyecto/";
//Establecer la información local en castellano de España
setlocale(LC_TIME,"es_ES");
$hoy = date("Y-m-d");


function insertar($tabla,$arreglo,$print_sql){
global $connect;
	$campos="(";
	$valores="(";

    $total=count($arreglo);

	foreach ($arreglo as $campo => $valor) {

        if ($total==1) {
            $campos.=$campo;
            $valores.="\"$valor\"";
        }
        else{
            $campos.=$campo.", ";
            $valores.="\"$valor\", ";
        }
        $total--;

	}

	$valores.=")";
	$campos.=")";

	$sql= "INSERT INTO $tabla $campos VALUES $valores";

    if($print_sql==1){
        echo $sql;
        echo "<br>";
        return;
    }
    else{
        $result = mysqli_query($connect, $sql);
        //$id = mysqli_num_rows($result);
        $id = mysqli_insert_id($connect);
    return $id;
    }
}

function actualizar($tabla,$arreglo,$where='',$print_sql){
global $connect;
    $campos="(";

    $total=count($arreglo);

    foreach ($arreglo as $campo => $valor) {



        if ($total==1) {
            $campos.="$campo = \"$valor\"";
        }
        else{
            $campos.="$campo = \"$valor\", ";
        }
        $total--;

    }
    $campos.=")";

    $sql= "UPDATE $tabla SET $campos VALUES $valores";

    if(!empty($where)){
        $sql.="where $where ";
    } 

    if($print_sql==1){
        echo $sql;
        echo "<br>";
        return;
    }
    else{
        $result = mysqli_query($connect, $sql);
        //$id = mysqli_num_rows($result);
        $id = mysqli_insert_id($connect);
    return $id;
    }
}


function eliminar($tabla,$where='',$print_sql){
global $connect;

    $sql= "DELETE FROM $tabla";

    if(!empty($where)){
        $sql.=" where $where ";
    } 

    if($print_sql==1){
        echo $sql;
        echo "<br>";
        return;
    }
    else{
        $result = mysqli_query($connect, $sql);
        //$id = mysqli_num_rows($result);
    return 1;
    }
}

function seleccionar($sql,$print_sql){
global $connect;
     
     if($print_sql==1){
        echo $sql;
        echo "<br>";
        return;
    }
    else{
         $result = mysqli_query($connect,$sql);
         $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        return $data;
    }
    
}


function registro($sql,$print_sql){
global $connect;
     
     if($print_sql==1){
        echo $sql;
        echo "<br>";
        return;
    }
    else{
         $result = mysqli_query($connect,$sql);
         $data = mysqli_fetch_array($result);
        return $data;
    }
    
}

function redireccionar($pagina,$imprimir){
    if($imprimir!=1){
    header("location:$pagina");
    }
}

function convertir_hora($hora){
    $d_hora = $hora <= 12 ? "am" : "pm";
    $minutos = substr($hora, -2);
    $hora = $hora <=12 ? $hora : "0".($hora - 12).":".$minutos;
    return $hora." ".$d_hora;
}
function fecha_i($fecha){
    $fecha = date("Y-m-d", strtotime($fecha));
    return $fecha;
}
function fecha_e($fecha){
    $fecha = date("d-m-Y", strtotime($fecha));
    return $fecha;
}
function enc($str){
 return base64_encode( base64_encode($str) );
}
function dec($str){
 return base64_decode( base64_decode($str) );
}
?>
