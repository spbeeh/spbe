<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admindashboard extends MY_Controller    /// ini extend di ambil dari folder core karena bikin sendiri untuk cek login
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('spbe/user_model');
		$this->load->model('spbe/pertanyaanumum_model');
		$this->load->library('form_validation');


	}


	public function index()
	{

		$this->load->view('spbefix/_partialadmin/header');
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/dashboard');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');

	}

}

/* End of file Controllername.php */