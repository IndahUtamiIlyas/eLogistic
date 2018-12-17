<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function index()
	{
		$this->data['pengiriman'] = $this->PengirimanModel->getPengiriman('pengiriman');
		$this->load->view('Petugas',$this->data);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Home/index');
	}

	//untuk fungsi di menu tambahkan kebutuhan ====================================================================

	public function insertKebutuhan(){
		$data_lokasi = $_POST['lokasi'];
		$data_kebutuhan = $_POST['kebutuhan'];
		$data_qty = $_POST['qty'];
		$data_keterangan = $_POST['keterangan'];
		$data = array('lokasi' => $data_lokasi, 'kebutuhan' => $data_kebutuhan, 'qty'=> $data_qty, 'keterangan'=> $data_keterangan);
		$tambah = $this->KebutuhanModel->addKebutuhan('kebutuhan',$data);
		if ($tambah > 0) {
			redirect('Petugas/index#kebutuhan');
		} 
	}

	//untuk fungsi di menu tambahkan lokasi ====================================================================
	public function insertLokasi(){
		$data_jenis = $_POST['jenis'];
		$data_alamat = $_POST['alamat'];
		$data_kabupaten = $_POST['kabupaten'];
		$data_provinsi = $_POST['provinsi'];
		$data_keterangan = $_POST['keterangan'];
		$data = array('jenis' => $data_jenis, 'alamat' => $data_alamat, 'kabupaten'=> $data_kabupaten, 'provinsi'=> $data_provinsi, 'keterangan'=> $data_keterangan);
		$tambah = $this->LokasiModel->addLokasi('lokasi',$data);
		if ($tambah > 0) {
			redirect('Petugas/index#lokasi');
		} 
	}

	//untuk fungsi di menu tambahkan pengiriman ====================================================================
	public function editPengiriman($id){
		$status = $_POST['statusedit'];
		$data = array('status' => $status);
		$ubah = $this->PengirimanModel->ubahPengiriman('pengiriman',$data,$id);
		if ($ubah > 0) {
			redirect('Petugas/index#konfirmasi');
		}
	}
}
