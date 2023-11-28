<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mquery extends CI_Model {
	//------------------------------------------------WILAYAH------------------------------------
	public function karyawanJSON(){
		$sql = "SELECT a.*, b.nama_level, c.nama_departemen FROM karyawan AS a LEFT JOIN level_grade AS b ON a.Level_grade = b.id LEFT JOIN departemen AS c ON a.Departemen = c.id ORDER BY a.Nama";
		$querySQL = $this->db->query($sql);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}

	public function levelJSON(){
		$sql = "SELECT * FROM level_grade ORDER BY id";
		$querySQL = $this->db->query($sql);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}

	public function departemenJSON(){
		$sql = "SELECT * FROM departemen ORDER BY id";
		$querySQL = $this->db->query($sql);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}

	public function tambahkaryawan($id, $nik, $nama, $tempat, $tanggal, $pendidikan, $lv, $dep, $alamat, $status, $username, $pass){
		$sql = "INSERT INTO karyawan VALUES('$id','$nik','$nama','$tempat','$alamat','$tanggal','$pendidikan','$status','$dep','$lv','$username','$pass');";
		$querySQL = $this->db->query($sql);
		if($querySQL){return "1";}
		else{return "0";}	
	}

	public function filterkaryawan($id){
		$sql = "SELECT * FROM karyawan WHERE id = '$id'";
		$querySQL = $this->db->query($sql);
		if($querySQL){
			return $querySQL->result();
		}else{return 0;}
	}

	public function updatekaryawan($id, $nik, $nama, $tempat, $tanggal, $pendidikan, $lv, $dep, $alamat, $status, $username){
		$sql = "UPDATE karyawan SET NIK='$nik', Nama='$nama', tempat_lahir='$tempat', Alamat='$alamat', tgl_lahir='$tanggal', Pendidikan='$pendidikan', Status='$status',Departemen='$dep',Level_grade='$lv',username='$username' WHERE id ='$id'";
		$querySQL = $this->db->query($sql);
		if($querySQL){return "1";}
		else{return "0";}	
	}

	public function hapuskaryawan($id){
		$sql = "DELETE FROM karyawan WHERE id='$id'";
		$querySQL = $this->db->query($sql);
		if($querySQL){return "1";}
		else{return "0";}	
	}
	
}