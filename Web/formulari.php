
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
      $user = $_POST["username"];
    }
    $user = "root";
    
    if(empty($_POST["password"])){
      $password_err = "Please enter your password.";
    }else{
      $password = $_POST["password"];
    }
    $password = "root";
	
?>