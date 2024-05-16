<?php
include ("../Modelo/conexionBasesDatos.php");
$usuarios= "SELECT * FROM pacientes";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=ReportePacientes.xls");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
     <title>GENERAR REPORTES</title>
   </head>

   <body>
   <table width="100%" border="1" cellspacing="0" cellpadding="0">
   <tr>
      <td colspan="5" bgcolor="#CB897B"><CENTER><strong><h1>REPORTES DE PACIENTES</h1></strong></CENTER></td>
    </tr>
    <tr colspan="5" bgcolor="#DED6D5">
	<td align="center"><strong><h3>Identificacion</h3></strong></td>
	<td align="center"><strong><h3>Nombres</h3></strong></td>
	<td align="center"><strong><h3>Apellidos</h3></strong></td>
	<td align="center"><strong><h3>Fecha de Nacimiento</h3></strong></td>
	<td align="center"><strong><h3>Sexo</h3></strong></td>
     </tr>

    
   <?php

   $conexion=mysqli_connect("localhost","root","","centromedico"); 
   $resultado = mysqli_query($conexion, $usuarios);
   while($row=mysqli_fetch_assoc($resultado)) { ?>

   <tr>
      <td align="center"><?php echo $row["idPaciente"]; ?> </td>
      <td align="center"><?php echo $row["pacNombres"]; ?> </td>
      <td align="center"><?php echo $row["pacApellidos"]; ?> </td>
      <td align="center"><?php echo $row["pacFechaNacimiento"]; ?> </td>
	  <td align="center"><?php echo $row["pacSexo"]; ?> </td>

   </tr>
   
   <?php
    
   } mysqli_free_result($resultado);
    ?> 
</table
</body>
</html>
