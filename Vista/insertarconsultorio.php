<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql="select idConsultorio,conNombre from consultorios";
$consultorios=$objConexion->query($sql);
?>

<form id="form1" name="form1" method="post" action="../controlador/validarAsignarConsultorio.php">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#08088A" class="texto">
          <td colspan="2" align="center">INSERTAR CONSULTORIO</td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#F5ECCE">Identificación</td>
          <td width="72%"><label for="identificacion"></label>
          <input name="identificacion" type="int" id="identificacion" size="40"  required /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5ECCE">Nombres</td>
          <td><input name="nombres" type="text" id="nombres" size="40" required /></td>
        </tr>
       <tr bgcolor="#08088A" class="texto">
          <td colspan="2" align="center" bgcolor="#08088A"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table>
    </form>
    
    <?php
if ($msj==1)
	echo '<p align="center" >Se ha Agregado el Consultorio Correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Agregar el Consultorio, favor Revisar';

?>