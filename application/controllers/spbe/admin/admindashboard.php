<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admindashboard extends My_Controller    /// ini extend di ambil dari folder core karena bikin sendiri untuk cek login
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('spbe/user_model');
		$this->load->model('spbe/pertanyaanumum_model');
		$this->load->library('form_validation');
	// 	$this->check_login();
	// 	if ($this->session->userdata('role') != "1") {
	// 		redirect('sistem/admin/datauser', 'refresh');
	// 	}
	}


	public function index()
	{
		$jumlah['jumlah'] = $this->pertanyaanumum_model->getAll();
		$this->load->view('spbefix/_partialadmin/header', $jumlah);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/dashboard');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');

	}

}

/* End of file Controllername.php */