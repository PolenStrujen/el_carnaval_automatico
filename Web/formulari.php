
<?php

session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: especial.html");
    exit;
}

require_once "database.php";

$username = "";
$password = "";
$username_err = "";
$password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty($_POST["username"])){
      $username_err = "Please enter username.";
    } else{
      $username = $_POST["username"];
    }
    
    if(empty($_POST["password"])){
      $password_err = "Please enter your password.";
    }else{
      $password = $_POST["password"];
    }
	
}

if (empty($username_err) && empty($password_err)){
$validar = "select * from act01 where username='$username' and password='$password'";
$result = $conn -> query($validar);

if ($result->num_rows > 0) {
  session_start();
  $_SESSION["loggedin"] = true;
  header("location: especial.html");
  exit;
} else {
  echo "0 results";
  header("location: login.html");
  exit;
}

}
$conn->close();

?>