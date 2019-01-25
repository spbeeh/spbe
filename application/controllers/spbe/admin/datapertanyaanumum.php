<?php
defined('BASEPATH') or exit('No direct script access allowed');

class datapertanyaanumum extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->model('spbe/jenisumum_model');
		$this->load->model('spbe/pertanyaanumum_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['pertanyaanumum'] = $this->pertanyaanumum_model->getAll();
		$data['jenisumum'] = $this->jenisumum_model->getAll();;
		$this->load->view('spbefix/_partialadmin/header', $data);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/listkuisonerumum');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');
	}

	public function store()
	{
		$_POST['pertanyaan_umum'] = $this->input->post('pertanyaan_umum');
		$_POST['id_jenis_pertanyaan_umum'] = $this->input->post('id_jenis_pertanyaan_umum');

		$this->pertanyaanumum_model->save('pertanyaan_umum', $_POST);

		redirect('sistem/admin/datapertanyaanumum', 'refresh');

	}

}

/* End of file Controllername.php */