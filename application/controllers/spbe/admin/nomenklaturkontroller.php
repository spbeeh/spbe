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
		$data['jenis'] = $this->pertanyaan_model->getAll();
		$this->load->view('spbefix/_partialadmin/header', $data);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/Nomenklatur');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');
	}

	public function getById($id = null)
	{
		$data['tampil'] = $this->pertanyaan_model->getById($id);
		// foreach ($data as $key) {
		// 	echo $key->aplikasi_fungsional;
		// }
		// $data['data'] = $this->pertanyaan_model->getAll();
		if ($this->pertanyaan_model->getById($id) == null) {
			show_404();
		} else {
			$this->load->view('spbefix/_partialadmin/header', $data);
			$this->load->view('spbefix/_partialadmin/navigasi');
			$this->load->view('spbefix/contentadmin/pertanyaannomenklatur');
			$this->load->view('spbefix/_partialadmin/footer');
			$this->load->view('spbefix/_partialadmin/js');
		}

	}

}

/* End of file nomenklaturkontroller.php */
/* Location: ./application/controllers/spbe/admin/nomenklaturkontroller.php */