<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('spbe/user_model');
		$this->load->model('spbe/pertanyaanumum_model');
		$this->load->library('form_validation');
		$this->check_login();
	}


	public function index()
	{
		$id = $this->session->userdata('id_user');
		if ($id != $this->session->userdata('id_user')) {
			show_404();
		} else {
			$data['user'] = $this->user_model->getUser($id);
			$data['rpot'] = $this->user_model->getReport($id);
			$this->load->view('menu/_partial/header', $data);
			$this->load->view('menu/_partial/navigasi2');
			$this->load->view('menu/contect/laporan');
			$this->load->view('menu/_partial/js');
		//$this->load->view('menu/laporan');}
		}
	}

	public function getReport($id = null)
	{
		if ($id != $this->session->userdata('id_user')) {
			show_404();
		} else {
			$data['user'] = $this->user_model->getUser($id);
			$data['tampil'] = $this->user_model->getReport($id);
			$this->load->view('menu/_partial/header', $data);
			$this->load->view('menu/_partial/navigasi2');
			$this->load->view('menu/contect/laporan');
			$this->load->view('menu/_partial/js');
		}

	}
}