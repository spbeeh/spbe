<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class tescontroller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('spbe/tes/mastermodel');
    }

    public function index()
    {
        $data['MASTER'] = $this->mastermodel->Ambildata()->result();

        $this->load->view('spbe/asd/halamantes', $data);
    }
}
