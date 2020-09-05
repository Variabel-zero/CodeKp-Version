<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data['judul'] 		= 'Beranda';
		$data['sidebar'] 	= 'sidebar/sidebar1';
		$data['topbar'] 	= 'header/topbar';
		$data['footer'] 	= 'footer/footer1';
		$data['isi'] 		= 'isi/beranda';
		$this->load->view('layout/home1', $data);
	}

	public function suratSurat()
	{
		$data['judul'] 		= 'Surat - Surat';
		$data['sidebar'] 	= 'sidebar/sidebar1';
		$data['topbar'] 	= 'header/topbar';
		$data['footer'] 	= 'footer/footer1';
		$data['isi'] 		= 'isi/suratsurat';
		$this->load->view('layout/home1', $data);
	}
	public function adminProfil()
	{
		$data['judul'] 		= 'Profile Admin';
		$data['sidebar'] 	= 'sidebar/sidebar1';
		$data['topbar'] 	= 'header/topbar';
		$data['footer'] 	= 'footer/footer1';
		$data['isi'] 		= 'isi/profilAdmin';
		$this->load->view('layout/home1', $data);
	}
	public function fpdf()
	{
		$this->load->view('isi/fpdf');
	}
}


