<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterModel extends CI_Model {

	public function addUser($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function ubahStatus($table_name,$data,$id){
		$this->db->where('id',$id);
		$ubah = $this->db->update($table_name,$data);
		return $ubah;
	}
}
