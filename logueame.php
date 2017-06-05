<?php

session_start();
include_once("funciones_generales.php");

if(isset($_POST["user"]) && isset($_POST["pass"])){
  $user = mysqli_real_escape_string($connect, $_POST["user"]);
  $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
  $sql = "SELECT user,pers_id FROM usuario inner join persona on pers_id = persona_id WHERE (user='$user' OR email='$user') AND pass='$pass'";
  $result = mysqli_query($connect, $sql);
  $num_row = mysqli_num_rows($result);
  if ($num_row == "1") {
    $data = mysqli_fetch_array($result);
    $_SESSION["user"] = $data["user"];
    $_SESSION["user2"] = $data["pers_id"];
    echo "1";
  } else {
    echo "error";
  }
} else {
  echo "error";
}

?>
