<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class spbe extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('spbe/master');
	}

}
	
	/* End of file spbe.php */
	/* Location: ./application/controllers/spbe.php */