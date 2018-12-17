<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpbd extends CI_Controller {

	public function index()
	{	
		$this->data['kebutuhan'] = $this->KebutuhanModel->getKebutuhan('kebutuhan');
		$this->data['lokasi'] = $this->LokasiModel->getLokasi('lokasi');
		$this->data['hasilnya'] = $this->ProsedurModel->getProsedur('prosedur');
		$this->load->view('Bpbd', $this->data);

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Home/index');
	}
	
	//untuk fungsi di menu update kebutuhan ==========================================================================
	public function editStatus($id){
		$status = $_POST['statusedit'];
		$data = array('status' => $status);
		$ubah = $this->KebutuhanModel->ubahStatus('kebutuhan',$data,$id);
		if ($ubah > 0) {
			redirect('Bpbd/index#kebutuhan');
		}
	}

	//untuk fungsi di menu lokasi ==========================================================================
	public function deleteLokasi($id){
		$hapus = $this->LokasiModel->hapusLokasi('lokasi',$id);
		if ($hapus > 0) {
			redirect('Bpbd/index#lokasi');
		}
	}


	//untuk fungsi di menu pengiriman barang ==========================================================================
	public function insertPengiriman(){
		$data_donatur = $_POST['donatur'];
		$data_barang = $_POST['barang'];
		$data_qty = $_POST['qty'];
		$data_lokasi = $_POST['kepada_lokasi'];
		$data_keterangan = $_POST['keterangan'];
		$data = array('donatur' => $data_donatur, 'barang' => $data_barang, 'qty'=> $data_qty, 'kepada_lokasi'=> $data_lokasi,'keterangan'=> $data_keterangan);
		$tambah = $this->PengirimanModel->addPengiriman('pengiriman',$data);
		if ($tambah > 0) {
			redirect('Bpbd/index#pengiriman');
		} 
	}


	//untuk fungsi di menu tata cara =================================================================================
	public function insertProsedur(){
		$prosedur = $_POST['prosedur'];
		$data = array('prosedur' => $prosedur);
		$tambah = $this->ProsedurModel->addProsedur('prosedur',$data);
		if ($tambah > 0) {
			redirect('Bpbd/index#prosedur');
		} 
	}

	public function editProsedur($id){
		$prosedur = $_POST['ubahprosedur'];
		$data = array('prosedur' => $prosedur);
		$ubah = $this->ProsedurModel->ubahProsedur('prosedur',$data,$id);
		if ($ubah > 0) {
			redirect('Bpbd/index#prosedur');
		}
	}

	public function deleteProsedur($id){
		$hapus = $this->ProsedurModel->hapusProsedur('prosedur',$id);
		if ($hapus > 0) {
			redirect('Bpbd/index#prosedur');
		}
	}

}
