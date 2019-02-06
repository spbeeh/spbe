<?php
defined('BASEPATH') or exit('No direct script access allowed');

class hal1 extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('spbe/user_model');
		$this->load->model('spbe/pertanyaanumum_model');
		$this->load->model('spbe/masterpertanyaanumum_model');
		$this->load->library('form_validation');
		$this->check_login();
	}

	public function index()
	{
		if ($id != $this->session->userdata('id_user')) {
			show_404();
		} else {
			$data['pertanyaanUtama'] = $this->pertanyaanumum_model->getPertanyaan();
			$data['controller'] = $this;

			$this->load->view('menu/_partial/header');
			$this->load->view('menu/_partial/navigasi2');
			$this->load->view('menu/contect/hal1', $data);
			$this->load->view('menu/_partial/js');
		//$this->load->view('menu/hal1');
		}
	}

	public function getByumum($id = null)
	{
		if ($id != $this->session->userdata('id_user')) {
			show_404();
		} else {
			$data['pertanyaanUtama'] = $this->pertanyaanumum_model->getPertanyaan();
			$data['controller'] = $this;
			$this->load->view('menu/_partial/header');
			$this->load->view('menu/_partial/navigasi2');
			$this->load->view('menu/contect/hal1', $data);
			$this->load->view('menu/_partial/js');
		}
	}
	
	//=====================
	//PERTANYAAN UMUM/EVALUASI UMUM
	//=====================
	public function getSubPertanyaan($id)
	{
		return $this->pertanyaanumum_model->getSubPertanyaan($id);
	}

	public function debug($id)
	{
		echo json_encode($this->pertanyaanumum_model->getSubPertanyaan($id));
	}

	public function store(){
		$this->load->helper('form');
		$n = count($this->input->post('id'));
		$user	= $this->input->post('user');
		$id 	= $this->input->post('id');
		$jawab 	= $this->input->post('jawab');
		$jenis = $this->input->post('jenis');
		$a = uniqid()."-";
		 
		 for($i =0; $i< $n;$i++){
		 	if($jenis[$i] == 'File'){
		 		$data['id_user'] 			= $user;
				$data['id_pertanyaan_umum']	= $id[$i];
				$filename;
				$countfiles = count($_FILES['jawab']['name']);
			    
			    for($i=0;$i<$countfiles;$i++){
			        if(!empty($_FILES['jawab']['name'][$i])){
			        	$name = $a.$_FILES['jawab']['name'][$i];
				        $_FILES['file']['name'] = $a.$_FILES['jawab']['name'][$i];
			        	$_FILES['file']['type'] = $_FILES['jawab']['type'][$i];
			          	$_FILES['file']['tmp_name'] = $_FILES['jawab']['tmp_name'][$i];
				        $_FILES['file']['error'] = $_FILES['jawab']['error'][$i];
				        $_FILES['file']['size'] = $_FILES['jawab']['size'][$i];

			          	$config['upload_path'] = 'tmp/';
			          	$config['allowed_types'] = '*';
						$config['max_size'] = 1024 * 8;
			          	$config['file_name'] = $a.$_FILES['jawab']['name'][$i];
			 
			          	$this->load->library('upload',$config); 
			          	$this->upload->initialize($config);
			 
			          	if($this->upload->do_upload('file')){
			            	$uploadData = $this->upload->data();
			            	$filename = $uploadData['file_name'];
			          	}
			        }
			    }
				$data['jawab'] = $filename;
				
				$this->masterpertanyaanumum_model->save('master_pertanyaan_umum',$data);
		 	}else{
		 		$data['id_user'] 			= $user;
				$data['id_pertanyaan_umum']	= $id[$i];
				$data['jawab'] 				= $jawab[$i];
				
				$this->masterpertanyaanumum_model->save('master_pertanyaan_umum',$data);
		 	}
			
		 }
		redirect('menu/form');
	}
}