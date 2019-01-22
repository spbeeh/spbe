<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_Model extends CI_Model
{

    private $_table = "jenis";

    public $jenis;
    public $id_jenis;

    public function rules()
    {
        return [[
            'field' => 'jenis',
            'label' => 'Jenis',
            'rules' => 'required'
        ]];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_jenis" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->jenis = $post["jenis"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jenis = $post['id'];
        $this->jenis = $post["jenis"];
        $this->db->update($this->_table, $this, array("id_jenis" => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_jenis" => $id));
    }
}

/* End of file ModelName.php */
