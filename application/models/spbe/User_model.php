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

	public function save($table, $data)
	{
		$this->db->insert($table, $data);
	}

	public function delete($id)
	{
		# code...
		$this->db->where('id_user', $id);
		$this->db->delete('user');

	}

	function auth_admin($username, $password) //cek nip dan password admin
	{
		$query = $this->db->query("SELECT * FROM dosen WHERE nip='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek nim dan password mahasiswa
	function auth_user($username, $password) //cek nip dan password userbiasa
	{
		$query = $this->db->query("SELECT * FROM mahasiswa WHERE nim='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}
}

/* End of file user_model.php */