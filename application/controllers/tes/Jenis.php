<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model("tes/Jenis_Model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $model = Jenis_Model;
        $data["jenis"] = $this->Jenis_Model->getAll();
        $this->load->view('tes/list', $data);
    }

    public function new_form()
    {

        $this->load->view('tes/new_form');

    }

    public function add()
    {
        $jenis = $this->Jenis_Model;
        $validation = $this->form_validation;
        $validation->set_rules($jenis->rules());

        if ($validation->run()) {
            # code...
            $jenis->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("tes/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) {
            # code...
            redirect('tes/list', 'refresh');

        }

        $jenis = $this->Jenis_Model;
        $validation = $this->form_validation;
        $validation->set_rules($jenis->rules());

        if ($validation->run()) {
            # code...
            $jenis->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jenis"] = $jenis->getById($id);
        if (!$data["jenis"]) {
            # code...
            show_404();
        }

        $this->load->view("tes/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) {
            # code...
            show_404();
        }

        if ($this->Jenis_Model->delete($id)) {
            # code...

            redirect('tes/list', 'refresh');

        }
    }

}

/* End of file Controllername.php */