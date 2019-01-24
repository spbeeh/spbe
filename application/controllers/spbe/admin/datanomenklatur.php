<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datanomenklatur extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->model('spbe/jenis_model');
		$this->load->model('spbe/pertanyaan_model');
		$this->load->library('form_validation');


	}
	public function index()
	{
		$data['jenis'] = $this->jenis_model->getAll();
		$data['aa'] = $this->pertanyaan_model->getAll();
		$this->load->view('spbefix/_partialadmin/header', $data);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/listnomenklatur');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');
	}

	public function store()
	{
		# code...
		$_POST['aplikasi_fungsional'] = $this->input->post('aplikasi_fungsional');
		$_POST['id_jenis'] = $this->input->post('id_jenis');

		$this->pertanyaan_model->save('aplikasi_fungsional', $_POST);

		redirect('sistem/admin/datanomenklatur', 'refresh');

	}

}

/* End of file datanomenklatur.php */
/* Location: ./application/controllers/spbe/admin/datanomenklatur.php */