<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bienvenidos</title>
<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
</head>
<center>
<header>
<div class="navegacion">
		<nav>
			<ul>
				<li><a href="index.php">Inicio <span class="icon icon-up-dir"></span></a></li>
				<li>
					<a href="#">Perfil<span class="icon icon-up-dir"></span></a>
					<div class="submenu">
						<div class="submenu-items">
							<ul>
								<?php
								session_start();
									include 'serv.php';
										if(isset($_SESSION['user']))
										{
											echo '<li><a href="Registro_Producto.php"> Registrar Producto</a></li>';
											echo '<li><a href="reportes.php"> Reportes</a></li>';
											echo '<li><a href="logout.php">Salir </a></li>';
										} 
										else{
											echo '<li><a href="iniciar_sesion.php">Iniciar sesion</a></li>';
											echo '<li><a href="Registro_Usuario.php">Registrarse</a></li>';
										}
								?>
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
								<li><a href="#"><a href="mujereszapatillas.php">Mujer</a></li>
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
								<li><a href="#"><a href="Hombreschaquetas.php">Hombre</a></li>
								<li><a href="#"><a href="Mujereschaquetas.php">"Mujer</a></li>
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


<center>
<Table width="75%">
	<tr>
		<td width="20%">
		<font size="+4" face="Raleway" color="black">
		<a href="retro 14.php"><img src="images/retro 14.jpg" width=250 height=200="retro 14.jpg"> </a></font></td>
		<td width="20%">
		<font size="+4" face="Raleway"  color="black">
		<a href="tatansito.php"> <IMG SRC="images/1.jpg" WIDTH=250 HEIGHT=200="images/retro 6.jpg"></a> </font></td>
		<td width="20%">
		<font size="+4"  face="Raleway" color="black">
		<a href="tatansito.php"> <img src="images/Nike for one.jpg" width=250 height=200="nike for one.jpg"></a></font></td>
		<td width="20%">
		<font size="+4"  face="Raleway" color="black">
		<a href="air max 90.php"><img src="images/airmax.jpg" width=250 height=200 ="airmax.jpg"></a></font></td>
	</tr>
	<tr>
		<td width="25%"> <font size="+1" face="Raleway" color="black">Retro 14 </font></td>
		<td width="25%"> <font size="+1" face="Raleway"  color="black">Buso Hip Hop Dont' Stop </font></td>
		<td width="25%"><font size="+1"  face="Raleway" color="black">Nike For One</font></td>
		<td width="25%"><font size="+1"  face="Raleway" color="black">Air max 90</font></td>
	</tr>
	<tr>
		<td width="25%"> <font size="+1" face="Raleway" color="black">$125.000 </font></td>
		<td width="25%"> <font size="+1" face="Raleway"  color="black">$80.000 </font></td>
		<td width="25%"><font size="+1"  face="Raleway" color="black">$160.000</font></td>
		<td width="25%"><font size="+1"  face="Raleway" color="black">$200.000</font></td>
	</tr>
	<tr>
	<td width="20%"> <font size="+4" face="cambria" color="black">	<a href="retro4.html"> <IMG SRC="images/Nike air jordan retro 4.jpg" WIDTH=250 HEIGHT=200="retro 14.jpg"> </a> </font></td>
	<td width="20%"> <font size="+4" face="cambria"  color="black">	<a href="newbalance1500.html"> <IMG SRC="images/New balance 1500.jpg" WIDTH=250 HEIGHT=200="retro 6.jpg"> </a> </font></td>
	<td width="20%"><font size="+4"  face="cambria" color="black"><a href="ewingpatrick.html"><img src="images/ewing patrick.jpg" width=250 height=200="ewing patrick.jpg"></a></font></td>
	<td width="20%"><font size="+4"  face="cambria" color="black"><a href="reebok.html"><img src="images/ReebokClassic.jpg" width=250 height=200 ="ari max90.jpg"></a></font></td>

	</tr>
	<tr>
		<td width="25%"> <font size="+1" face="Raleway" color="black">Air Jordan Retro 4</font></td>
		<td width="25%"> <font size="+1" face="Raleway"  color="black">New Balance 1500 </font></td>
		<td width="25%"><font size="+1"  face="Raleway" color="black">Ewing Patrick</font></td>
		<td width="25%"><font size="+1"  face="Raleway" color="black">Reebok Classic</font></td>
	</tr>
	<tr>
		<td width="25%"> <font size="+1" face="Raleway" color="black">$205.000 </font></td>
		<td width="25%"> <font size="+1" face="Raleway"  color="black">$180.000 </font></td>
		<td width="25%"><font size="+1"  face="Raleway" color="black">$200.000</font></td>
		<td width="25%"><font size="+1"  face="Raleway" color="black">$250.000</font></td>
	</tr>
</table>
</body>
<br>
<br>
<hr align"center" width= "70%" size"10" color="#0066ff">
<br>
<center> <font color="black" face="Raleway" size="+2"> CONTACTENOS </font>
<font color="black" face="multicolore" size="+1"> 
<br>
Telefono: 5372396
<br>
Celular: 3186212089
<br>
E-mail : rtblatienda@gmail.com
<br>
Direccion: cra 103 c #141-44 
</center> 
<br>
<br>
</html>

