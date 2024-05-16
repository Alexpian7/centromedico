<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Medico.php";
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;

$objMedico=new Medico();
$medicos=$objMedico->consultarMedicos();
?>
<h1 align="center">LISTADO DE MEDICOS</h1>
<table width="70%" border="0" align="center">
  <style> a {
    text-decoration: none;
  }
  </style>
<a href="buscarmedicos.php" text-decoration:"none"><p>Buscar Medicos</p></a>
  <tr align="center" bgcolor="="white" class="texto">
    <td>Identificacion</td>
    <td>Nombres</td>
    <td>Apellidos</td>
    <td>Especialidad</td>
	<td>Telefono</td>
    <td>Correo</td>
	
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
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>