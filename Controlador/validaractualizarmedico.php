<?php

extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();

echo $sql= "update medicos set medIdentificacion='$_REQUEST[identificacion]', medNombres = '$_REQUEST[nombre]', 
medApellidos = '$_REQUEST[apellido]', medEspecialidad = '$_REQUEST[especialidad]', medTelefono = '$_REQUEST[telefono]',  medCorreo = '$_REQUEST[correo]'
where idMedico = '$_REQUEST[idMedico]' ";
$resultado = $objConexion->query($sql);

if ($resultado)
	header ("location: ../vista/listarmedicostabla.php?x=1"); //x=1 es actualizado correctamente
else
	header ("location: ../vista/listarmedicostabla.php?x=2"); //x=2 no se puede actualizar
$objConexion->close();
?>
