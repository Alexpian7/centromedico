<?php
session_start();
extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
//Asignar a $sql el texto de la Consulta
$sql="insert into consultorios (idConsultorio,conNombre) values ('$_REQUEST[identificacion]','$_REQUEST[nombres]')";

$resultado=$objConexion->query($sql);

if($resultado)
{
	/*si se ejecutó bien, se retorna a la pagina y se envia variable msj=1, indicando que
	se agregó correctamentw*/
	header("location:../Vista/index2.php?pag=insertarConsultorio&msj=1");
}
else
{
	/*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=2, indicando que
	no se puedo agregar*/
	header("location:../Vista/index2.php?pag=insertarConsultorio&msj=2");
}

?>

