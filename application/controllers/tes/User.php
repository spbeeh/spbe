<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->model('tes/user_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['user'] = $this->user_model->getAll();
		return $this->load->view('tes/listuser', $data);
	}

	public function form()
	{
		return $this->load->view('tes/form');
	}

	public function add()
	{
		# code...

		$user = $this->user_model;
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		if ($validation->run()) {
			# code...
			$user->save();

			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view('tes/form');
	}
}

/* End of file Controllername.php */