<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public $user_id;
    public $aplikasi;
    public $ada;
    public $nama;
    public $unit;

    public function rules()
    {
        return [
            ['field' => 'aplikasi',
            'label' => 'aplikasi',
            'rules' => 'required'],

            ['field' => 'ada',
            'label' => 'Ada/Tidak Ada',
            'rules' => 'required'],
            
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'unit',
            'label' => 'Unit',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->user_id = uniqid();
        $this->aplikasi = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}