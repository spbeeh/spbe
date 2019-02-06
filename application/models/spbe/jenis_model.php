<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenis_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		return $this->db->get('jenis')->result();
	}


}

/* End of file jenis_model.php */