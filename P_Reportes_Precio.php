﻿<?php
session_start();
	include 'serv.php';
	if(isset($_SESSION['user'])){
	}else {
			echo '<script> window.location="iniciar_sesion.php"; </script>';
	}

$min=$_POST	['min'];
?>
<html lang="en-US">
<head>

	<title></title>

<style>
div#header{
width:200px; float:left;
padding:10px;
background:#f6f6f6;
margin-left:140px;
padding-left:50px;
}
div#tabla{
width:1685px; float:left;
padding:10px;
padding-left:140px;
padding-right:50px;

}
 div#boton{
width:1685px; float:left;
padding:10px;
padding-left:140px;
padding-right:50px;

}
 </style>
<script type="text/javascript" language="javascript" src="js/ajax.js"></script>	


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
<body>
<div id="tabla">
<table Class="table table-striped">
<tr>
	<td colspan="11"class="label-primary" ALIGN="CENTER"><b>Productos</b></td>
</tr>
<tr>
	<td  ><b>Id</b></td>
	<td  ><b>nombre</b></td>
	<td  ><b>Referencia</b></td>
	<td  ><b>color</b></td>
	<td  ><b>Precio</b></td>
	<td  ><b>Caracteristicas</b></td>
	
</tr>

</html><?php 

$host="localhost";
$usuario="root";
$contraseña="";
$base="rtb_";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//$registro = $mysqli1->query("SELECT * FROM productos WHERE Pre_Prd < '.['min']'");
$resultado="SELECT * FROM productos WHERE precio < '$min'";
$res=$conexion->query($resultado);

while ($registroCarreras = $res->fetch_array(MYSQLI_BOTH)){	  

 echo '
          <tr>
			<td class="table-active">'.$registroCarreras['id'].'</td>
			<td class="table-active">'.$registroCarreras['nombre'].'</td>
			<td class="table-active">'.$registroCarreras['referencia'].'</td>
			<td class="table-active">'.$registroCarreras['color'].'</td>
			<td class="table-active">'.$registroCarreras['precio'].'</td>
			<td class="table-active">'.$registroCarreras['descripcion'].'</td>
		  
    </tr> ';
  }
?>
<html>
</table>
</div>
</br></br>
<div id="boton">
<a name="Back" class="btn btn-default" value="Regresar" href="Reportes.php" >Regresar</a> 
<a name="Back" class="btn btn-default" value="Regresar" href="Reportes.php" >Regresar</a> 	
	
</div>
</body>
</html>
