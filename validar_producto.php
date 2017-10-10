<?php
include('conexion.php');
$Imagen			=$_FILES['foto']['name'];
$Ruta			=$_FILES['foto']['tmp_name'];
$Destinos		="images/Productos/".$Imagen;
$Nombres		=$_POST	['nombre'];
$Referencias	=$_POST ['referencia'];
$Colores 		=$_POST	['color'];
$tallas 		=$_POST	['talla'];
$Pesos			=$_POST	['marca_id'];
$Precios		=$_POST ['categoria_id'];
$Fechas			=$_POST	['precio'];
$Caracteristicas=$_POST	['descripcion']; 
 
copy($Ruta,$Destinos);
$query = "insert into productos (nombre,foto,referencia ,color ,talla ,marca_id,categoria_id ,precio ,descripcion ) 
  values('$Nombres','$Destinos','$Referencias', '$Colores', '$tallas', $Pesos ,$Precios, '$Fechas' ,'$Caracteristicas')";
$resultado=$conexion->query($query);
?>
<html></br></br></html>

<?php
if ($resultado) {
			echo "registo Guardado";
			header("location:index.php");
			}
		else{
	echo "registo No Guardado";
	}
?>