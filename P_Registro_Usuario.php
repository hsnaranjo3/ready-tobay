 <?php
include("conexion.php");
$cedula=$_POST['Cedula'];
$nombre=$_POST['Nombre'];
$apellidos=$_POST['Apellidos'];
$email=$_POST['user'];
$direccion=$_POST['Direccion'];
$telefono=$_POST['Telefono'];
$celular=$_POST['Celular'];
$contrasena=$_POST['pw'];
$query="insert into usuario (Cedula,Nombre,Apellidos,user,Direccion,Telefono,Celular,pw)
values ('$cedula','$nombre','$apellidos','$email','$direccion','$telefono','$celular','$contrasena')";


if ($resultado = $conexion->query($query)) {
	echo "INGRESO DATOS";
	header("location: RTB2.php") ; 

	}else{
	
	 echo"Usted a Sido Registrado de forma incorrecta <br> Realize bien el registro";}

?>