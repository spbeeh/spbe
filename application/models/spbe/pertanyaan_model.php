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
		// $this->db->select('*');
		// $this->db->from('aplikasi_fungsional');
		// $this->db->join('jenis', 'aplikasi_fungsional.id_jenis = jenis.id_jenis', 'left');
		// $query $this->db->get();
		// return $query;
		return $this->db->get('aplikasi_fungsional')->result();
	}

	public function save($table, $data)
	{
		$this->db->insert($table, $data);
	}

	public function update()
    {
        $post = $this->input->post();
        $this->id_aplikasi_fungsional = $post["id_aplikasi_fungsional"];
        $this->aplikasi_fungsional = $post["aplikasi_fungsional"];
        $this->id_jenis = $post["id_jenis"];
        return $this->db->update('aplikasi_fungsional', $this, array('id_aplikasi_fungsional' => $post['id_aplikasi_fungsional']));
    }

	public function delete($table, $id){
		return $this->db->delete($table, array("id_aplikasi_fungsional" => $id));
	}

}

/* End of file pertanyaan_model.php */