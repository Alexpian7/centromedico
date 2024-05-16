<?php
include ("../Modelo/conexionBasesDatos.php");
header("Content-type: application/vnd.ms-word");
	header("Content-Disposition: attachment; filename=ReporteCitas.doc");

$usuarios= "SELECT ci.idCita, p.pacNombres, p.pacApellidos, m.medNombres, m.medApellidos, m.medespecialidad, 
c.conNombre, ci.citFecha, ci.citHora, ci.citEstado, ci.citObservaciones 
from pacientes p, medicos m, consultorios c, citas ci
where (p.idPaciente = ci.citPaciente) and 
	  (m.idMedico = ci.citMedico) and 
	  (c.idConsultorio = ci.citConsultorio)";	
     


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

     <title>GENERAR REPORTES</title>
   </head>

   <body>
   
   <table width="100%" border="1" cellspacing="0" cellpadding="0">
   <tr>
      <td colspan="7" bgcolor="#CB897B"><CENTER><strong><h3>REPORTE DE LA TABLA citas</h3></strong></CENTER></td>
    </tr>
    <tr bgcolor="#DED6D5">
	<td align="center"><strong><h3>Fecha</h3></strong></td>
	<td align="center"><strong><h3>Hora</h3></strong></td>
	<td align="center"><strong><h3>Paciente</h3></strong></td>
	<td align="center"><strong><h3>Medico</h3></strong></td>
	<td align="center"><strong><h3>Consultorio</h3></strong></td>
	<td align="center"><strong><h3>Estado</h3></strong></td>
	<td align="center"><strong><h3>Observaciones</h3></strong></td>
     </tr>

     <?php

   $conexion=mysqli_connect("localhost","root","","centromedico"); 
   $resultado = mysqli_query($conexion, $usuarios);
   while($cita=mysqli_fetch_assoc($resultado))  { ?>

<tr>
    <td><?php echo $cita["citFecha"]?></td>
    <td><?php echo $cita["citHora"]?></td>
    <td><?php echo $cita["pacNombres"] ." ". $cita["pacApellidos"]?></td>
    <td><?php echo $cita["medNombres"] ." ". $cita["medApellidos"]?></td>
    <td><?php echo $cita["conNombre"]?></td>
    <td><?php echo $cita["citEstado"]?></td>
    <td><?php echo $cita["citObservaciones"]?></td>
  </tr>  

  <?php
    
   } mysqli_free_result($resultado);
    ?> 
   

 
</table
</body>
</html>