<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratok extends CI_Model {

	public function index(){

	}

	public function tampil_surat()
	{
		$data = array();
		$this->db->select('*');
		$this->db->order_by('id_surat');
		$Q=$this->db->get('surat_surat');
		if($Q->num_rows()>0) {
			foreach($Q->result_array() as $row){
				$data[]=$row;
			}
		}
		$Q->free_result();
		return $data;
	}

}