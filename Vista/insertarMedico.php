  
	<form id="form1" name="form1" method="post" action="../controlador/validarInsertarMedico.php">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#08088A" class="texto">
          <td colspan="2" align="center">INSERTAR MEDICO</td>
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
        <tr>
          <td height="25" align="right" bgcolor="#F5ECCE">Apellidos</td>
          <td><input name="apellidos" type="text" id="apellidos" size="40" required/></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5ECCE">Fecha Ingreso</td>
          <td><input name="fechaIngreso" type="date" id="fechaIngreso" style="width:270px" required/></td>
        </tr>
		        <tr>
          <td align="right" bgcolor="#F5ECCE">Especialidad</td>
          <td><input name="especialidad" type="text" id="especialidad" size="40" required /></td>
        </tr>
        <tr>
		        <tr>
          <td align="right" bgcolor="#F5ECCE">Telefono</td>
          <td><input name="telefono" type="text" id="telefono" size="40" required /></td>
        </tr>
        <tr>
		        <tr>
          <td align="right" bgcolor="#F5ECCE">Correo</td>
          <td><input name="correo" type="email" id="correo" size="40" required /></td>
        </tr>
        <tr>
        
        <tr bgcolor="#08088A" class="texto">
          <td colspan="2" align="center" bgcolor="#08088A"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table>
    </form>
    
    <?php
if ($msj==1)
	echo '<p align="center" >Se ha Agregado el Medico Correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Agregar el Medico, favor Revisar';

?>