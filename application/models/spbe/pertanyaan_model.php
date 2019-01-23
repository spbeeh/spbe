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
		return $this->db->get('aplikasi_fungsional')->result();
	}

	public function save($table, $data)
	{
		# code...
		$this->db->insert($table, $data);
	}

}

/* End of file pertanyaan_model.php */