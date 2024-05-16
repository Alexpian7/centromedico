
<?php

require "conexion.php";
require "fpdf/fpdf.php";

$sql = "SELECT idMedico, medIdentificacion, medNombres, medApellidos, medEspecialidad, medTelefono, medCorreo FROM medicos ORDER BY medNombres ASC";
$resultado = $mysqli->query($sql);
$pdf = new FPDF("p", "mm", "letter");
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(190, 5, "Reporte de Medicos", 0, 1, "C");

$pdf->Ln(2);

$pdf->SetFont("Arial", "B", 6);
$pdf->Cell(20, 5, "Identificacion", 1, 0 ,  "C");
$pdf->Cell(40, 5, "Nombres", 1, 0 ,  "C");
$pdf->Cell(20, 5, "Apellidos", 1, 0 , "C");
$pdf->Cell(40, 5, "Especialidad", 1, 0 , "C");
$pdf->Cell(20, 5, "Telefono", 1, 0 , "C");
$pdf->Cell(50, 5, "Correo", 1, 0 , "C");

$pdf->SetFont("Arial", "", 6);

$pdf->Ln(5);
while ($fila = $resultado->fetch_assoc()) {
    
$pdf->Cell(20, 5, $fila['medIdentificacion'], 1, 0 ,  "C");
$pdf->Cell(40, 5, $fila['medNombres'], 1, 0 ,  "C");
$pdf->Cell(20, 5, $fila['medApellidos'], 1, 0 , "C");
$pdf->Cell(40, 5, $fila['medEspecialidad'], 1, 0 , "C");
$pdf->Cell(20, 5, $fila['medTelefono'], 1, 0 , "C");
$pdf->Cell(50, 5, $fila['medCorreo'], 1, 0 , "C");
$pdf->Ln(5);
}

$pdf->Output();
?>