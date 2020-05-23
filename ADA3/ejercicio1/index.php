<?php
//header('Content-Type: application/pdf; charset=utf-8');

setlocale(LC_TIME,"spanish");
require('mc_indent.php');

/*Variables*/
$fecha = strftime("%d/%B/%Y");
$nombre = $_GET['nombrea'];
$fecha_inicio=strftime("%d %B %Y", strtotime($_GET['fechaia']));
$puesto = $_GET['puestoa'];


$InterLigne = 7;
$pos = 10;
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetMargins(30,10,30); 
$pdf->SetFont('Times','B',32);

$pdf->SetXY(0, 10);
//with SetX I use numbers instead of lMargin, and I also use half of the size I added as margin for the page when I did SetMargins
    
$pdf->SetX(11.5);
$pdf->Cell(0,$pos,utf8_decode('Carta de recomendación'),0,0,'C');
$pdf->SetLineWidth(1);
$pdf->line(20, 20, 200, 20);

$pdf->SetX(11.5);
$pdf->SetFont('Times','',16);
$pos += 10;
$pdf->SetX(11.5);
$pos = $pos + 10;
$pdf->Cell(0,$pos,$fecha,0,0,'R');

$pdf->SetX(11.5);
$pos = $pos + 10;
$pdf->Cell(0,$pos,'',0,0,'C');

$pdf->SetX(18);
$pos = $pos + 10;
$pdf->Cell(0,$pos,'A quien corresponda:',0,0,'L');


$pdf->SetFont('Arial','',12);

$txt = "";
$txtLen = $pdf->GetStringWidth($txt);
$milieu = (210-$txtLen)/2;
$pdf->SetX($milieu);
$pdf->Write(5,$txt);

$pdf->ln(45);
$txt = utf8_decode("Me permito hacer de su conocimiento que el (la) $nombre laboró bajos mis ordenes desde $fecha_inicio y me consta su responsabilidad y competencia en el trabajo, desempeñando principalmente el puesto de $puesto.");
$pdf->MultiCell(0,$InterLigne,$txt,0,'J',0,15); 

$pdf->ln(10);
$txt = utf8_decode("Por lo anterior no tengo inconveniente ninguno en recomendarlo ampliamente agradeciendo de antemano la atención y las facilidades que pueda brindar.");
$pdf->MultiCell(0,$InterLigne,$txt,0,'J',0,15); 

$pdf->ln(10);
$txt = utf8_decode("Se extiende la presente para los efectos legales que al interesado convenga.");
$pdf->MultiCell(0,$InterLigne,$txt,0,'J',0,15); 


$pdf->Output();