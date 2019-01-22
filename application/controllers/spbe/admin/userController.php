<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{

    private $_table = "USER";
    

        public function __construct()
    {
        parent::__construct();
    //Do your magic here
    }


    public function index()
    {

        this->load->view('View File', $data);

    }

}

/* End of file Controllername.php */
