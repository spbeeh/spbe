<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class pertanyaan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('tes/pertanyaan_model');
		$this->load->model('tes/jenis_model');

		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['aplikasi_fungsional'] = $this->pertanyaan_model->getAll();
		return $this->load->view('tes/listpertanyaan', $data);
	}

	public function Form()
	{
		$data['jenis'] = $this->jenis_model->getAll();
		$this->load->view('tes/newForm', $data);
	}

	public function add()
	{
		// $data['aplikasi_fungsional'] = $this->input->post('aplikasi_fungsional');
		// $data['id_jenis'] = $this->input->post('id_jenis');
		// print_r($data);

		$p_model = $this->pertanyaan_model;
		$validation = $this->form_validation;
		$validation->set_rules($p_model->rules());

		if ($validation->run()) {
			# code...
			$p_model->save();
			$this->session->set_flashdata('success', 'Berhasil ditambah');
		}

		$data['jenis'] = $this->jenis_model->getAll();
		$this->load->view('tes/newForm', $data);
	}

	public function edit($id = null)
	{
		if (!isset($id)) {
			# code...
			redirect('tes/list', 'refresh');
		}

		$pertanyaan_model = $this->pertanyaan_model;
		$validation = $this->form_validation;
		$validation->set_rules($pertanyaan_model->rules());

		if ($validation->run()) {
			# code...
			$pertanyaan_model->save();
			$this->session->set_flashdata('success', 'Berhasil ditambah');

		}


		$this->load->view('tes/editfompertanyaan');

	}

	public function delete($id = null)
	{
		if (!isset($id)) {
			# code...
			show_404();
		}
		if ($this->pertanyaan_model->delete($id)) {
			# code...
			redirect('tes/listpertanyaan', 'refresh');
		}
	}

}


/* End of file pertanyaan.php */
/* Location: ./application/controllers/pertanyaan.php */