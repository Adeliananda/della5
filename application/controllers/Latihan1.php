<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller {
	public function index() {
		echo "Selamat Datang.. selamat belajar web programming";
	}

	public function penjumlahan($n1, $n2) {
		$this->load->model('Model_latihan1');
		
		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
		$data['judul'] = "Pertemuan 3";

		$this->load->view('view-latihan', $data);
	}
}
?>