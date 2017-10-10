<?php
session_start();
	include 'serv.php';
	if(isset($_SESSION['user'])){
	}else {
			echo '<script> window.location="iniciar_sesion.php"; </script>';
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrese</title>
<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Index</title>

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
								<li><a href="Registro_Producto.php"> Registrar Producto</a></li>
								<li><a href="reportes.php"> Reportes</a></li>
								<li><a href="logout.php">Salir </a></li>
				
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
<div class="container">
<form action="validar_producto.php" method="post" enctype="multipart/form-data" >
<br />
 <font size="+4" face="cambria" color="black">
<center> <IMG SRC="Images\perfil.jpg" WIDTH=300 HEIGHT=200="perfil.jpg"> </center> </font></br></br>

<font size="+2" face="cambria" color="black">
Nombre del Producto 
<input  class="form-control"type="text" name="nombre" placeholder="Digite el nombre" required/></font></br>

<font size="+2" face="cambria" color="black">
Referencia del Producto 
<input  class="form-control"type="text" name="referencia" placeholder="Digite referencia" required/></font></br>

<font size="+2" face="cambria" color="black">
Precio del Producto 
<input  class="form-control"type="text" name="precio" placeholder="Digite el precio" required/></font></br>

<font size="+2" face="cambria" color="black">
Color del Producto
<input  class="form-control" type="text" name="color" placeholder="Digite color" required/></font></br>

<font size="+2" face="cambria" color="black">
Talla del Producto
<input  class="form-control" type="text" name="talla" placeholder="Digite talla"  required/></font></br>

<div class="form-group " >
	<font size="+2" face="cambria" color="black">
	Marca del Producto</font>
	</html><?php
	$mysqli = new mysqli("localhost", "root", "", "RTB_");
	$resultado1= $mysqli->query("SELECT * FROM marcas");
	?> 
	<td>
	<select Name="marca_id" class="form-control" required> 
	<option value="0">"Seleccione la marca del Producto</option> 
		<?php 
	 while($lista1=mysqli_fetch_array($resultado1)) 
		echo "<option  value='".$lista1["id"]."'>".$lista1["marca"]."</option>";  
		?><html> 
	</select>
	</td>
</div>	
<div class="form-group " >
	<font size="+2" face="cambria" color="black">
	Categorias del Producto</font>
	</html><?php
	$resultado2= $mysqli->query("SELECT * FROM categorias");
	?> 
	<td>
	<select Name="categoria_id"  class="form-control" required> 
	<option value="0">"Seleccione la Categoria del Producto</option> 
		<?php 
	 while($lista2=mysqli_fetch_array($resultado2)) 
		echo "<option  value='".$lista2["id"]."'>".$lista2["categoria"]."</option>";  
		?><html> 
	</select>
	</td>
</div>	
<font size="+2" face="cambria" color="black">
Descripcion del producto:
</br>
<textarea  class="form-control" name="descripcion" Rows="7" COLS="40" required></textarea></font>
<br>
<br>

<font size="+2" face="cambria" color="black">
Seleccione Imagen: 
<input  class="form-control" name="foto" type="file" required/>
</font>
<br />
<br />
<input  class="btn btn-default"type="submit" value="Subir" />

</form>
</div>
</br>


</body>
 </html>
