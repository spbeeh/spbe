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
	}

	public function index()
	{

	}

	public function store()
	{

		$id = $this->input->post('id_nama_aplikasi');
		$user = $this->input->post('id_user');
		$jawb = $this->input->post('jawab');
		$nama_aplikasi = $this->input->post('nama_aplikasi');
		$unit = $this->input->post('unit_kerja');

		for ($j = 0; $j < count($jawb); $j++) {
			$data['id_nama_aplikasi'] = $id[$j];
			$data['id_user'] = $user[$j];
			$data['jawab'] = $jawb[$j];
			$data['nama_aplikasi'] = $nama_aplikasi[$j];
			$data['unit_kerja']=$unit[$j];

			$this->isipertanyaannomenklatur_model->save('master',$data);
		}
		
		redirect('menu/hal2/');
		

	}

	public function edit($id = null)
	{
		$data[' tampil '] = $this->pertanyaan_model->getById($id);
		$this->load->view(' spbefix / _partialadmin / header ', $data);
		$this->load->view(' spbefix / _partialadmin / navigasi ');
		$this->load->view(' spbefix / contentadmin / pertanyaannomenklatur ');
		$this->load->view(' spbefix / _partialadmin / js ');
		$this->load->view(' spbefix / _partialadmin / footer');
	}

}

/* End of file isipertanyaannomenklatur.php */