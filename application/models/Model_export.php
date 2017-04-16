<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_export extends CI_model {

	function select_peserta()
		{
			$this->db->select('*');
			$this->db->from('pesertas');
		
			return $this->db->get();
		}

		function select_lunas()
		{
			$this->db->select('*');
			$this->db->from('lunas');
		
			return $this->db->get();
		}

		function select_konfirmasi()
		{
			$this->db->select('*');
			$this->db->from('konfirmasis');
		
			return $this->db->get();
		}

		function select_hadir()
		{
			$this->db->select('*');
			$this->db->from('hadirs');
		
			return $this->db->get();
		}

}