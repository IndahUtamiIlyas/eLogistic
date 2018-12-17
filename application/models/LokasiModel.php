<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LokasiModel extends CI_Model {

	public function getLokasi($table_name){
		$get_lokasi = $this->db->get($table_name);
		return $get_lokasi->result_array();
	}

	public function addLokasi($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function ubahLokasi($table_name,$data,$id){
		$this->db->where('id',$id);
		$ubah = $this->db->update($table_name,$data);
		return $ubah;
	}

	public function hapusLokasi($table_name,$id){
		$this->db->where('id',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}
}
