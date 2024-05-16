<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Paciente.php";
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;
$objPaciente=new Paciente();
$pacientes=$objPaciente->consultarPacientes();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Paciente:)</title>
</head>

<body>
<h1 align="center">LISTADO DE PACIENTES</h1>
<table width="70%" border="0"  text="center"  cellpadding="1" align="center">
  <tr align="center" bgcolor="#6E6E6E" class="texto">
    <td>Identificacion</td>
    <td>Nombres</td>
    <td>Apellidos</td>
    <td>Fecha Nacimiento</td>
    <td>Sexo</td>
	
  </tr>
 <?php
while($registro=$pacientes->fetch_object())
{
?>
  <tr>
    <td align="center"><?php echo $registro->pacIdentificacion?></td>
    <td align="center"><?php echo $registro->pacNombres?></td>
    <td align="center"><?php echo $registro->pacApellidos?></td>
    <td align="center"><?php echo $registro->pacFechaNacimiento?></td>
    <td align="center"><?php echo $registro->pacSexo?></td>
	
  </tr> 
  
 <?php
}  //cerrando el ciclo while
?>
</table>
<p>
<?php

if ($_REQUEST['x']==1)
	echo "Se ha actualizado el Paciente correctamente";
if ($_REQUEST['x']==2)
	echo "Problemas al actualizar el Paciente";	
if ($_REQUEST['x']==3)
	echo "Se ha eliminado el Paciente correctamente";
if ($_REQUEST['x']==4)
	echo "Problemas al eliminar el Paciente";

?>
</body>
</html>