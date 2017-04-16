<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Admin extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}

	function index()
	{
		$logged_in = $this->session->userdata('logged_in');

			if (!$logged_in)
			{
				redirect(site_url('welcome'));

			}
			else{
		$data['peserta'] = $this->mymodel->getData('pesertas');
		$this->template->load('admin/index','admin/peserta',$data);
		}
	}

	public function peserta()
	{
		$logged_in = $this->session->userdata('logged_in');

			if (!$logged_in)
			{
				redirect(site_url('welcome'));

			}
			else{
		$data['peserta'] = $this->mymodel->getData('pesertas');
		$this->template->load('admin/index','admin/peserta',$data);
		}
	}

	public function lunas()
	{
		$logged_in = $this->session->userdata('logged_in');

			if (!$logged_in)
			{
				redirect(site_url('welcome'));

			}
			else{
		$data['lunas'] = $this->mymodel->getData('lunas');
		$this->template->load('admin/index','admin/lunas',$data);
		}
	}

	public function confirm()
	{
		$logged_in = $this->session->userdata('logged_in');

			if (!$logged_in)
			{
				redirect(site_url('welcome'));

			}
			else{
		$data['konfirm'] = $this->mymodel->getData('konfirmasis');
		$this->template->load('admin/index','admin/konfirmasi',$data);
		}
	}

	public function hadir()
	{
		$logged_in = $this->session->userdata('logged_in');

			if (!$logged_in)
			{
				redirect(site_url('welcome'));

			}
			else{
		$data['hadir'] = $this->mymodel->getData('hadirs');
		$this->template->load('admin/index','admin/hadir',$data);
		}

	}

	public function getLunas($pin){
		$where = "where pin = '".$pin."'";
		$data = $this->mymodel->getDataWhere('pesertas',$where);
		$data = array(
			'pin'=> $data[0]['pin'],
			'name'=> $data[0]['name'],
			'email'=> $data[0]['email'],
			'telp'=> $data[0]['telp'],
			'instansi'=> $data[0]['instansi'],
			'jurusan'=> $data[0]['jurusan'],
			'alamat'=> $data[0]['alamat'],
			'kategori'=> $data[0]['kategori'],
			'created_at'=> date('Y-m-d H:i:s')
		);

		$this->mymodel->insert('lunas',$data);
		$where2=array('pin'=>$pin);
		$this->mymodel->delete('pesertas',$where2);

		redirect('admin/peserta','refresh');
	}

	public function deletePeserta($pin){
		$where=array('pin'=>$pin);
		$this->mymodel->delete('pesertas',$where);

		redirect('admin/peserta','refresh');
	}

	public function belumLunas($pin){
		$where = "where pin = '".$pin."'";
		$data = $this->mymodel->getDataWhere('lunas',$where);
		$data = array(
			'pin'=> $data[0]['pin'],
			'name'=> $data[0]['name'],
			'email'=> $data[0]['email'],
			'telp'=> $data[0]['telp'],
			'instansi'=> $data[0]['instansi'],
			'jurusan'=> $data[0]['jurusan'],
			'alamat'=> $data[0]['alamat'],
			'kategori'=> $data[0]['kategori'],
			'created_at'=> $data[0]['created_at']
		);

		$this->mymodel->insert('pesertas',$data);
		$where2=array('pin'=>$pin);
		$this->mymodel->delete('lunas',$where2);
		redirect('admin/lunas','refresh');
	}

	public function deleteKonfirmasi($pin){
		$where=array('pin'=>$pin);
		$this->mymodel->delete('konfirmasis',$where);

		redirect('admin/confirm','refresh');
	}

	public function absen($pin){
	$logged_in = $this->session->userdata('logged_in');

			if (!$logged_in)
			{
				redirect(site_url('welcome'));

			}
			else{
		$this->load->model('mymodel');
		$where = "where pin = '".$pin."'";
		$data = $this->mymodel->getDataWhere('konfirmasis',$where);
		$data = array(
			'pin'=> $data[0]['pin'],
			'name'=> $data[0]['name'],
			'email'=> $data[0]['email'],
			'kategori'=> $data[0]['kategori'],
			'created_at'=> date('Y-m-d H:i:s')
		);
		// $pin=$data['pin'];
		$data2 = $this->mymodel->getDataWhere('hadirs',$where);
		$count=count($data2);
		if($count>0){
			redirect('/');
		}
		else {
			$this->mymodel->insert('hadirs',$data);
			redirect('/');
		}
	}
}
	public function deleteAbsen($pin){
		$where=array('pin'=>$pin);
		$this->mymodel->delete('hadirs',$where);

		redirect('admin/hadir','refresh');
	}
}
