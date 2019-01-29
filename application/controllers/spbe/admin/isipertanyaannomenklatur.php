<?php
defined('BASEPATH') or exit('No direct script access allowed');

class isipertanyaannomenklatur extends CI_Controller
{

	public function index()
	{

		$this->load->model('spbe/isipertanyaannomenklatur');

	}

	public function store()
	{
		# code...
	}

	public function edit($id = null)
	{
		$data['jenis'] = $this->jenis_model->getAll();
		$data['aa'] = $this->pertanyaan_model->getAll();
		$this->load->view('spbefix/_partialadmin/header', $data);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/listnomenklatur');
		$this->load->view('spbefix/_partialadmin/js');
		$this->load->view('spbefix/_partialadmin/footer');
	}

}

/* End of file isipertanyaannomenklatur.php */