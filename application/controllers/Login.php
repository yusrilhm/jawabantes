<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct() {
        parent::__construct();
        $dtlogin = $this->Mlogin->cek_login();
        if(is_array($dtlogin)){
        	redirect(base_url("Sistem/"));
        }
    }

	public function index(){$this->load->view('masuk');}

	public function login(){
		$u = $this->input->post("u");
		$p = hash1arah($this->input->post("p"));
		$stlogin = $this->Mlogin->login($u, $p);
		if(count($stlogin) > 0){
			foreach ($stlogin as $sl){
        		$usr = $sl->username;
        		$pas = $sl->password;
        	}
        	$token = base64_encode($this->encryption->encrypt($usr."|".$pas));
        	$this->session->set_userdata("pa3982l", $token);
            $this->Mlog->log_history("Akses","Login","Login Berhasil");
        	echo "1";
		}else{
			echo "0";
		}
	}

	// public function tes(){
	// 	echo hash1arah("admin");
	// }
}
