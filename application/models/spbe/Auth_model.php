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

	public function check_account($username)
	{
        //cari username lalu lakukan validasi
		$this->db->where('nip_pj', $username);
		$query = $this->db->get($this->table)->row();

        //jika bernilai 1 maka user tidak ditemukan
		if (!$query) {
			return 1;
		}
        //jika bernilai 2 maka user tidak aktif
		if ($query->active == 0) {
			return 2;
		}
        //jika bernilai 3 maka password salah
		if (!hash_verified($this->input->post('password'), $query->password)) {
			return 3;
		}

		return $query;
	}

	public function logout($date, $id)
	{
		$this->db->where('user.id_user', $id);
		$this->db->update('user', $date);
	}
}