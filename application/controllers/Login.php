<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('login/Login');
	}

	function register(){
		$this->load->view('login/Register');
	}

	function forgot_password(){
		$this->load->view('login/ForgotPass');
	}


	//untuk mengecek login
	function ceklogin(){
		if (isset($_POST['login'])) {
			$user = $this->input->post('username',true);
			$pass = $this->input->post('password',true);
			$modelLogin = $this->LoginModel->prosesLogin($user,$pass);
			$hasil = count($modelLogin);
			if ($hasil > 0) {
				$this->session->set_userdata(array('username'=>$user)) ;
				$cekUser = $this->db->get_where('user', array('username' => $user, 'password' => $pass ))->row();
				if ($cekUser->level == 'Bpbd') {
					redirect('Bpbd/index');
				}elseif ($cekUser->level == 'Petugas') {
					redirect('Petugas/index');
				}
				
			}else {
				redirect('Login/index');
				}
			}
		}
	}
