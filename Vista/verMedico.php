
<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Medico.php";
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;
$registro = $_GET['nombres'];
$query="SELECT idMedicos,medIdentificacion,medNombres,medApellidos,medEspecialidad,medTelefono,medCorreo from medicos where medIdentificacion='identificacion'";
$objMedico=new Medico();
$medicos=$objMedico->consultarMedicos();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Medicos:)</title>
</head>

<body>
<h1 align="center">LISTADO DE MEDICOS</h1>
<table width="70%" border="0" align="center">
<a href="../Vista/index2.php"><p>INICIO</p></a>
  <tr align="center" bgcolor="="#848484" class="texto">
    <td>Identificacion</td>
    <td>Nombres</td>
    <td>Apellidos</td>
    <td>Especialidad</td>
	<td>Telefono</td>
    <td>Correo</td>
	<td>Editar</td>
	<td>Eliminar</td>
	
  </tr>
 <?php
while($registro=$medicos->fetch_object())
{
?>
  <tr>
    <td align="center"><?php echo $registro->medIdentificacion?></td>
    <td align="center"><?php echo $registro->medNombres?></td>
    <td align="center"><?php echo $registro->medApellidos?></td>
    <td align="center"><?php echo $registro->medEspecialidad?></td>
    <td align="center"><?php echo $registro->medTelefono?></td>
	 <td align="center"><?php echo $registro->medCorreo?></td>
   
  <td align="center"><a href="frmactualizarmedico.php?idMedico=<?php echo $registro->idMedico?>"><img src="../Imagenes/editar.jpg"
   width="29" height="24" /></a></td>        
   <td align="center"><a href="eliminarmedico.php?idMedico=<?php echo $registro->idMedico?>"><img src="../Imagenes/eliminar.png"
    width="29" height="24" /></a></td>
	 
  	</tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>

</body>
</html>