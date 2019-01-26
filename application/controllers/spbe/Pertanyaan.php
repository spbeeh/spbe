<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pertanyaan_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['pertanyaan'] = $this->pertanyaan_model->getAll();
		$this->load->view("spbe/index", $data);
	}
	public function index2()
	{
		$c['content'] = "nomenklatur.php";
		$this->load->view('spbe/master', $c);
	}

}