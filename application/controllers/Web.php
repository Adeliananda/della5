<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    public function index() {
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header');
        $this->load->view('v_index', $data);
        $this->load->view('v_footer');

    }

    public function about() {
		$data['judul'] = "Halaman About";
        $this->load->view('v_header');
        $this->load->view('v_about', $data);
        $this->load->view('v_footer');    	
    }
}
