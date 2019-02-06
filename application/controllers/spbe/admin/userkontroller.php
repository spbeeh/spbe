<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userkontroller extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('spbe/user_model');
		$this->load->model('spbe/pertanyaanumum_model');
		$this->load->model('spbe/masterpertanyaanumum_model');
		$this->load->library('form_validation');
<<<<<<< HEAD

=======
		$this->load->helper("file");
		
		$this->check_login();
		if ($this->session->userdata('role') != "Admin") {
			redirect('login');
		}
		
>>>>>>> 3e379c9a2b35a363d89f6d072cddce2822a06f0d
	}
	public function index()
	{
		$data['user'] = $this->user_model->getAll();
		$this->load->view('spbefix/_partialadmin/header', $data);
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/listUser');
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');
	}
	
	public function report($id = null)
	{
		$data['user'] = $this->user_model->getUser($id);
		$data['tampil'] = $this->user_model->getReport($id);
		$data['pertanyaan_umum'] = $this->pertanyaanumum_model->getById($id);
		$this->load->view('spbefix/_partialadmin/header');
		$this->load->view('spbefix/_partialadmin/navigasi');
		$this->load->view('spbefix/contentadmin/priview', $data);
		$this->load->view('spbefix/_partialadmin/footer');
		$this->load->view('spbefix/_partialadmin/js');
	}
	
	
	public function destroy($id = null)
	{
		if (!isset($id)) {
			show_404();
		}
		$product = $this->masterpertanyaanumum_model->getAnswer($id);
		//var_dump($product);
		foreach($product as $data){
			if ($data->jawab != null) {
				//echo $data->jawab;
				$path ="tmp/".$data->jawab;
				//return array_map('unlink', glob(FCPATH."tmp/$filename.*"));
				unlink($path); 
			}
		}
		
		$this->user_model->delete($id);
		redirect('sistem/admin/datauser');
		
	}
}

/* End of file userkontroller.php */
/* Location: ./application/controllers/spbe/admin/userkontroller.php */