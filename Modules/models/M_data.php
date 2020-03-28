<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('tbl_produk');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}