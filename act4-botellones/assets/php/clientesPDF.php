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
        $this->Cell(70,10,'Registro de Clientes',0,0,'C');
        // Salto de línea
        $this->Ln(20);

        $this->Cell(50,10, utf8_decode('Cédula'), 1,0,'C',0);
        $this->Cell(80,10, utf8_decode('Nombre y Apellido'), 1,0,'C',0);
        $this->Cell(50,10, utf8_decode('Zona del país'), 1,1,'C',0);
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

    $query = "SELECT * FROM botellones_clientes WHERE estado='SI'";
    $rs    = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec));

    // Creación del objeto de la clase heredada

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);

    while ($row=$rs->fetch_assoc()) {
        $pdf->Cell(50,10, utf8_decode($row['cedula']), 1,0,'C',0);
        $pdf->Cell(80,10, utf8_decode($row['nombre']), 1,0,'C',0);
        $pdf->Cell(50,10, utf8_decode($row['zonapais']), 1,1,'C',0);
    }

    $pdf->Output();



?>