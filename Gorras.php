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
Gorras
</center>
</font>  
<br>
<br>
<center>
<Table width="75%">
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/Gorra1.jpg" WIDTH=250 HEIGHT=200="Gorra1.jpg"> 
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/Gorra2.jpg" WIDTH=250 HEIGHT=200="Gorra2.jpg"> 
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Gorra3.jpg" WIDTH=250 HEIGHT=200="Gorra3.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Gorra4.jpg" WIDTH=250 HEIGHT=200 ="Gorra4.jpg">
			</font>
		</td>
	</tr>
<tr>
<td width="25%"> <font size="+1" face="cambria" color="black">Gorra Snapback Nike</font>
<td width="25%"> <font size="+1" face="cambria"  color="black">Pava Adidas </font>
<td width="25%"><font size="+1"  face="cambria" color="black">Gorro Adidas </font>
<td width="25%"><font size="+1"  face="cambria" color="black">Gorra Sport Adidas 500</font>
</tr>
</table>
<center>
<Table width="75%">
<tr>
<td width="25%"> <font size="+1" face="cambria" color="black">$50.000 </font>
<td width="25%"> <font size="+1" face="cambria"  color="black">$60.000 </font>
<td width="25%"><font size="+1"  face="cambria" color="black">$80.000</font>
<td width="25%"><font size="+1"  face="cambria" color="black">$60.000</font>

</tr>
</table>
<center>
<Table width="75%">
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/Gorra5.jpg" WIDTH=250 HEIGHT=200="Gorra1.jpg"> 
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/Gorra6.jpg" WIDTH=250 HEIGHT=200="Gorra2.jpg"> 
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Gorra7.jpg" WIDTH=250 HEIGHT=200="Gorra3.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Gorra8.jpg" WIDTH=250 HEIGHT=200 ="Gorra4.jpg">
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Adidas Sport	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Nike Negra 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Nike Sport2	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Nike Classic	</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$120.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$90.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$100.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$100.000	</font></td>
	</tr>
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/Gorra9.jpg" WIDTH=250 HEIGHT=200="Gorra1.jpg"> 
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/Gorra10.jpg" WIDTH=250 HEIGHT=200="Gorra2.jpg"> 
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Gorra11.jpg" WIDTH=250 HEIGHT=200="Gorra3.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Gorra12.jpg" WIDTH=250 HEIGHT=200 ="Gorra4.jpg">
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Gorra Fox				</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Gorra Fox Styles Bota 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Gorra Reebook Snapback	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Gorra Louis Vuitton	</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$150.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$120.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$100.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$300.000	</font></td>
	</tr>
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/Gorra13.jpg" WIDTH=250 HEIGHT=200="Gorra1.jpg"> 
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/Gorra14.jpg" WIDTH=250 HEIGHT=200="Gorra2.jpg"> 
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Gorra15.jpg" WIDTH=250 HEIGHT=200="Gorra3.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Gorra16.jpg" WIDTH=250 HEIGHT=200 ="Gorra4.jpg">
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Gorra Gucci			</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Gorro Louis Vuitton 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Gorra New Era Bulls	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Gorra New Era Lakers	</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$200.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$150.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$60.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$80.000	</font></td>
	</tr>
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/foxgorr1.jpg" WIDTH=250 HEIGHT=200="Gorra1.jpg"> 
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/foxgorr2.jpg" WIDTH=250 HEIGHT=200="Gorra2.jpg"> 
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/foxgorr3.jpg" WIDTH=250 HEIGHT=200="Gorra3.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/foxgorr4.jpg" WIDTH=250 HEIGHT=200 ="Gorra4.jpg">
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Gorra Nike Sb	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Pava Air Jordan</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Gorra Supra 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Gorro Obey		</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$90.000</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$80.000</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$50.000</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$95.000</font></td>
	</tr>
</table>
</br>
</br>
<hr align"center" width= "70%" size"10" color="#0066ff">
</br>
<center> <font color="black" face="Raleway" size="+2"> CONTACTENOS </font>
<font color="black" face="multicolore" size="+1"> 
<br>
Telefono: 5372396
</br>
Celular: 3186212089
</br>
E-mail : rtblatienda@gmail.com
</br>
Direccion: cra 103 c #141-44 
</center>  
</center>
</body>
</html>

