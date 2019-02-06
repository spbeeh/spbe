<?php
defined('BASEPATH') or exit('No direct script access allowed');

class hal2 extends MY_Controller
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

		$data['jenis'] = $this->pertanyaan_model->getAll();
		$this->load->view('menu/_partial/header', $data);
		$this->load->view('menu/_partial/navigasi2');
		$this->load->view('menu/contect/hal2');
		$this->load->view('menu/_partial/js');
		//$this->load->view('menu/hal2');
	}

	public function getById($id = null)
	{

		$idku['id'] = $id;
		$data['jenis'] = $this->pertanyaan_model->getById($id);
		$this->load->view('menu/_partial/header', $data, $idku);
		$this->load->view('menu/_partial/navigasi2');
		$this->load->view('menu/contect/hal2');
		$this->load->view('menu/_partial/js');

	}

	public function getByIdnomen($id = null)
	{

		$jawab['jawab'] = $this->db->get('master')->result();

		$data['tampil'] = $this->pertanyaan_model->getByIdnomen($id);
		$this->load->view('menu/_partial/header', $data + $jawab);
		$this->load->view('menu/_partial/navigasi2');
		$this->load->view('menu/contect/pertanyaan');
		$this->load->view('menu/_partial/js');
	}
}