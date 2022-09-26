
<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
	

	function Header()
	{

		$this->Image('fpdf/menu.png', 2, 2, 18);

		$this->SetFont('Arial', 'B', 8);
		$this->Cell(30);


		$this->Cell(150, 8, 'SISTEMA DE CONTROL ADMINISTRACION E INVENTARIO', 1, 1, 'C');
		$this->Ln(20);
		$this->Cell(195, 10, 'SERVIDORES Y REDES ', 1, 1, 'C');
		$this->Cell(195, 10, 'MATERIALES', 1, 1, 'C');
		$this->Cell(26, 10, 'ID', 1, 0, 'C', 0);
		$this->Cell(54, 10, 'NOMBRE', 1, 0, 'C', 0);
		$this->Cell(50, 10, 'UNIDAD', 1, 0, 'C', 0);
		$this->Cell(65, 10, 'CANTIDAD', 1, 1, 'C', 0);

		
	}


	function Footer()
	{

		$this->SetY(-30);

		$this->SetFont('Arial', 'B', 8);
		$this->Ln(5);
		$this->Cell(64, 8, 'Gerente del Area', 1, 0, 'C', 0);
		$this->Cell(64, 8, 'Adjunto', 1, 0, 'C', 0);
		$this->Cell(62, 8, 'Responsable', 1, 1, 'C', 0);
		$this->Cell(64, 10, '', 1, 0, 'C', 0);
		$this->Cell(64, 10, '', 1, 0, 'C', 0);
		$this->Cell(62, 10, '', 1, 0, 'C', 0);
		$this->Ln(15);
		$this->Cell(0, 0, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
	}
}




$id = $_GET['id'];
include('conexion.php');
$m= "SELECT * FROM materiales";
$result=mysqli_query($conexion,$m);
$mostrar=mysqli_fetch_array($result);










$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);


while ($mostrar = mysqli_fetch_array($result)) {

	$pdf->Cell(26, 10, $mostrar['id'], 1, 0, 'C', 0);
    $pdf->Cell(54, 10, $mostrar['nombre'], 1, 0, 'C', 0);
	$pdf->Cell(50, 10, $mostrar['unidad'], 1, 0, 'C', 0);
	$pdf->Cell(65, 10, $mostrar['cantidad'], 1, 1, 'C', 0);
	
	
}





			












$pdf->Output();

?>





