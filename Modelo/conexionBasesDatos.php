<?php
function Conectarse()
{
	$Conexion=new MysQli("localhost","root","","centromedico");
	
	
		if ($Conexion->connect_errno) 
		echo "Problemas en la Conexion ". $Conexion->connect_error;
	else
		return $Conexion;
}
?>
