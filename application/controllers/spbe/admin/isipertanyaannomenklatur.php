<?php
defined('BASEPATH') or exit('No direct script access allowed');

class isipertanyaannomenklatur extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('spbe/isipertanyaannomenklatur_model');
		$this->load->model('spbe/pertanyaan_model');
		if ($this->session->userdata('role') != "Admin") {
			redirect('login');
		}
	}

	public function index()
	{


	}

	public function store()
	{
		$data['id_nama_aplikasi'] 	= $this->input->post('id_nama_aplikasi');
		$data['id_user'] 			= $this->input->post('id_user');
		$data['jawab'] 				= $this->input->post('jawab');
		$data['nama_aplikasi'] 		= $this->input->post('nama_aplikasi');
		$data['unit_kerja'] 		= $this->input->post('unit_kerja');

		echo '<pre>';
		print_r($data);

		// $this->isipertanyaannomenklatur_model->save('master', $_POST);

		// redirect('menu/hal2/' . $this->session->userdata('id_user'));
	}

	public function edit($id = null)
	{
		$data['tampil'] = $this->pertanyaan_model->getById($id);
		$this->load->view('spbefix/_partialadmin/header', $data);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/pertanyaannomenklatur');
		$this->load->view('spbefix/_partialadmin/js');
		$this->load->view('spbefix/_partialadmin/footer');
	}

}

/* End of file isipertanyaannomenklatur.php */