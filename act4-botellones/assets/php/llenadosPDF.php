<?php
    require("fpdf/fpdf.php");

    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Arial','B',16);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        $this->Cell(70,10,'Registro de Llenado',0,0,'C');
        // Salto de línea
        $this->Ln(20);

        $this->Cell(20,10, utf8_decode('ID'), 1,0,'C',0);
        $this->Cell(60,10, utf8_decode('Fecha y Hora'), 1,0,'C',0);
        $this->Cell(50,10, utf8_decode('No. Botellones'), 1,0,'C',0);
        $this->Cell(50,10, utf8_decode('Cédula del Cliente'), 1,1,'C',0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
    }

    include_once('conexion.php');

    $query = "SELECT * FROM botellones_llenados WHERE estado='SI'";
    $rs    = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec));

    // Creación del objeto de la clase heredada

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);

    while ($row=$rs->fetch_assoc()) {

        $pdf->Cell(20,10, utf8_decode($row['idllenados']), 1,0,'C',0);
        $pdf->Cell(60,10, utf8_decode($row['fechahora']), 1,0,'C',0);
        $pdf->Cell(50,10, utf8_decode($row['numbotellones']), 1,0,'C',0);
        $pdf->Cell(50,10, utf8_decode($row['clientes_cedula']), 1,1,'C',0);
    }

    $pdf->Output();



?>