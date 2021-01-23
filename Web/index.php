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
					<li><a href="#Inici">Inici</a></li>
					<li><a href="#Sobre nosaltres">Sobre nosaltres</a></li>
					<li><a href="#Serveis">Serveis</a></li>
					<li><a href="#Contacte">Contacte</a></li>
					<li><a href="login.php">Accedir</a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>

		<div class="apartat1">
			<h2 id="Inici">ADMINISTRA LA TEVA EMPRESA AMB NOSALTRES</h2>
			<p>Empresa especialitzada en l'administració de serveis informàtics</p>
		</div>

		<div class="centrar">
			<div class="apartat2">
				<h2 id="Sobre nosaltres">SOBRE NOSALTRES</h2>
				<div class="paragrafo">
					<p>Sóm dos tècnics microinformàtics que hem acabat els estudis recentment, i ens hem aventurat a crear una
					empresa dedicada a oferir serveis informàtics als nostres clients.
					Estem disposats a oferir els millors serveis amb la màxima qualitat possible. </p>
					<img src="img/foto2.jpg">
					<div class="clear"></div>
				</div>
			</div>
		</div>

		<div class="apartat3">
			<h2 id="Serveis">SERVEIS</h2>
			<p>- Creació i edició de pàgines web utilitzant llenguatge HTML i CSS, o bé mitjançant Wordpress</p>
			<p>- Manteniment web</p>
			<p>- Administració de servidors</p>
			<p>- Administració de portals d'aprenentatge, especialment Moodle</p>
			<p>- Muntatge, manteniment i reparació d'equips informàtics</p>
			<p>- Implantació de la xarxa en entorns de treball</p>
		</div>

		<div class="centrar">
			<div class="apartat4">
				<h2 id="Contacte">CONTACTE</h2>
				<form>
					<label>Nom i cognoms</label><br>
					<input type="nom" id="name" name="name"><br>
					<label>Número de telèfon</label><br>
					<input type="telefon" name="telefon"><br>
					<label>Correu electrònic</label><br>
					<input type="correu" name="correu"><br>
					<label>Empresa</label><br>
					<input type="empresa" name="empresa"><br>
					<label>Descripció del servei</label><br>
					<textarea name="servei" rows="5"></textarea><br>
					<input type="submit" value="Enviar">
				</form>
					<img src="img/foto4.jpg">
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<!-- pié de página -->
		<div class="footer">
			<div class="centrar">
				<!-- pié izquierdo -->
				<div class="f_1">
					<div>
						<img src="img/logotelefono.png">
						<p>Número de telèfon: 937 262 356</p>

					</div>
					<div>					
						<img src="img/logowhats.png">
						<p>WhatsApp: 695 537 186</p>

					</div>
					<div>				
						<img src="img/logomail.png">
						<p>Email: boiroempresa@gmail.com</p>

					</div>
					<div>
						<img src="img/logodireccion.png">
						<p>Adreça: C/Salvany nº 126</p>
					</div>
				</div>
				<!-- pié derecho -->
				<div class="f_2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2986.479859233275!2d2.1153989152946493!3d41.537206279250775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a495a67bc9c3c7%3A0x92e7c90cb7ca7c69!2sCarrer+de+Salvany%2C+126%2C+08203+Sabadell%2C+Barcelona!5e0!3m2!1ses!2ses!4v1558345850394!5m2!1ses!2ses" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="footer2">
					<p>Pàgina realitzada per Boiro&copy;</p>
			</div>
		</div>
	</body>
</html>