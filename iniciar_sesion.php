<?php
session_start();
	include 'serv.php';
	if(isset($_SESSION['user'])){
	echo '<script> window.location="index.php"; </script>';
	}else {
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bienvenidos</title>
<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
	
	<link href="Theme%20Template%20for%20Bootstrap_files/bootstrap.css" rel="stylesheet">
    <link href="Theme%20Template%20for%20Bootstrap_files/bootstrap-theme.css" rel="stylesheet">
    <link href="Theme%20Template%20for%20Bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="Theme%20Template%20for%20Bootstrap_files/theme.css" rel="stylesheet">
	<script src="Theme%20Template%20for%20Bootstrap_files/ie-emulation-modes-warning.txt"></script>	

</head>
<center>
<header><div class="navegacion">
		<nav>
			<ul>
				<li><a href="index.php">Inicio <span class="icon icon-up-dir"></span></a></li>
				<li>
					<a href="#">Perfil<span class="icon icon-up-dir"></span></a>
					<div class="submenu">
						<div class="submenu-items">
							<ul>
									<li><a href="iniciar_sesion.php">Iniciar sesion</a></li>
									<li><a href="Registro_Usuario.php">Registrarse</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="Zapatillas.php">Zapatillas <span class="icon icon-up-dir"></span></a>
					<div class="submenu">
						<div class="submenu-items">
							<p>Sexo</p>
							<ul>
								<li><a href="#"><a href="hombreszapatillas.php">Hombre</a></li>
								<li><a href="#"><a href="mujereszapatillas.php">"Mujer</a></li>
							</ul>
						</div>
						<div class="submenu-items">
							<p>Marca</p>
							<ul>
								<li><a href="#">Adidas</a></li>
								<li><a href="#">Reebok</a></li>
								<li><a href="#">Nike</a></li>
							</ul>
						</div>
						
					</div>
				</li>
				<li>
					<a href="Camisetas.php">Camisetas <span class="icon icon-up-dir"></span></a>
					<div class="submenu">
						<div class="submenu-items">
							<p>Sexo</p>
							<ul>
								<li><a href="#"><a href="hombrescamisetas.php"> Hombre</a></li>
								<li><a href="#"><a href="mujerescamisetas.php">"Mujer</a></li>
								<li><a href="#">Unisex</a></li>
							</ul>
						</div>
						<div class="submenu-items">
							<p>Marca</p>
							<ul>
								<li><a href="#">Adidas</a></li>
								<li><a href="#">Reebok</a></li>
								<li><a href="#">Nike</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="chaquetas.php">Chaquetas <span class="icon icon-up-dir"></span></a>
					<div class="submenu">
						<div class="submenu-items">
							<p>Sexo</p>
							<ul>
								<li><a href="#"><a href="Hombreschaquetas">Hombre</a></li>
								<li><a href="#"><a href="Mujereschaquetas">"Mujer</a></li>
								<li><a href="#">Unisex</a></li>
							</ul>
						</div>
						<div class="submenu-items">
							<p>Marca</p>
							<ul>
								<li><a href="#">Adidas</a></li>
								<li><a href="#">Reebok</a></li>
								<li><a href="#">Nike</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="Gorras.php">Gorras<span class="icon icon-up-dir"></span></a>
					<div class="submenu">
						<div class="submenu-items">
							<p>Unisex</p>
							<ul>
								<li><a href="#"><a href="adidasgorras.php">Adidas</a></li>
								<li><a href="#"><a href="foxgorras.php">Fox</a></li>
								<li><a href="#"><a href="nikegorras.php">Nike</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">Contactenos <span class="icon icon-up-dir"></span></a>
					<div class="submenu">
						<div class="submenu-items">
							<p>Devoluciones</p>
							<ul>
								<li><a href="#">4488657</a></li>
								<li><a href="#">3106967456</a></li>
							
							</ul>
						</div>
						<div class="submenu-items">
							<p>Pedidos</p>
							<ul>
								<li><a href="#">576494'</a></li>
								<li><a href="#">3057375436</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li><a href="#">Ayuda <span class="icon icon-up-dir"></span></a></li>
				<input type="search" name="Search" id="search" placeholder="Buscar"></input>
 			</ul>
		</nav>
</div>
</header>
</center>
<body background="inicio.jpg"></br></br></br>
<a><font color="black" face="Raleway" size="+100"> <center> Bienvenidos a RTB  </center></font> </a><br><br><br>
<br/>
<br />
<br />
<center>
<div class="container">
<form method="post" action="proceso_iniciar_session.php">

<p><font size="+2" face="Raleway" color="black">Email<br />
  <input class="form-control" type="email" name="user" Required/><br />
  Contraseña<br />
  <input class="form-control"type="password" name="pw" Required/><br />
  
  <input class="btn btn-defaulf" type="submit" name="login"value="Enviar">
  </form>
  
</p>
</body>
</html>
<?php	}
	?>