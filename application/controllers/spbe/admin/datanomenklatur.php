<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datanomenklatur extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->model('spbe/jenis_model');
		$this->load->model('spbe/pertanyaan_model');
		$this->load->library('form_validation');

		$this->check_login();
		if ($this->session->userdata('role') != "Admin") {
			redirect('login');
		}


	}
	public function index()
	{
		$data['jenis'] = $this->jenis_model->getAll();
		$data['aa'] = $this->pertanyaan_model->getAlllist();
		$this->load->view('spbefix/_partialadmin/header', $data);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/listnomenklatur');
		$this->load->view('spbefix/_partialadmin/js');
		$this->load->view('spbefix/_partialadmin/footer');

	}

	public function store()
	{
		# code...
		$_POST['aplikasi_fungsional'] = $this->input->post('aplikasi_fungsional');
		$_POST['id_jenis'] = $this->input->post('id_jenis');

		$this->pertanyaan_model->save('aplikasi_fungsional', $_POST);

		redirect('sistem/admin/datanomenklatur');
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('sistem/admin/datanomenklatur');
		if ($this->pertanyaan_model->update()) {
			redirect(site_url('sistem/admin/datanomenklatur'));
		}
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();
		if ($this->pertanyaan_model->delete('aplikasi_fungsional', $id)) {
			redirect(site_url('sistem/admin/datanomenklatur'));
		}
	}

}

/* End of file datanomenklatur.php */
/* Location: ./application/controllers/spbe/admin/datanomenklatur.php */