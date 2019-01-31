<?php
defined('BASEPATH') or exit('No direct script access allowed');

class isipertanyaannomenklatur_model extends CI_Model
{


	public function getAll()
	{

	}

	public function save($table, $data)
	{
		return $this->db->insert($table, $data);
	}


}

/* End of file isipertanyaannomenklatur_model.php */