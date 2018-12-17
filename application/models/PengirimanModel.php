<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengirimanModel extends CI_Model {

	public function getPengiriman($table_name){
		$barang = $this->db->get($table_name);
		return $barang->result_array();
	}

	public function addPengiriman($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function ubahPengiriman($table_name,$data,$id){
		$this->db->where('id',$id);
		$ubah = $this->db->update($table_name,$data);
		return $ubah;
	}
}
