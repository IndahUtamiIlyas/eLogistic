<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedbackModel extends CI_Model {

	public function getFeedback($table_name){
		$this->db->order_by("id", "desc");
		$get_cara = $this->db->get($table_name);
		return $get_cara->result_array();
	}

	public function addFeedback($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
}
