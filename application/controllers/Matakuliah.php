<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
	public function index() {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak() {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' => 'Harus Di Isi',
            'min_length' => 'Kode Terlalu Pendek'
        ]);

        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required' => 'Harus Di Isi',
            'min_length' => 'Kode Terlalu Pendek'
        ]);
        
        if ($this->form_validation->run() == FALSE) { 
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')                
            ];
    
            $this->load->view('view-data-matakuliah', $data);            
        }
    }
}