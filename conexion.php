<?php

$conexion= new mysqli("localhost","root","","rtb");

if($conexion){ 
echo".";
}else {
	echo"sin conexion";
}

?>