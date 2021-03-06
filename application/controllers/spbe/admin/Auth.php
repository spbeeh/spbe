<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('spbe/Auth_model');
		$this->load->model('spbe/user_model');
	}

	public function check_account()
	{
        //validasi login
		$username = $this->input->post('nip_pj');
		$password = $this->input->post('password');

        //ambil data dari database untuk validasi login
		$query = $this->Auth_model->check_account($username, $password);

		if (!$query) {
			$this->session->set_flashdata('alert', '<p class="box-msg">
              <div class="info-box alert-info">
              <div class="info-box-icon">
              <i class="fa fa-info-circle"></i>
              </div>
              <div class="info-box-content" style="font-size:14">
              <b style="font-size: 20px">GAGAL</b><br>Akun yang Anda masukkan tidak aktif, silakan hubungi Administrator.</div>
              </div>
              </p>');
		} else {
            //membuat session dengan nama userData yang artinya nanti data ini bisa di ambil sesuai dengan data yang login
			$userdata = array(
				'is_login' => true,
				'id_user' => $query->id_user,
				'password' => $query->password,
				'nip_pj' => $query->nip_pj,
				'role' => $query->role,
				// 'nama_penanggungjawab' => $query->nama_penanggungjawab,
				'namainstansipusat' => $query->namainstansipusat,
				'jabatan_pj' => $query->jabatan_pj,
				'nama_operator' => $query->nama_operator,
				'nip_op' => $query->nip_op,
				'jabatan_op' => $query->jabatan_op
			);
			$this->session->set_userdata($userdata);
			return true;
		}
	}
	public function login()
	{
		// $site = $this->user_model->listing();

		$data = $this->db->get('user')->result();
        //melakukan pengalihan halaman sesuai dengan levelnya
		if ($this->session->userdata('role') == "Admin") {
			redirect('sistem/admin/dashboard');
		}
		if ($this->session->userdata('role') == "User") {
			redirect('menu/dashboard');
		}
        //proses login dan validasi nya
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nip_pj', 'nip_pj', 'trim|required|min_length[5]|max_length[50]');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[22]');
			$error = $this->check_account();

			if ($this->form_validation->run() && $error == true) {
				$data = $this->Auth_model->check_account($this->input->post('nip_pj'), $this->input->post('password'));

                //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
				if ($data->role == 'Admin') {
					redirect('sistem/admin/dashboard');
				} elseif ($data->role == 'User') {
					redirect('menu/dashboard');
				}
			} else {

				redirect('sistem/admin/dashboard');

			}
		} else {
			$this->load->view('login/login');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	public function check_register()
	{

		$this->form_validation->set_rules('namainstansipusat', 'namainstansipusat', 'trim|required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('nama_penanggungjawab', 'nama_penanggungjawab', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('jabatan_pj', 'jabatan_pj', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('nama_operator', 'nama_operator', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('nip_op', 'nip_op', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('jabatan_op', 'jabatan_op', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('nip_pj', 'nip_pj', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('role', 'role', 'trim|required|min_length[1]|max_length[50]');
		if ($this->form_validation->run() == false) {

			redirect('sistem/admin/datauser');

		} else {
			$this->Auth_model->reg();
			$this->session->set_flashdata('alert', '<p class="box-msg">
          <div class="info-box alert-success">
          <div class="info-box-icon">
          <i class="fa fa-check-circle"></i>
          </div>
          <div class="info-box-content" style="font-size:14">
          <b style="font-size: 20px">SUKSES</b><br>Pendaftaran berhasil, silakan login.</div>
          </div>
          </p>
        ');
			redirect('sistem/admin/datauser');
		}
	}
}