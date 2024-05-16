<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);


$objConexion = Conectarse();

$sql="delete from consultorios where idConsultorio = '$_REQUEST[idConsultorio]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: ../vista/listarconsultoriotabla.php?x=3");  //x=3 quiere decir que se eliminó bien
else
	header("location: ../vista/listarconsultoriotabla.php?x=4");  //x=4 quiere decir que no se pudo eliminar.
?>


