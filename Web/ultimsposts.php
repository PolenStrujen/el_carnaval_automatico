<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Boiro</title>
		<link rel="shortcut icon" href="img/LogoEmpresa.png">
		<link rel="stylesheet" href="estilo.css">
	</head>
	
	<body>
		<div class="header">
			<div class="titulo">
				<img src="img/LogoEmpresa.png">
			</div>
		</div>
		<div class="menu">
			<div class="menu_container">
				<ul class="idiomas">
					<li><a href="logout.php"><span style="color: white;">Logout</a></li>
				</ul>	
				<ul class="nav">
					<li><a href="ultimsposts.php">Ultims posts</a></li>
					<li><a href="registrarpostform.php">Registrar post</a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
		
		<?php
		
		session_start();
		
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			header("location: login.php");
			exit;
		}
		
		require_once "database.php";
		
		$mostrarpost = "select * from post";
		$result4 = $conn->query($mostrarpost);
		
		while ($mostrar = $result4->fetch_assoc()){
			echo "
			<div class="."menu_container".">
				<tr>	
					<br>
					<td>Nom: ".$mostrar['nom']."</td>
					<td>Categoria: ".$mostrar['categoria']."</td>
					<br>
					<td>Anecdota: ".$mostrar['anecdota']."</td>
				</tr>
			</div>
			";
		}
		
		$conn->close();
		
		?>
		
	</body>
</html>