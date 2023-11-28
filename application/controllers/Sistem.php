<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sistem extends CI_Controller {

    public $dpt;
	function __construct() {
        parent::__construct();
        include APPPATH."libraries\SimpleXLSXGen.php";
        $dtlogin = $this->Mlogin->cek_login();
        if(is_array($dtlogin)){ 
         	foreach ($dtlogin as $dl){
         		$data["usrnm"] = $dl->username;
				$data["nm"] = $dl->Nama;
				$data["dpt"] = $dl->Departemen;
                $this->dpt= $dl->Departemen;
        	}
        	$this->load->view('basis', $data, true);
        }else{redirect(base_url('login/'));}
    }

	public function gantipassword(){
		$plama = $this->input->post("plama");
		$pbaru = $this->input->post("pbaru");
		$pelama = hash1arah($plama);
		$pebaru = hash1arah($pbaru);
		$dtlogin = $this->Mlogin->cek_login();
        if(count($dtlogin)){ 
         	foreach ($dtlogin as $dl){$usr = $dl->username; $pss = $dl->password;}
        	if($pelama == $pss){
        		$operasi = $this->Mlogin->update_password($pebaru, $usr);
        		if($operasi == "1"){
                    $this->Mlog->log_history("Akses","Logout","Logout Berhasil");
                    unset($_SESSION[nama_sesi]);
        			echo "1";
        		}
        		else{echo "0";}
        	}else{echo "0";}
        }else{echo "0";}
    }
    
    public function logout(){
        $this->Mlog->log_history("Akses","Logout","Logout Berhasil");
        unset($_SESSION[nama_sesi]);
        redirect(base_url("Login/"));
    }

	//---------------------------------------------BUKU-------------------------------
	public function index(){
        $data["dtlevel"] = $this->Mquery->levelJSON();
        $data["dtdepartemen"] = $this->Mquery->departemenJSON();
		$data["fill"] = "c456";
		$this->load->view('basis', $data);
	}

	public function karyawanJSON(){
        $dtJSON = '{"data": [xxx]}';
        $dtisi = "";
        $dt = $this->Mquery->karyawanJSON();
        foreach ($dt as $k){
            $id = $k->id;
            $nama = $k->Nama;
            $alamat = $k->Alamat;
            $ttl = $k->tgl_lahir;
            $tptlahir = $k->tempat_lahir;
            $pendidikan = $k->Pendidikan;
            $departemen = $k->nama_departemen;
            
            $tomboledit = "";

            if($this->dpt == "5"){
                $tomboledit = "<button type='button' class='btn btn-info btn-rounded waves-effect waves-light' style='margin-top: 5px;' data-id='".$id."' onclick='filter(this)'>Kelola</button>";
            }

            $dtisi .= '["'.$tomboledit.'","'.$nama.'","'.$tptlahir.'","'.tgl_indo_lengkap($ttl).'","'.$alamat.'","'.$pendidikan.'","'.$departemen.'"],';
        }
        $dtisifix = rtrim($dtisi, ",");
        $data = str_replace("xxx", $dtisifix, $dtJSON);
        echo $data;
    }

    public function tambahkaryawan(){
        $id = strtotime(date("Y-m-d H:i:s"));
        $nik = trim(str_replace("'", "''", $this->input->post("nk")));
        $nama = trim(str_replace("'", "''", $this->input->post("nm")));
        $tempat = trim(str_replace("'", "''", $this->input->post("tp")));
        $tanggal = trim(str_replace("'", "''", $this->input->post("tgl")));
        $pendidikan = trim(str_replace("'", "''", $this->input->post("pend")));
        $lv = trim(str_replace("'", "''", $this->input->post("lv")));
        $dep = trim(str_replace("'", "''", $this->input->post("dep")));
        $alamat = trim(str_replace("'", "''", $this->input->post("alm")));
        $status = trim(str_replace("'", "''", $this->input->post("stat")));
        $username = trim(str_replace("'", "''", $this->input->post("user")));
        $pass = hash1arah($username);
		$operasi = $this->Mquery->tambahkaryawan($id, $nik, $nama, $tempat, $tanggal, $pendidikan, $lv, $dep, $alamat, $status, $username, $pass);
		if($operasi == "1"){
			$ket = "id: $id,\nNik: $nik,\nNama: $nama,\nTempat: $tempat,\nTanggal: $tanggal,\nPendidikan: $pendidikan,\nLevel: $lv, \nDepartemen: $dep, \nAlamat: $alamat,\nStatus: $status, \nUsername: $username";
			$this->Mlog->log_history("Karyawan","Tambah",$ket);
		}
		echo $operasi;
	}

	public function filterkaryawan(){
        $id = trim($this->input->post("id"));
        $dt = $this->Mquery->filterkaryawan($id);
        $dtkirim = "";
        if(is_array($dt)){
            if(count($dt)>0){
                foreach($dt as $x){
                    echo "1|".$x->id."|".$x->NIK."|".$x->Nama."|".$x->tempat_lahir."|".$x->Alamat."|".$x->tgl_lahir."|".$x->Pendidikan."|".$x->Status."|".$x->Departemen."|".$x->Level_grade."|".$x->username;
                }
            }else{echo "0|Data Yang Anda Pilih tidak Tersedia !";}
        }else{echo "0|Data Yang Anda Pilih tidak Tersedia !";}
    }

    public function filterbuku2(){
        $kode = trim($this->input->post("kd"));
        $dt = $this->Mquery->filterbuku2($kode);
        $dtkirim = "";
        if(is_array($dt)){
            if(count($dt)>0){
                foreach($dt as $x){
                    echo "1|".$x->Judul."|".$x->Pengarang."|".$x->Penerbit."|".$x->ISBN."|".$x->Tahun_Terbit."|".$x->Rak;
                }
            }else{echo "0|Data Yang Anda Pilih tidak Tersedia !";}
        }else{echo "0|Data Yang Anda Pilih tidak Tersedia !";}
    }
    
    public function updatekaryawan(){
        $id = trim(str_replace("'", "''", $this->input->post("id")));
        $nik = trim(str_replace("'", "''", $this->input->post("nk")));
        $nama = trim(str_replace("'", "''", $this->input->post("nm")));
        $tempat = trim(str_replace("'", "''", $this->input->post("tp")));
        $tanggal = trim(str_replace("'", "''", $this->input->post("tgl")));
        $pendidikan = trim(str_replace("'", "''", $this->input->post("pend")));
        $lv = trim(str_replace("'", "''", $this->input->post("lv")));
        $dep = trim(str_replace("'", "''", $this->input->post("dep")));
        $alamat = trim(str_replace("'", "''", $this->input->post("alm")));
        $status = trim(str_replace("'", "''", $this->input->post("stat")));
        $username = trim(str_replace("'", "''", $this->input->post("user")));
		$operasi = $this->Mquery->updatekaryawan($id, $nik, $nama, $tempat, $tanggal, $pendidikan, $lv, $dep, $alamat, $status, $username);
		if($operasi == "1"){
			$ket = "id: $id,\nNik: $nik,\nNama: $nama,\nTempat: $tempat,\nTanggal: $tanggal,\nPendidikan: $pendidikan,\nLevel: $lv, \nDepartemen: $dep, \nAlamat: $alamat,\nStatus: $status, \nUsername: $username";
			$this->Mlog->log_history("Karyawan","Update",$ket);
		}
		echo $operasi;
	}

	public function hapuskaryawan(){
		$id = trim($this->input->post("id"));
        $dt = $this->Mquery->filterkaryawan($id);
        $operasi = $this->Mquery->hapuskaryawan($id);
        if($operasi == "1"){
            foreach ($dt as $k){
                $nik = $k->NIK;
                $nama = $k->Nama;
                $alamat = $k->Alamat;
                $ttl = $k->tgl_lahir;
                $tptlahir = $k->tempat_lahir;
                $pendidikan = $k->Pendidikan;
                $departemen = $k->Departemen;
                $username = $k->username;
                $level = $k->Level_grade;
                $status = $k->Status;
            }
            $ket = "id: $id,\nNik: $nik,\nNama: $nama,\nTempat: $tptlahir,\nTanggal: $ttl,\nPendidikan: $pendidikan,\nLevel: $level, \nDepartemen: $departemen, \nAlamat: $alamat,\nStatus: $status, \nUsername: $username";
			$this->Mlog->log_history("Karyawan","Hapus",$ket);
        }
        echo $operasi;
	}

}
