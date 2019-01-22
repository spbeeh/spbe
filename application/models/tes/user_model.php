<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{
	private $_table = "user";

	public $id_user;
	public $namainstansipusat;
	public $nama_penanggungjawab;
	public $nip_pj;
	public $jabatan_pj;
	public $nama_operator;
	public $nip_op;
	public $jabatan_op;
	// public $password;

	public function __construct()
	{
		parent::__construct();
	//Do your magic here
	}

	public function rules()
	{
		# code...
		return [
			[
				'field' => 'namainstansipusat',
				'label' => 'Namainstansipusat',
				'rules' => 'required'
			],
			[
				'field' => 'nama_penanggungjawab',
				'label' => 'Nama_penanggungjawab',
				'rules' => 'required'
			],
			[
				'field' => 'nip_pj',
				'label' => 'NIP_PJ',
				'rules' => 'required'
			],
			[
				'field' => 'jabatan_pj',
				'label' => 'Jabatan_PJ',
				'rules' => 'required'
			],
			[
				'field' => 'nama_operator',
				'label' => 'Nama_operator',
				'rules' => 'required'
			],
			[
				'field' => 'nip_op',
				'label' => 'NIP_OP',
				'rules' => 'required'
			],
			[
				'field' => 'nama_operator',
				'label' => 'Nama_operator',
				'rules' => 'required'
			],
			[
				'field' => 'jabatan_op',
				'label' => 'Jabatan_OP',
				'rules' => 'required'
			],
			// [
			// 	'field' => 'password',
			// 	'label' => 'Password',
			// 	'rules' => 'required'
			// ],
		];
	}

	public function getAll()
	{
		# code...
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		# code...
		return $this->db->get_where($_table, ["id_user" => $id])->row();
	}

	public function save()
	{
		# code...
		$post = $this->input->post();
		$this->user = $post['user'];

		$this->db->insert($this->$_table, $this);
	}

	public function update()
	{
		# code...
		$post = $this->input->post();
		$this->id_user = $post['id'];
		$this->user = $post['user'];

		$this->db->update($this->_table, array('id_user' => $post['id']));
	}

	public function delete($id)
	{
		# code...
		return $this->db->delete($this->_table, array("id_user" => $id));

	}
}
/* End of file ModelName.php */