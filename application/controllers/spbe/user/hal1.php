<?php
defined('BASEPATH') or exit('No direct script access allowed');

class hal1 extends MY_Controller
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
		if ($id != $this->session->userdata('id_user')) {
			show_404();
		} else {
			$data['pertanyaanUtama'] = $this->pertanyaanumum_model->getPertanyaan();
			$data['controller'] = $this;

			$this->load->view('menu/_partial/header');
			$this->load->view('menu/_partial/navigasi2');
			$this->load->view('menu/contect/hal1', $data);
			$this->load->view('menu/_partial/js');
		//$this->load->view('menu/hal1');
		}
	}

	public function getByumum($id = null)
	{
		if ($id != $this->session->userdata('id_user')) {
			show_404();
		} else {
			$data['pertanyaanUtama'] = $this->pertanyaanumum_model->getPertanyaan();
			$data['controller'] = $this;
			$this->load->view('menu/_partial/header');
			$this->load->view('menu/_partial/navigasi2');
			$this->load->view('menu/contect/hal1', $data);
			$this->load->view('menu/_partial/js');
		}
	}
	
	//=====================
	//PERTANYAAN UMUM/EVALUASI UMUM
	//=====================
	public function getSubPertanyaan($id)
	{
		return $this->pertanyaanumum_model->getSubPertanyaan($id);
	}

	public function debug($id)
	{
		echo json_encode($this->pertanyaanumum_model->getSubPertanyaan($id));
	}
}