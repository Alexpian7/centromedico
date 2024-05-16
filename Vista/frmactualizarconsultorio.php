<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql="select idConsultorio, conNombre from consultorios where idConsultorio = '$_REQUEST[idConsultorio]'";  
$resultadoConsultorio = $objConexion->query($sql);
$registro = $resultadoConsultorio->fetch_object();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Actualizar Consultorios</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="../Controlador/validaractualizarconsultorio.php">
  <table width="42%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#A9E2F3">ACTUALIZAR CONSULTORIO</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">Id Consultorio</td> 
      <td width="63%"><label for="idConsultorio"></label>
      
      <input name="idConsultorio" type="text" id="idConsultorio" value="<?php echo $registro->idConsultorio ?>" size="40" />
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Nombre</td>
      <td><label for="Nombres"></label>
      <input name="Nombres" type="text" id="Nombres" value="<?php echo $registro->conNombre?>" size="40" /></td>
    </tr>
   
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#A9E2F3"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
	</table>
   <input name="idConsultorio" type="hidden" value="<?php echo $_REQUEST['idConsultorio'] ?>" />
	
	  
</form>


</body>
</html>