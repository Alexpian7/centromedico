<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;
$objConexion=Conectarse();

$sql="select * from consultorios ";
$consultorios = $objConexion->query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Consultorios:)</title>
</head>

<body>
<h1 align="center">LISTADO DE CONSULTORIOS</h1>
<table width="70%" border="0" align="center">
<a href="../Vista/index2.php?pag=contenido"><p>INICIO</p></a>
  <tr align="center" bgcolor="="#848484" class="texto">
    <td>Identificacion</td>
    <td>Nombres</td>
	<td>Editar</td>
	<td>Eliminar</td>
  </tr>
 <?php
while($registro=$consultorios->fetch_object())
{
?>
  <tr>
    <td align="center"><?php echo $registro->idConsultorio?></td>
    <td align="center"><?php echo $registro->conNombre?></td>
   
  <td align="center"><a href="frmactualizarconsultorio.php?idConsultorio=<?php echo $registro->idConsultorio?>"><img src="../Imagenes/editar.jpg"
   width="29" height="24" /></a></td>        
   <td align="center"><a href="eliminarconsultorio.php?idConsultorio=<?php echo $registro->idConsultorio?>"><img src="../Imagenes/eliminar.png"
    width="29" height="24" /></a></td>
  	</tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>
<p>
<?php

if ($_REQUEST['x']==1)
	echo "Se ha actualizado el Consultorio correctamente";
if ($_REQUEST['x']==2)
	echo "Problemas al actualizar el Consultorio";	
if ($_REQUEST['x']==3)
	echo "Se ha eliminado el Consultorio correctamente";
if ($_REQUEST['x']==4)
	echo "Problemas al eliminar el Consultorio";

?>
</body>
</html>