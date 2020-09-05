<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IsiFormSurat extends CI_Controller {


	public function index()
	{
		$data['isi'] 		= 'isi/inputData';
		$this->load->view('layout/home2',$data);
	}
}