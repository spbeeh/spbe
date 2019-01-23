<?php defined('BASEPATH') OR exit('No direct script access allowed');

class jawaban_model extends CI_Model
{
    private $_table = "jawaban_pertanyaan_umum";

    public $id_jawaban;
    public $id_user;
    public $id_pertanyaan_umum;
    public $jawaban;

    public function rules()
    {
        return [
            ['field' => 'jawaban',
            'label' => 'jawaban',
            'rules' => 'required']
        ];
    }

    public function getJoinData($id)
    {
        $this->db->distinct();
        $this->db->select('a.NAMAINSTANSIPUSAT, a.NAMA_PENANGGUNGJAWAB, c.pertanyaan, b.jawaban');
        $this->db->from('jawaban_pertanyaan_umum b'); 
        $this->db->join('user a', 'a.ID_USER=b.id_user', 'left');
        $this->db->join('pertanyaan_umum c', 'b.id_pertanyaan_umum=c.id_pertanyaan_umum', 'left');
        $this->db->where('b.id_jawaban',$id);       
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
        //return $this->db->get($this->_table)->result();
        $this->db->distinct();
        $this->db->select('a.NAMAINSTANSIPUSAT, a.NAMA_PENANGGUNGJAWAB');
        $this->db->from('jawaban_pertanyaan_umum b'); 
        $this->db->join('user a', 'a.ID_USER=b.id_user', 'left');
        $this->db->join('pertanyaan_umum c', 'b.id_pertanyaan_umum=c.id_pertanyaan_umum', 'left');      
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
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_jawaban" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_user =$post["id_user"];
        $this->id_pertanyaan_umum = $post["pertanyaan_umum"];
        $this->jawaban = $post["jawaban"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jawaban = $post["id_jawaban"];
        $this->id_user =$post["id_user"];
        $this->id_pertanyaan_umum = $post["pertanyaan_umum"];
        $this->jawaban = $post["jawaban"];
        $this->db->update($this->_table, $this, array('id_jawaban' => $post['id_jawaban']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_jawaban" => $id));
    }

}