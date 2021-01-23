
<?php

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "database.php";


$nom = $_POST["nom"];
$categoria = $_POST["categoria"];
$anecdota = $_POST["anecdota"];


if (strpos($password, "'")){
	header("location: registrarpost.php");
} else {
$registrarpost = "insert into post (nom, categoria, anecdota) values ('$nom', '$categoria' ,'$anecdota')";
$result6 = $conn->query($registrarpost);

if ($result6->num_rows > 0) {
  session_start();
  $_SESSION["loggedin"] = true;
  header("location: registrarpostform.php");
  exit;
} else {
  echo "0 results";
  header("location: ultimsposts.php");
  exit;
}

}

mysqli_close($conn);

?>