<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	//Do your magic here
	}

	public function index()
	{
		$this->load->view('menu/_partial/header');
		$this->load->view('menu/_partial/navigasi');
		$this->load->view('menu/contect/dashboard');
		$this->load->view('menu/_partial/js');
	}
}