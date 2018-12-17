<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KebutuhanModel extends CI_Model {

	public function getKebutuhan($table_name){
		$get_cara = $this->db->get($table_name);
		return $get_cara->result_array();
	}

	public function addKebutuhan($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function ubahStatus($table_name,$data,$id){
		$this->db->where('id',$id);
		$ubah = $this->db->update($table_name,$data);
		return $ubah;
	}
}
