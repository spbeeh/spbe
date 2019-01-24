<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
	//Do your magic here
	}

	public function getAll()
	{
	# code...
		return $this->db->get('user')->result();
	}

	function save($table, $data)
	{
		$this->db->insert($table, $data);
	}

}

/* End of file user_model.php */