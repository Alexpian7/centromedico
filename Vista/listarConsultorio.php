
<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();

$sql="select * from consultorios ";
$consultorios = $objConexion->query($sql);
?>
<h1 align="center">LISTADO DE CONSULTORIOS</h1>
<table width="70%" border="0" align="center">
  <tr align="center" bgcolor="="#848484" class="texto">
    <td>Identificacion</td>
    <td>Nombres</td>
    
	
  </tr>
 <?php
while($registro=$consultorios->fetch_object())
{
?>
  <tr>
    <td align="center"><?php echo $registro->idConsultorio?></td>
    <td align="center"><?php echo $registro->conNombre?></td>
   
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>