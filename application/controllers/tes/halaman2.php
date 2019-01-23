<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class halaman2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('spbe/asd/halamantes2');
	}

}

/* End of file halaman2.php */
/* Location: ./application/controllers/halaman2.php */