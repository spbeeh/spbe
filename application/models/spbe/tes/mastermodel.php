<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mastermodel extends CI_Model
{

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	function Ambildata()
	{
		$this->db->select('*');
		$this->db->from('MASTER');
		$this->db->join('APLIKASI_FUNGSIONAL', 'APLIKASI_FUNGSIONAL.ID_APLIKASI_FUNGSIONAL = MASTER.ID_MASTER', 'left');
		$query = $this->db->get();
		return $query;
	}

	function master($ID_NAMA_APLIKASI, $ID_USER, $JAWAB, $NAMA_APLIKASI, $UNIT_KERJA)
	{
		$this->ID_NAMA_APLIKASI = $ID_NAMA_APLIKASI;
		$this->ID_USER = $ID_USER;
		$this->JAWAB = $JAWAB;
		$this->NAMA_APLIKASI = $NAMA_APLIKASI;
		$this->UNIT_KERJA = $UNIT_KERJA;

	}

}

/* End of file mastermodel.php */
/* Location: ./application/models/mastermodel.php */