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

	public function update(){

		$id_admin=$this->input->post('id_admin');
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'email' => $this->input->post('email')
		);

		$condition['id_admin'] = $this->input->post('id_admin'); //Digunakan untuk melakukan validasi terhadap user mana yang akan diupdate nantinya

		$this->info_model->editadmin_proses($data, $this->input->post('id_admin')); //passing variable $data ke info_model

		$this->session->set_flashdata('message', 'edit');
		redirect('admin/info'); //redirect page ke halaman info controller info_admin
	}

	public function hapus_admin($id_admin)
	{
				$this->info_model->hapus_admin($id_admin); //passing variable $data ke products_model

				$this->session->set_flashdata('message', 'hapus');
				redirect('admin/info'); //redirect page ke halaman user controller info_admin
	}

	public function edit($id_admin)
	{
		$data['admin'] = $this->info_model->edit_admin($id_admin);
		$this->load->view('admin/info/edit',$data);
	}
	
}
