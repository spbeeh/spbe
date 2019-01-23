<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class spbe extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$c['content'] = "nomenklatur.php"; 
		$this->load->view('spbe/master', $c);
	}

	public function dashboard()
	{
		$c['content'] = "dashboard.php"; 
		$this->load->view('spbe/master', $c);
	}

	public function dashboard2()
	{
		$c['content'] = "test.php";
		$this->load->view('spbe/master', $c);
	}

	public function kuisUmum()
	{
		$c['content'] = "kuisionerUmum.php";
		$this->load->view('spbe/master', $c);
	}

	public function dataUser()
	{
		$c['content'] = "dataUser.php"; 
		$this->load->view('spbe/master', $c);
	}

}
	//test only heheh
	/* End of file spbe.php */
	/* Location: ./application/controllers/spbe.php */