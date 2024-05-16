<?php
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$conexion = mysql_connect("localhost","root","");
mysql_select_db("centromedico", $conexion);
$quePac = "SELECT idPaciente,pacIdentificacion,pacNombres,pacApellidos,pacFechaNacimiento,pacSexo FROM pacientes ORDER BY idPaciente ASC";
$resPac = mysql_query($quePac, $conexion) or die(mysql_error());
$totPac = mysql_num_rows($resPac);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resMed)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'idpaciente'=>'<b>idPaciente</b>',
				'nombres'=>'<b>Nombres</b>',
				'apellidos'=>'<b>Apellidos</b>',
				'fechanacimiento'=>'<b>FechaNacimiento</b>',
				'sexo'=>'<b>Sexo</b>'
				
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>BLOG.UNIJIMPE.NET</b>\n";
$txttit.= "Ejemplo de PDF con PHP y MYSQL \n";

$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>