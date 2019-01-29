<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
	public $table = 'user';
	public $id = 'user.id_user';

	public function __construct()
	{
		parent::__construct();
	}

	public function login($username, $password)
	{
		$query = $this->db->get_where('user', array('nip_pj' => $username, 'password' => $password));
		return $query->row_array();
	}

	public function check_account($username, $password)
	{
        //cari username lalu lakukan validasi
		$this->db->where('nip_pj', $username);
		$query = $this->db->get($this->table)->row();
		
        //jika bernilai 1 maka user tidak ditemukan
		if (!$query) {
			return redirect('login', 'refresh');
		}
		
        //jika bernilai 2 maka user tidak aktif
		if ($this->db->where('nip_pj', $username) == null) {
			return redirect('login', 'refresh');
		}
        //jika bernilai 3 maka password salah
		if (!hash_verified($this->input->post('password'), $query->password)) {
			return redirect('login', 'refresh');
		}

		return $query;
	}

	public function logout($id)
	{
		$this->db->where('user.id_user', $id);
		// $this->db->update('user');
	}

	public function reg()
	{
		$data = array(
			'nip_pj' => $this->input->post('nip_pj'),
			'namainstansipusat' => $this->input->post('namainstansipusat'),
			'nama_penanggungjawab' => $this->input->post('nama_penanggungjawab'),
			'jabatan_pj' => $this->input->post('jabatan_pj'),
			'nama_operator' => $this->input->post('nama_operator'),
			'nip_op' => $this->input->post('nip_op'),
			'jabatan_op' => $this->input->post('jabatan_op'),
			'role' => $this->input->post('role'),
			'password' => get_hash($this->input->post('password'))
		);
		return $this->db->insert('user', $data);
	}

}