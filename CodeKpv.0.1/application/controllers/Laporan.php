<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {


	public function index()
	{
		$data = "SURAT";
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan";
		$this->pdf->load_view('isi/laporan', $data);
	}

	public function lapor()
	{
		$data = "SURAT";
		$this->load->view('isi/laporan', $data);
	}
}