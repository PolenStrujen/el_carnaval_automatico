
<?php

session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ultimsposts.php");
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

if (strpos($password, "'")){
	header("location: registre.html");
} else{
$registrar = "insert into act01 (username, password) values ('$username', '$password');";
$result2 = $conn -> query($registrar);

if ($result2->num_rows > 0) {
  session_start();
  $_SESSION["loggedin"] = true;
  header("location: registre.html");
  exit;
} else {
  echo "0 results";
  header("location: login.php");
  exit;
}

}
$conn->close();

?>