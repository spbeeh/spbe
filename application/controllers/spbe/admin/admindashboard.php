<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admindashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}


	public function index()
	{
		$this->load->view('spbefix/_partialadmin/header');
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/dashboard');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');

	}

}

/* End of file Controllername.php */