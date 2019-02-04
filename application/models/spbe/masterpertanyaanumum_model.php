<?php
defined('BASEPATH') or exit('No direct script access allowed');

class masterpertanyaanumum_model extends CI_Model
{
	
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function getById($id, $id2)
	{
		$this->db->select('jawab');
		$this->db->from('master_pertanyaan_umum');
		$this->db->where('id_user', $id);
		$this->db->where('id_pertanyaan_umum', $id2);
		return $this->db->get()->row();
	}
	
	public function getAll()
	{
		return $this->db->get('master_pertanyaan_umum')->result();
	}
	
	
	
	public function save($table, $data)
	{
		$this->db->insert($table, $data);
	}
	
	public function update()
	{
		
	}
	
	public function delete( $id)
	{
		return $this->db->delete("master_pertanyaan_umum", array("id_master_pertanyaan_umum" => $id));
	}
	
	// public function uploadFile($data)
	// {
	// 	echo "oe";
	// 	$a = uniqid();
	// 	$config['upload_path']          = './tmp/';
	// 	$config['file_name']            = $a;
		
	// 	$this->load->library('upload', $config);
		
		
	// 	if ($this->upload->do_upload()) {
	// 		//return $this->upload->data("file_name");
	// 		echo "qweq";
	// 	}
	// 	else{
	// 		echo $this->upload->display_errors(); 
	// 	}
		
	// 	return "null.docx";
	// }
	
}

/* End of file pertanyaan_model.php */