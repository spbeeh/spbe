<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kuisonerumum extends MY_Controller
{


	public function __construct()
	{-
		parent::__construct();
		//Do your magic here
		$this->load->model('spbe/pertanyaanumum_model');
		$this->load->model('spbe/masterpertanyaanumum_model');
		$this->load->helper(array('url', 'download'));


	}

	public function index()
	{
		$data['tampil'] = $this->pertanyaanumum_model->getAll();
		$this->load->view('spbefix/_partialadmin/header', $data);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/KuisonerUmum');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');
	}

	public function getById($id = null)
	{
		$data['pertanyaanUtama'] = $this->pertanyaanumum_model->getPertanyaan();
		$data['tampil'] = $this->pertanyaanumum_model->getAll();
		$data['controller'] = $this;
		$data['id'] = $id;
		$data['jawaban'] = $this->masterpertanyaanumum_model;
		$this->load->view('spbefix/_partialadmin/header', $data);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/KuisonerUmum');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');
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

/* End of file kuisonerumum.php */