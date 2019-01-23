<?php defined('BASEPATH') OR exit('No direct script access allowed');

class pertanyaan_model extends CI_Model
{
    private $_table = "pertanyaan_umum";

    public $id_pertanyaan_umum;
    public $pertanyaan;

    public function rules()
    {
        return [
            ['field' => 'pertanyaan',
            'label' => 'pertanyaan',
            'rules' => 'required']
        ];
    }

    public function listJawaban(){

        $this->db->distinct();
        $this->db->select('nomor');
        $this->db->from('pertanyaan_umum');     
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

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pertanyaan_umum" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->pertanyaan = $post["pertanyaan"];
        $this->nomor = $post["nomor"];
        $this->khusus = $post["khusus"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pertanyaan_umum = $post["id"];
        $this->pertanyaan = $post["pertanyaan"];
        $this->nomor = $post["nomor"];
        $this->khusus = $post["khusus"];
        $this->db->update($this->_table, $this, array('id_pertanyaan_umum' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pertanyaan_umum" => $id));
    }
}