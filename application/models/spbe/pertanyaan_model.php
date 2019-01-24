<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pertanyaan_model extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
	//Do your magic here
	}

	public function getAll()
	{
	# code...
		// $this->db->select('aplikasi_fungsional.aplikasi_fungsional, jenis.jenis');
		// $this->db->from('aplikasi_fungsional');
		// $this->db->join('jenis', 'aplikasi_fungsional.id_jenis = jenis.id_jenis', 'left');
		// $query = $this->db->get();
		// return $query;
		return $this->db->get(' aplikasi_fungsional')->result();
	}

	public function save($table, $data)
	{
		# code...
		$this->db->insert($table, $data);
	}

}

/* End of file pertanyaan_model.php */