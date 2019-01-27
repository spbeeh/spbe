<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nomenklaturkontroller extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->model('spbe/pertanyaan_model');
		$this->check_login();
		if ($this->session->userdata('role') != "Admin") {
			redirect('login', 'refresh');
		}
	}

	public function index()
	{
		$data['data'] = $this->pertanyaan_model->getAll();
		$this->load->view('spbefix/_partialadmin/header', $data);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/Nomenklatur');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');
	}

	public function listnomenklatur()
	{
	}

}

/* End of file nomenklaturkontroller.php */
/* Location: ./application/controllers/spbe/admin/nomenklaturkontroller.php */