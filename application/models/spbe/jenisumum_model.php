<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenisumum_model extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
	//Do your magic here
	}

	public function getAll()
	{
	# code...
		return $this->db->get('jenis_pertanyaan_umum')->result();
	}
}

/* End of file jenisumum_model.php */