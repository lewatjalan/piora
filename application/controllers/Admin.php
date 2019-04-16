<?php 
 
class Admin extends CI_Controller{
	function index()
	{
		if($this->session->userdata('status') != "login"){
			$this->load->view('admin/login');
        }else{
        	$this->load->view('admin/dashboard');	
        }
	}
 	
	// Register user
		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/users', $data);
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				// Set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('admin');
			}
		}

		function get_all_admin(){
			$hsl=$this->db->query("SELECT * FROM admin");
			return $hsl;	
		}

		function simpan_admin(){
			if(!$this->session->userdata('status')){
							redirect('admin');
				} 

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
					
				$this->load->view('admin/info/add');
					
			} else {}
				// Set message
				$this->info_model->simpan_admin();
				$this->session->set_flashdata('admin_created', 'Your akun has been created');
				redirect('admin/info');	
		}


	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$user_id = $this->admin_model->cek_login("admin",$where)->num_rows();
		if($user_id > 0){
 
			$data_session = array(
				'nama' => $username,
				'user_id' => $user_id,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin/dashboard"));
		}else{
			$this->session->set_flashdata('login_failed', 'Login Gagal ! Silahkan Coba Kembali');
			$this->load->view('admin/login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('Admin_loggedout', 'You are now logged out');
		redirect(base_url('admin'));
	}
}
