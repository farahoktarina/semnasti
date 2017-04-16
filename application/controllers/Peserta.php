<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->library('form_validation');
	}

	public function store(){

		$this->load->model('mymodel');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('telp','telp','required');
		$this->form_validation->set_rules('kategori','kategori','required');
		if($this->form_validation->run() != false){
			$kat = $this->input->post('kategori');
			if($kat == 'mhs' )
				{
					$kategori= 'mahasiswa';
				}
			else
			{
				$kategori= 'umum';
			}
			$data = array(
				'pin'=> $this->input->post('pin'),
				'name'=> $this->input->post('name'),
				'email'=> $this->input->post('email'),
				'telp'=> $this->input->post('telp'),
				'instansi'=> $this->input->post('instansi'),
				'jurusan'=> $this->input->post('jurusan'),
				'alamat'=> $this->input->post('alamat'),
				'kategori'=> $kategori,
				'created_at'=> date('Y-m-d H:i:s')
			);

			$this->mymodel->insert('pesertas',$data);

			redirect(base_url(),'refresh');
		}
		else{
			redirect('/#register');
		}
	}

}
