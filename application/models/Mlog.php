<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mlog extends CI_Model {
	public function log_history($data, $operasi, $keterangan){
		$ayy = $this->encryption->decrypt(base64_decode($this->session->userdata(nama_sesi)));
		$dtl = explode("|", $ayy);
		$id = $dtl[0];
		$kode = kode_oto();
		$sql = "INSERT INTO log_history VALUES('$kode','$data','$operasi','$keterangan','$id',(SELECT NOW()))";
		$querySQL = $this->db->query($sql);	
	}
}