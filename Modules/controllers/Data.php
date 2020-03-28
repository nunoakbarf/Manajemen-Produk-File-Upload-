<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller{

function __construct(){ 
        parent::__construct();  
		$this->load->model('m_data');
		$this->load->helper('url');
    }
    //Load Halaman Dashboard
	function index(){
		$data['tbl_produk'] = $this->m_data->tampil_data()->result();
		$this->load->view('account/tampildatav',$data);
	}
 
	function tambah(){
		$this->load->view('account/inputdatav');
	}
 
	function tambah_aksi(){
		$id_produk = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$kategori = $this->input->post('kategori');
 
		$data = array(
			'id_produk' => $id_produk,
			'nama_produk' => $nama_produk,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
			'kategori' => $kategori
			);
		$this->m_data->input_data($data,'tbl_produk');
		redirect('dashboard');
		}

		function edit($data, $id_produk){
			$this->db->where('id_produk',$id_produk);
			$this->db->update('tbl_produk',$data);
			return TRUE;
		}


		function hapus_data($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
			return TRUE;
		}
		
    }