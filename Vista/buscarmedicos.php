
	<form id="form1" name="form1" method="GET" type="search" action="../vista/verMedico.php">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#08088A" class="texto">
          <td colspan="2" align="center">BUSCAR MEDICO</td>
        </tr>
        
        <tr>
          <td align="right" bgcolor="#F5ECCE">Nombres</td>
          <td><input name="nombres" type="text" id="nombres" size="40" required /></td>
        </tr>
       
        <tr>
        
        <tr bgcolor="#08088A" class="texto">
          <td colspan="2" align="center" bgcolor="#08088A"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table>
    </form>

    <?php
    
$mysqli = new mysqli("localhost","root","","centromedico");
$where="";

if (isset($_GET['enviar'])) {
  $busqueda = $_GET['busqueda'];
  if(isset($_GET['buesqueda']))

  {
    $where="WHERE medicos.medNombres LIKE "%" .$busqueda";
  }
  
}
    ?>