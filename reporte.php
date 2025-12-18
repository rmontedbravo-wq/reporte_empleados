<?php
require('fpdf/fpdf.php');
include('conexion.php');

class PDF extends FPDF
{
    // Encabezado del reporte
    function Header()
    {
        // Logo (opcional, si tienes un logo.png en tu carpeta)
        // $this->Image('logo.png', 10, 8, 20);

        // Título
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Reporte de Empleados', 0, 1, 'C');
        $this->Ln(5);

        // Encabezados de la tabla
        $this->SetFont('Arial', 'B', 11);
        $this->SetFillColor(40, 167, 69); // Verde Bootstrap
        $this->SetTextColor(255, 255, 255);
        $this->Cell(20, 10, 'ID', 1, 0, 'C', true);
        $this->Cell(60, 10, 'Nombre', 1, 0, 'C', true);
        $this->Cell(25, 10, 'Edad', 1, 0, 'C', true);
        $this->Cell(40, 10, 'Salario (S/)', 1, 0, 'C', true);
        $this->Cell(35, 10, 'Fecha', 1, 1, 'C', true);
    }

    // Pie de página
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 9);
        $this->SetTextColor(128);
        $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 11);
$pdf->SetTextColor(0);

// Consulta de datos
$sql = "SELECT * FROM personal";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $pdf->Cell(20, 10, $fila['id'], 1, 0, 'C');
        $pdf->Cell(60, 10, utf8_decode($fila['nombre']), 1, 0, 'L');
        $pdf->Cell(25, 10, $fila['edad'], 1, 0, 'C');
        $pdf->Cell(40, 10, number_format($fila['salario'], 2), 1, 0, 'R');
        $pdf->Cell(35, 10, $fila['fecha'], 1, 1, 'C');
    }
} else {
    $pdf->Cell(0, 10, 'No hay empleados registrados', 1, 1, 'C');
}

// Salida del PDF
$pdf->Output('I', 'Reporte_Empleados.pdf');
?>
