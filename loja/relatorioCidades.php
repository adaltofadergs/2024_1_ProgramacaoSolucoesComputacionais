<?php
session_start();

if( !isset($_SESSION["logado"]) || $_SESSION["logado"] == false ){
    header("Location: index.php");
}else{

	include_once("dao/clsConexao.php");
	include_once("dao/clsCidadeDAO.php");
	include_once("model/clsCidade.php");

	require_once("fpdf/fpdf.php");

	define ('FPDF_FONTPATH','fpdf/font/');

	$pdf = new FPDF("P", "mm", "A4");
	$pdf->SetFont("arial","", 10 );
	$pdf->SetTextColor(0,0,0);
	$pdf->SetY("-1");
	$pdf->Cell(0,0,'',0,1,'L'); 

	$cidades = CidadeDAO::getCidades();

	if( count($cidades) == 0){

		$pdf->SetX(40);
		$pdf->SetY(100);
		$pdf->MultiCell(130, 10, utf8_decode("Nenhuma Cidade Cadastrada!"), 2, "C",);

	}else{

		$pdf->SetFont('courier','B',16);

		$pdf->SetY("30");
            	$pdf->SetX("30");
            	$pdf->Cell(30,10,utf8_decode('Código'), 1, 1, "C");

            	$pdf->SetY("30");
            	$pdf->SetX("60");
            	$pdf->Cell(120,10,'Nome da Cidade',1,1,'L'); 

		$pdf->SetFont('courier','I',12);	
		$pdf->SetTextColor(255,0,0);
		$y = 40;

		foreach($cidades as $cid){
			$pdf->SetY($y);
			$pdf->SetX("30");
			$pdf->Cell(30,10, $cid->id, 1, 1, "C");

			$pdf->SetY($y);
			$pdf->SetX("60");
			$pdf->Cell(120,10,utf8_decode($cid->nome),1,1,'L'); 

			$y += 10;
		}
	}
	$pdf->Output("relatorioCidade.pdf", "I");
}
?>