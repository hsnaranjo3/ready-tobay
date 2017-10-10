<?php include ("conexiondin.php");?>
	<?php mysql_select_db($baseDatos);?>
	<?php 
		$sql="select * from oper where Tab_id=".$_GET['id'];
		$res=mysql_query($sql);
		/*while ($fila=mysql_fetch_array($res)){
		echo $fila['nombre'];
		}*/
	?>
	<head>
	    <link href="Theme%20Template%20for%20Bootstrap_files/bootstrap.css" rel="stylesheet">
    <link href="Theme%20Template%20for%20Bootstrap_files/bootstrap-theme.css" rel="stylesheet">
    <link href="Theme%20Template%20for%20Bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">
   <link href="Theme%20Template%20for%20Bootstrap_files/theme.css" rel="stylesheet">
   <script src="Theme%20Template%20for%20Bootstrap_files/ie-emulation-modes-warning.txt"></script>
	</head>
	
	<body>
</br>Filtrar Por:
<form name="seleccion_" action="#" method="post">
<select class ="form-control"onchange="window.location.href=this.options[this.options.selectedIndex].value" name="elige" size="1">
    <option value="#">Elija</option>
    <option value="maquinas.php">Precios</option>
    <option value="http://www.google.com">Fechas</option>
</select>
 
	
</form>
