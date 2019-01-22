<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pertanyaanmodel extends CI_Model
{

    private $_table = 'APLIKASI_FUNGSIONAL';

    public $APLIKASI_FUNGSIONAL;
    public $ID_APLIKASI_FUNGSIONAL;

    public function __construct()
    {
        parent::__construct();
    //Do your magic here
    }

    public function rules()
    {
        return [
            [
                'field' => 'APLIKASI_FUNGSIONAL',
                'label' => 'APLIKASI_FUNGSIONAL',
                'rules' => 'required'
            ]
        ];
    }

    public function Ambildata()
    {
        return $this->db->get('APLIKASI_FUNGSIONAL');
    }

    public function store()
    {
        $post = $this->input->post();
        $this->APLIKASI_FUNGSIONAL = $post["APLIKASI_FUNGIONAL"];

        $this->db->insert($this->_table, $this);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["ID_APLIKASI_FUNGSIONAL" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->ID_APLIKASI_FUNGSIONAL = $post["ID_APLIKASI_FUNGSIONAL"];
        $this->APLIKASI_FUNGSIONAL = $post["APLIKASI_FUNGIONAL"];

        $this->db->update($this->_table, $this, array('ID_APLIKASI_FUNGSIOONAL' => $post['ID_APLIKASI_FUNGSIONAL']));

    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("ID_APLIKASI_FUNGSIONAL" => $id));

    }



}

/* End of file ModelName.php */
