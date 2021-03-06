<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		
		$this->data['kebutuhan'] = $this->KebutuhanModel->getKebutuhan('kebutuhan');
		$this->data['lokasi'] = $this->LokasiModel->getLokasi('lokasi');
		$this->data['hasilnya'] = $this->ProsedurModel->getProsedur('prosedur');
		$this->load->view('Home', $this->data);
	}

	function login()
	{
		$this->load->view('login/Login');
	}

	function feedback(){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$pesan = $_POST['pesan'];
		$data = array('nama' => $nama, 'email' => $email, 'pesan'=> $pesan);
		$tambah = $this->FeedbackModel->addFeedback('feedback',$data);
		if ($tambah > 0) {
			redirect('Home/index#kontak');
		}
	}

}
