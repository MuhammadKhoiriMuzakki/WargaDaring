<?php
require_once("../../assets/lib/fpdf/fpdf.php");
require_once("../../config/koneksi.php");

class PDF extends FPDF
{
    // Page header
    function Header()
    {
      // Logo
      $this->Image('../../assets/img/pc3.PNG',20,10);

    	// Arial bold 15
    	$this->SetFont('Times','B',15);
    	// Move to the right
    	// $this->Cell(60);
    	// Title
        $this->Cell(308,8,'PEMERINTAH JAKARTA TIMUR',0,1,'C');
        $this->Cell(308,8,'KECAMATAN UHAMKA',0,1,'C');
    	$this->Cell(308,8,'KELURAHAN UHAMKA',0,1,'C');
    	// Line break
    	$this->Ln(5);

        $this->SetFont('Times','BU',12);
        for ($i=0; $i < 10; $i++) {
            $this->Cell(308,0,'',1,1,'C');
        }

        $this->Ln(1);

        $this->Cell(308,8,'LAPORAN DATA WARGA MENINGGAL',0,1,'C');
        $this->Ln(2);

        $this->SetFont('Times','B',9.5);

        // header tabel
        $this->cell(10,7,'NO.',1,0,'C');
        $this->cell(30,7,'NIK',1,0,'C');
        $this->cell(50,7,'NAMA',1,0,'C');
        $this->cell(50,7,'TANGGAL KEMATIAN',1,0,'C');
        $this->cell(30,7,'SEBAB',1,0,'C');
        $this->cell(40,7,'TEMPAT KEMATIAN',1,0,'C');
        $this->cell(45,7,'HUBUNGAN PELAPOR',1,1,'C');

    }

    // Page footer
    function Footer()
    {
    	// Position at 1.5 cm from bottom
    	$this->SetY(-15);
    	// Arial italic 8
    	$this->SetFont('Arial','I',8);
    	// Page number
    	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// ambil dari database
$query = "SELECT * FROM tbl_meninggal LEFT JOIN warga ON tbl_meninggal.id_meninggal = warga.id_warga";
$hasil = mysqli_query($db, $query);
$data_tbl_meninggal = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $data_tbl_meninggal[] = $row;
}

$pdf = new PDF('L', 'mm', [210, 330]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times','',9);

// set penomoran
$nomor = 1;

foreach ($data_tbl_meninggal as $tbl_meninggal) {


    $pdf->cell(10, 7, $nomor++ . '.', 1, 0, 'C');
    $pdf->cell(30, 7, strtoupper($tbl_meninggal['id_meninggal']), 1, 0, 'C');
    $pdf->cell(50, 7, strtoupper($tbl_meninggal['nama_warga']), 1, 0, 'C');
    $pdf->cell(50, 7, strtoupper($tbl_meninggal['tgl_meninggal']), 1, 0, 'C');
    $pdf->cell(30, 7, strtoupper($tbl_meninggal['sebab']), 1, 0, 'C');
    $pdf->cell(40, 7, strtoupper($tbl_meninggal['tempat_kematian']), 1, 0, 'C');
    $pdf->cell(45, 7, strtoupper($tbl_meninggal['hubungan_pelapor']), 1, 1, 'C');

}

	$pdf->Ln(10);

$pdf->Output();
?>
