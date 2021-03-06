<?php
defined('BASEPATH') or exit('No direct script access allowed');

class datapertanyaanumum extends MY_Controller
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
		$data['jenisumum'] 		= $this->jenisumum_model->getAll();
		$data['pertanyaanUtama']= $this->pertanyaanumum_model->getPertanyaan();
		
		$this->load->view('spbefix/_partialadmin/header', $data);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/listkuisonerumum');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');
	}

	public function store()
	{
		$_POST['no_urut'] 					= $this->input->post('no_urut');
		$_POST['pertanyaan_umum'] 			= $this->input->post('pertanyaan_umum');
		$_POST['sub_pertanyaan'] 			= $this->input->post('sub_pertanyaan');
		$_POST['jenisinput'] 				= $this->input->post('jenisinput');
		$_POST['id_jenis_pertanyaan_umum'] 	= $this->input->post('id_jenis_pertanyaan_umum');

		$this->pertanyaanumum_model->save('pertanyaan_umum', $_POST);

		redirect('sistem/admin/datapertanyaanumum');

	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('sistem/admin/datapertanyaanumum');
		if ($this->pertanyaanumum_model->update()) {
			redirect(site_url('sistem/admin/datapertanyaanumum'));
		}
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();
		if ($this->pertanyaanumum_model->delete('pertanyaan_umum', $id)) {
			redirect(site_url('sistem/admin/datapertanyaanumum'));
		}
	}


}

/* End of file Controllername.php */