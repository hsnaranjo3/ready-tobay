<?php

$conexion= new mysqli("localhost","root","","rtb_");

if($conexion){ 
echo".";
}else {
	echo"sin conexion";
}

?>