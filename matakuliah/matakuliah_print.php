<?php
require('../fpdf/fpdf.php');
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->SetLeftMargin(20);
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'LAPORAN SEMUA DATA MATA KULIAH', 0, 10, 'C');
$pdf->Cell(10, 7, '', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(40, 6, 'No.', 1, 0, 'C');
$pdf->Cell(40, 6, 'kode', 1, 0, 'C');
$pdf->Cell(80, 6, 'Nama Mata Kuliah', 1, 0, 'C');
$pdf->Cell(50, 6, 'Jumlah sks', 1, 0, 'C');
$pdf->Cell(50, 6, 'semester', 1, 1, 'C');
$pdf->SetFont('Arial', '', 10);
include '../connection.php';
$no = 1;
$result = mysqli_query($con, "SELECT * FROM matakuliah");
while ($data = mysqli_fetch_array($result)) {
    $pdf->Cell(40, 6, $no++, 1, 0);
    $pdf->Cell(40, 6, $data['kode'], 1, 0, 'C');
    $pdf->Cell(80, 6, $data['nama'], 1, 0, 'C');
    $pdf->Cell(50, 6, $data['sks'], 1, 0, 'C');
    $pdf->Cell(50, 6, $data['semester'], 1, 0, 'C');
}
$pdf->Output();
