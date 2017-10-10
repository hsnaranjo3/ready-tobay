<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<body background="inicio.jpg">

<font color="black" face="Raleway" size="+100" >
<center>
Zapatillas Para Hombre
</center>
</font>  
<br>
<br>
<center>
<Table width="75%">
	<tr>
		<td width="20%">
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/zapatillas1.jpg" WIDTH=250 HEIGHT=200>
			</font>
		</td>
		<td width="20%">
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/zapatillas2.jpg" WIDTH=250 HEIGHT=200>
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/zapatillas3.jpg" WIDTH=250 HEIGHT=200>
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/zapatillas4.jpg" WIDTH=250 HEIGHT=200>
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Nike Air Max 90	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Nike Air Max One 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Soma Shoes			</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Adidas Zx 500		</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$200.000 	</font>
		<td width="25%"><font size="+1" face="cambria" color="black">$250.000 	</font>
		<td width="25%"><font size="+1" face="cambria" color="black">$150.000	</font>
		<td width="25%"><font size="+1" face="cambria" color="black">$140.000	</font>
	</tr>
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/zapatillas5.jpg" WIDTH=250 HEIGHT=200>
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/zapatillas6.jpg" WIDTH=250 HEIGHT=200>
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/zapatillas7.jpg" WIDTH=250 HEIGHT=200>
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/zapatillas8.jpg" WIDTH=250 HEIGHT=200>
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Adidas Torsion	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Adidas Spezial	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Adidas Retro	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Adidas Dragon	</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$280.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$120.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$240.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$100.000	</font></td>
	</tr>
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/zapatillas9.jpg" WIDTH=250 HEIGHT=200="zapatillas9.jpg"> 
			</font>
		</td>
		<td width="20%">
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/zapatillas10.jpg" WIDTH=250 HEIGHT=200="zapatillas10.jpg"> 
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/zapatillas11.jpg" WIDTH=250 HEIGHT=200="zapatillas11.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/zapatillas12.jpg" WIDTH=250 HEIGHT=200 ="zapatillas12.jpg"> 
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"> <font size="+1" face="cambria" color="black">Fila Sportage			</font></td>
		<td width="25%"> <font size="+1" face="cambria"  color="black">Fila Sportage Bota	</font></td>
		<td width="25%"><font size="+1"  face="cambria" color="black">Adidas Ultraboost		</font></td>
		<td width="25%"><font size="+1"  face="cambria" color="black">Fila Cobby			</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$180.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$220.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$100.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$300.000	</font></td>
	</tr>
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/zapatillas13.jpg" WIDTH=250 HEIGHT=200="zapatillas13.jpg"> 
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/zapatillas14.jpg" WIDTH=250 HEIGHT=200="zapatillas14.jpg"> 
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/zapatillas15.jpg" WIDTH=250 HEIGHT=200="zapatillas15.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/zapatillas16.jpg" WIDTH=250 HEIGHT=200 ="zapatillas16.jpg"> 
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"> <font size="+1" face="cambria" color="black">Puma Street		</font></td>
		<td width="25%"> <font size="+1" face="cambria"  color="black">Puma Rihanna 	</font></td>
		<td width="25%"><font size="+1"  face="cambria" color="black">Nike Air Huarache	</font></td>
		<td width="25%"><font size="+1"  face="cambria" color="black">Nike Cortez		</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$80.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$290.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$310.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$220.000	</font></td>
	</tr>
</table>
</center>
</body>
</html>