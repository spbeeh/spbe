<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pertanyaanumum_model extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
	//Do your magic here
	}

	public function getAll()
	{
		return $this->db->get('pertanyaan_umum')->result();

	}

	public function save($table, $data)
	{
		$this->db->insert($table, $data);

	}
}

/* End of file pertanyaanumum.php */