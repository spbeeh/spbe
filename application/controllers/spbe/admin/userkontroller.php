<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userkontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	//Do your magic here
	}
	public function index()
	{
		$this->load->view('spbefix/_partialadmin/header');
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/listUser');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');	
	}
	

}

/* End of file userkontroller.php */
/* Location: ./application/controllers/spbe/admin/userkontroller.php */