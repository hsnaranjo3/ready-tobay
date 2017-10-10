<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RTB</title>
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
								<li><a href="#"><a href="mujerescamisetas.php"> Mujer</a></li>
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
								<li><a href="#"><a href="Mujereschaquetas.php">Mujer</a></li>
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
<body background="inicio.jpg">
<font color="black" face="Raleway" size="+100" >
<center>
Chaquetas Para Mujer
</center>
</font>  
<br>
<br>
<center>
<Table width="75%">
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/chaquetam1.jpg" WIDTH=250 HEIGHT=200="Camiseta1.jpg">
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/chaquetam2.jpg" WIDTH=250 HEIGHT=200="Camiseta2.jpg"> 
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/chaquetam3.jpg" WIDTH=250 HEIGHT=200="Camiseta3.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/chaquetam4.jpg" WIDTH=250 HEIGHT=200 ="Camiseta4.jpg"> 
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Chaqueta Jean	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Chaqueta Adidas</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Chaqueta Puma 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Chaqueta Nike 	</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$260.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$180.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$320.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$210.000	</font></td>
	</tr>
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/chaquetam5.jpg" WIDTH=250 HEIGHT=200="Camiseta1.jpg">
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/chaquetam6.jpg" WIDTH=250 HEIGHT=200="Camiseta2.jpg"> 
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/chaquetam7.jpg" WIDTH=250 HEIGHT=200="Camiseta3.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/chaquetam8.jpg" WIDTH=250 HEIGHT=200 ="Camiseta4.jpg"> 
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Chaqueta Reebok	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Chaqueta Nike 		</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Chaqueta Nike		</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Chaqueta Berskha	</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$180.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$1950.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$170.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$300.000	</font></td>
	</tr>
	<tr>
		<td colspan="2" width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/chaquetam9.jpg" WIDTH=250 HEIGHT=200="Camiseta1.jpg">
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/chaquetam10.jpg" WIDTH=250 HEIGHT=200="Camiseta2.jpg"> 
			</font>
		</td>
	</tr>
	<tr>
		<td colspan="2" width="25%"><font size="+1" face="cambria" color="black">Chaqueta Columbia	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Chaqueta Prada		</font></td>
	</tr>
	<tr>
		<td colspan="2" width="25%"><font size="+1" face="cambria" color="black">$200.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$310.000	 </font></td>
	</tr>
</table>
</center>
</body>
</html>