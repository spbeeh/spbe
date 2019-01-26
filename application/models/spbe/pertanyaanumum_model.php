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

	public function update()
	{
		$post = $this->input->post();
		$this->id_pertanyaan_umum = $post["id_pertanyaan_umum"];
		$this->id_jenis_pertanyaan_umum = $post["id_jenis_pertanyaan_umum"];
		$this->pertanyaan_umum = $post["pertanyaan_umum"];
		return $this->db->update('pertanyaan_umum', $this, array('id_pertanyaan_umum' => $post['id_pertanyaan_umum']));
	}

	public function delete($table, $id)
	{
		return $this->db->delete($table, array("id_pertanyaan_umum" => $id));
	}
}

/* End of file pertanyaanumum.php */