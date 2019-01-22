<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pertanyaan_Model extends CI_Model
{

	private $_table = "aplikasi_fungsional";

	public $id_aplikasi;
	public $id_jenis;
	public $aplikasi_fungsional;

	public function __construct()
	{
		parent::__construct();

	}

	public function rules()
	{
		return [
			[
				'field' => 'aplikasi_fungsional',
				'label' => 'aplikasi_fungsional',
				'rules' => 'required'
			],
			[
				'field' => 'id_jenis',
				'label' => 'Id_jenis',
				'rules' => 'required'
			],
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["aplikasi_fungsional" => $id])->row();
	}

	public function save()
	{
		$post['aplikasi_fungsional'] = $this->input->post('aplikasi_fungsional');
		$post['id_jenis'] = $this->input->post('id_jenis');
		// print_r($post);
		//$this->aplikasi_fungsional = $post['aplikasi_fungsional'];
		//$this->db->insert($this->_table, $this);
	}

	public function update($id)
	{
		$post = $this->input->post();
		$this->id_aplikasi = $post['id'];
		$this->aplikasi_fungsional = $post['aplikasi_fungsional'];

		$this->db->update($this->_table, array('id_aplikasi' => $post['id']));
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array('id_aplikasi' => $id));

	}

}

/* End of file Pertanyaan_Model.php */
/* Location: ./application/models/Pertanyaan_Model.php */