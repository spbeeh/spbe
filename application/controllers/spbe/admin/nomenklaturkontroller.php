<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nomenklaturkontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('spbefix/_partialadmin/header');
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/Nomenklatur');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');	
	}

	public function listnomenklatur()
	{
		$this->load->view('spbefix/_partialadmin/header');
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/listnomenklatur');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');	
	}

}

/* End of file nomenklaturkontroller.php */
/* Location: ./application/controllers/spbe/admin/nomenklaturkontroller.php */