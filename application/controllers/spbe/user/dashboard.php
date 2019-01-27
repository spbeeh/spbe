<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('spbe/user_model');
		$this->load->model('spbe/pertanyaanumum_model');
		$this->load->library('form_validation');
		$this->check_login();
	//Do your magic here
	}

	public function index()
	{
		$this->load->view('menu/_partial/header');
		$this->load->view('menu/_partial/navigasi');
		$this->load->view('menu/contect/dashboard');
		$this->load->view('menu/_partial/js');
	}
}