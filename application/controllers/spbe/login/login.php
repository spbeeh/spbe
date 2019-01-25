<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login/login');
	}

	// function index()
	// {
	// 	$this->load->view('v_login');
	// }



}

/* End of file login.php */
/* Location: ./application/controllers/login.php */