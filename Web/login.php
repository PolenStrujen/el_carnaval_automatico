
<?php 
	include_once("headers.php");
?>
	<body>
		<div class="header">
			<div class="titulo">
				<img src="img/LogoEmpresa.png">
			</div>
		</div>
		<div class="menu">
			<div class="menu_container">
				<ul class="idiomas">
					<li><a href="index.php"><span style="color: white;">Català</a></li>
					<li><a href="boiroES.html"><span style="color: white;">Castellano</a></li>
					<li><a href="boiroANG.html"><span style="color: white;">English</a></li>
				</ul>	
				<ul class="nav">
					<li><a href="index.php">Inici</a></li>
					<li><a href="index.php">Sobre nosaltres</a></li>
					<li><a href="index.php">Serveis</a></li>
					<li><a href="index.php">Contacte</a></li>
					<li><a href="login.php">Accedir</a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
		<div class="menu_container"> 
		<form method="POST" action="auth.php">
			<p> Iniciar sessió </p>
			<div>
				<label>Username</label>
				<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
			</div>
			<div>
				<label>Password</label>
				<input type="password" name="password" pattern="[a-zA-Z0-9]+" required />
			</div>
			<button type="submit" name="login" value="login">Log In</button>
		</form>
		<br>
		<button> <a href="registre.html"> <span style="color: black;"> Registre </span> </a> </button>
		
		</div>
	</body>
</html>