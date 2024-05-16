<?php
//Se reciben los datos del formulario
require "../Modelo/ConexionDatos.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into medico (medIdentificacion,medNombre,medApellido,medEspecialidad, medTelefono, medCorreo) 
values ('$_REQUEST[identificacion]' , '$_REQUEST[nombre]', '$_REQUEST[apellido]', '$_REQUEST[especialidad]'
,'$_REQUEST[telefono]','$_REQUEST[correo]')";

$resultado = $objConexion->query($sql);

if ($resultado)
	echo "El medico se ha agregado correctamente";
else
	echo "Problemas al Agregar el medico";

?>
