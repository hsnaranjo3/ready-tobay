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
Camisetas
</center>
</font>  
<br>
<br>
<center>
<Table width="75%">
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/Camiseta1.jpg" WIDTH=250 HEIGHT=200="Camiseta1.jpg"> 
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/Camiseta2.jpg" WIDTH=250 HEIGHT=200="Camiseta2.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Camiseta3.jpg" WIDTH=250 HEIGHT=200="Camiseta3.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Camiseta4.jpg" WIDTH=250 HEIGHT=200 ="Camiseta4.jpg">
			</font>
		</td>
	</tr>

	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Puma	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Puma 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Adidas</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Adidas</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$40.000</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$45.000</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$50.000</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$50.000</font></td>
	</tr>
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/Camiseta5.jpg" WIDTH=250 HEIGHT=200="Camiseta1.jpg"> 
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/Camiseta6.jpg" WIDTH=250 HEIGHT=200="Camiseta2.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Camiseta7.jpg" WIDTH=250 HEIGHT=200="Camiseta3.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Camiseta8.jpg" WIDTH=250 HEIGHT=200 ="Camiseta4.jpg">
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Hilfiguer		</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Gucci 		</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Louis Viutton	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Nike Sb		</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$120.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$90.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$100.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$70.000	</font></td>
	</tr>
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/Camiseta9.jpg" WIDTH=250 HEIGHT=200="Camiseta1.jpg"> 
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/Camiseta10.jpg" WIDTH=250 HEIGHT=200="Camiseta2.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Camiseta11.jpg" WIDTH=250 HEIGHT=200="Camiseta3.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Camiseta12.jpg" WIDTH=250 HEIGHT=200 ="Camiseta4.jpg">
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Ecko Unltd	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Reebok 		</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Jersey Nba Oklahoma	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Jersey Nba Jordan		</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$80.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$30.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$120.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$150.000	</font></td>
	</tr>
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/Camiseta13.jpg" WIDTH=250 HEIGHT=200="Camiseta1.jpg"> 
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/Camiseta14.jpg" WIDTH=250 HEIGHT=200="Camiseta2.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Camiseta15.jpg" WIDTH=250 HEIGHT=200="Camiseta3.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Camiseta16.jpg" WIDTH=250 HEIGHT=200 ="Camiseta4.jpg">
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Jersey Nba Bulls		</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Jersey Nba NY 			</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Nfl			</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Nfl Raiders	</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$140.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$120.000 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$50.000	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$30.000	</font></td>
	</tr>
	<tr>
		<td width="20%"> 
			<font size="+4" face="cambria" color="black">
				<IMG SRC="Images/Camiseta17.jpg" WIDTH=250 HEIGHT=200="Camiseta1.jpg"> 
			</font>
		</td>
		<td width="20%"> 
			<font size="+4" face="cambria"  color="black">
				<IMG SRC="Images/Camiseta18.jpg" WIDTH=250 HEIGHT=200="Camiseta2.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Camiseta19.jpg" WIDTH=250 HEIGHT=200="Camiseta3.jpg">
			</font>
		</td>
		<td width="20%">
			<font size="+4"  face="cambria" color="black">
				<IMG SRC="Images/Camiseta20.jpg" WIDTH=250 HEIGHT=200 ="Camiseta4.jpg">
			</font>
		</td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Wutang		</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta Canserbero 	</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta RG4L 		</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">Camiseta RHLM			</font></td>
	</tr>
	<tr>
		<td width="25%"><font size="+1" face="cambria" color="black">$20.000</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$20.000</font></td>
		<td width="25%"><font size="+1" face="cambria" color="black">$90.000</font></td>
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
