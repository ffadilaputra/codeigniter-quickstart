<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
       $this->load->view('partials/header');
       $this->load->view('home');
       $this->load->view('partials/footer');
	}
	
	public function coba(){
		$pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'Ini PDF');
        $pdf->Output();
	}

}

