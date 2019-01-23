<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenisnomenklatur_model extends CI_Model
{

	public function getAll()
	{
	# code...
		$this->db->get('jenis')->result();
	}

	public function save($table, $data)
	{
	# code...
		$this->db->insert($table, $data);
	}

}

/* End of file ModelName.php */