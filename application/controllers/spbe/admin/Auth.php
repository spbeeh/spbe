<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('spbe/Auth_model');
		$this->load->model('user_model');
	}

	public function check_account()
	{
        //validasi login
		$username = $this->input->post('nip_pj');
		$password = $this->input->post('password');

        //ambil data dari database untuk validasi login
		$query = $this->Auth_model->check_account($username, $password);

		if ($query === 1) {
			$this->session->set_flashdata('alert', '<p class="box-msg">
        			<div class="info-box alert-danger">
        			<div class="info-box-icon">
        			<i class="fa fa-warning"></i>
        			</div>
        			<div class="info-box-content" style="font-size:14">
        			<b style="font-size: 20px">GAGAL</b><br>username yang Anda masukkan tidak terdaftar.</div>
        			</div>
        			</p>
            ');
		} elseif ($query === 2) {
			$this->session->set_flashdata('alert', '<p class="box-msg">
              <div class="info-box alert-info">
              <div class="info-box-icon">
              <i class="fa fa-info-circle"></i>
              </div>
              <div class="info-box-content" style="font-size:14">
              <b style="font-size: 20px">GAGAL</b><br>Akun yang Anda masukkan tidak aktif, silakan hubungi Administrator.</div>
              </div>
              </p>');
		} elseif ($query === 3) {
			$this->session->set_flashdata('alert', '<p class="box-msg">
        			<div class="info-box alert-danger">
        			<div class="info-box-icon">
        			<i class="fa fa-warning"></i>
        			</div>
        			<div class="info-box-content" style="font-size:14">
        			<b style="font-size: 20px">GAGAL</b><br>Password yang Anda masukkan salah.</div>
        			</div>
        			</p>
              ');
		} else {
            //membuat session dengan nama userData yang artinya nanti data ini bisa di ambil sesuai dengan data yang login
			$userdata = array(
				'is_login' => true,
				'id_user' => $query->id_user,
				'password' => $query->password,
				'nip_pj' => $query->username,
				'role' => $query->role,
				'nama_instansi_pusat' => $query->nama_instansi_pusat,
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
			redirect('member/home');
		}

        //proses login dan validasi nya
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nip_pj', 'nip_pj', 'trim|required|min_length[5]|max_length[50]');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[22]');
			$error = $this->check_account();

			if ($this->form_validation->run() && $error === true) {
				$data = $this->Auth_model->check_account($this->input->post('nip_pj'), $this->input->post('password'));

                //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
				if ($data->role == 'Admin' && hash_verified($this->input->post('password'), $query->password)) {
					redirect('sistem/admin/dashboard');
				} elseif ($data->role == 'User') {
					redirect('member/home');
				}
			} else {
				$this->load->view('', $data);
			}
		} else {
			$this->load->view('', $data);
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	public function check_register()
	{
		// $site = $this->Konfigurasi_model->listing();
		// $data = array(
		// 	'title' => 'Register | ' . $site['nama_website'],
		// 	'favicon' => $site['favicon'],
		// 	'site' => $site
		// );
		$this->form_validation->set_rules('namainstansipusat', 'namainstansipusat', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('nama_penanggungjawab', 'nama_penanggungjawab', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('jabatan_pj', 'jabatan_pj', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('nama_operator', 'nama_operator', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('nip_op', 'nip_op', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('jabatan_op', 'jabatan_op', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('nip_pj', 'nip_pj', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('role', 'role', 'trim|required|min_length[5]|max_length[50]');
		if ($this->form_validation->run() == false) {
			// $this->template->load('authentication/layout/template', 'authentication/register', $data);
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
			redirect('login', 'refresh');
		}
	}
}