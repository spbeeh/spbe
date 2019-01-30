<?php
defined('BASEPATH') or exit('No direct script access allowed');

class form extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('spbe/user_model');
		$this->load->model('spbe/pertanyaanumum_model');
		$this->load->model('spbe/pertanyaan_model');
		$this->load->library('form_validation');
		$this->check_login();
	}


	public function index()
	{
		$linkid = $this->session->userdata('id_user');
		$id = $linkid;
		$data['tampil'] = $this->pertanyaan_model->getById($id);
		$this->load->view('menu/_partial/header');
		$this->load->view('menu/_partial/navigasi2');
		$this->load->view('menu/contect/form');
		$this->load->view('menu/_partial/js');

		//$this->load->view('menu/form');
	}
}