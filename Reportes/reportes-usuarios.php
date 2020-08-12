<?php
require('fpdf/fpdf.php');
require('../connect.php');

class PDF extends FPDF
{
function Header()
{
    $this->Image('../image/logo2.png',8,8,25);

    $this->SetFont('Arial','B',15);
    $this->Cell(40);
    $this->Cell(120,10,'Reporte Registros de Usuarios',1,0,'C');
    $this->Ln(20);

    $this->Cell(20, 10,'id', 1, 0, 'C', 0);
    $this->Cell(40, 10,'Correo', 1, 0, 'C', 0);
    $this->Cell(40, 10,'Usuario', 1, 1, 'C', 0);
}
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,utf8_decode ('Pagína '.$this->PageNo().'/{nb}'),0,0,'C');
}
}


$consulta = "SELECT * FROM login WHERE rol_id != 1 ";
$resultado =  $conexion->query ($consulta);

$fpdf =new PDF();
$fpdf->AliasNbPages();
$fpdf->Addpage();
$fpdf->SetFont('Arial','', 12);

while($row = $resultado->fetch_assoc()){
$fpdf->Cell(20, 10, $row['id'], 1, 0, 'C', 0);
$fpdf->Cell(40, 10, $row['correo'], 1, 0, 'C', 0);
$fpdf->Cell(40, 10, $row['usuario'],1, 1, 'C');
}

$fpdf->Output();