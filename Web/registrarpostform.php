
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
		?>
		<div class="menu_container"> 
		<form method="POST" action="registrarpost.php">
			<p> Registrar un post </p>
			<div>
				<label> Tu nombre </label>
				<input type="text" name="nom" required />
			</div>
			<br>
			<label> Categoria </label>
			<select name="categoria" required>
				<option value=""></option>    
				<option value="Amistad">Amistad</option>    
				<option value="Amor">Amor</option>
				<option value="Así va España">Así va España</option>
				<option value="Dinero">Dinero</option>
				<option value="Estudios">Estudios</option>
				<option value="Familia">Familia</option>
				<option value="Picante">Picante</option>
				<option value="Salud">Salud</option>
				<option value="Trabajo">Trabajo</option>
				<option value="Varios">Varios</option>
			</select>
			<div>
				<br>
				<label> Anecdota </label>
				<textarea name="anecdota" required> </textarea>
			</div>
			<br>
			<button type="submit">Enviar ADV</button>
		</form>
		</div>
	</body>
</html>