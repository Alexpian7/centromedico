<?php

extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();

echo $sql= "update pacientes set pacIdentificacion='$_REQUEST[identificacion]', pacNombres = '$_REQUEST[nombre]', 
pacApellidos = '$_REQUEST[apellido]', pacFechaNacimiento = '$_REQUEST[fechanacimiento]', pacSexo = '$_REQUEST[sexo]'
where idPaciente = '$_REQUEST[idPaciente]' ";
$resultado = $objConexion->query($sql);

if ($resultado)
	header ("location: ../vista/listarPacientes.php?x=1"); //x=1 es actualizado correctamente
else
	header ("location: ../vista/listarPacientes.php?x=2"); //x=2 no se puede actualizar
$objConexion->close();
?>



