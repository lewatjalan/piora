<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Info_admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
            $url=base_url('admin');
            redirect($url);
		};

	}
	public function index()
	{
		$x['data']=$this->info_model->get_all_admin();
		$this->load->view('admin/info/user',$x);

	}

	public function add(){
		$this->load->view('admin/info/add');

	}
	public function edit($id_admin)
	{
		$where = array('id_admin' => $id_admin);
		$data['admin'] = $this->info_model->edit_data($where,'admin')->result();
		$this->load->view('admin/info/edit',$data);
	}

	function update(){

		$id_admin = $this->input->post('id_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
	 
		$data = array(
			'username' => $username,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'email' => $email
		);
	 
		$where = array(
			'id_admin' => $id_admin
		);
	 
		$this->info_model->update_data($where,$data,'admin');
		redirect('admin/info');
	}
}
