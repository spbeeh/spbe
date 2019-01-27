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

	public function getUser($id){

        $this->db->where('id_user', $id);
        $this->db->from('user');     
        $query = $this->db->get(); 
        
        if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

	public function delete($id)
	{
		# code...
		// $this->db->where('id_user', $id);
		// $this->db->delete('user');
		return $this->db->delete('user', array("id_user" => $id));
	}
}

/* End of file user_model.php */