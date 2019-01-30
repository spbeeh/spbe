<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userkontroller extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	//Do your magic here
		$this->load->model('spbe/user_model');
		$this->load->model('spbe/pertanyaanumum_model');
		$this->load->library('form_validation');

		$this->check_login();
		if ($this->session->userdata('role') != "Admin") {
			redirect('login');
		}

	}
	public function index()
	{
		$data['user'] = $this->user_model->getAll();
		$this->load->view('spbefix/_partialadmin/header', $data);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/listUser');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');
	}

	public function report($id = null)
	{
		$data['user'] = $this->user_model->getUser($id);
		$data['tampil'] = $this->user_model->getReport($id);
		$data['pertanyaan_umum'] = $this->pertanyaanumum_model->getById($id);
		$this->load->view('spbefix/_partialadmin/header');
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/priview', $data);
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');
	}


	public function destroy($id = null)
	{
		if (!isset($id)) {
			show_404();
		}
		$this->user_model->delete($id);
		redirect('sistem/admin/datauser');

	}
}

/* End of file userkontroller.php */
/* Location: ./application/controllers/spbe/admin/userkontroller.php */