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
	public function edit($id = null)
	{
	  // Jika form di submit jalankan blok kode ini
	  if ($this->input->post('submit')) {
		
		// Mengatur validasi data password,
		// # required = tidak boleh kosong
		// # min_length[5] = password harus terdiri dari minimal 5 karakter
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		// Jalankan validasi jika semuanya benar maka lanjutkan
			  if ($this->form_validation->run() === TRUE) {
  
		  $data = array(
			'password' => md5($this->input->post('password'), PASSWORD_DEFAULT),
		  );
  
		  // Jalankan function insert pada info_model
		  $query = $this->info_model->update($id, $data);
  
		  // cek jika query berhasil
		  if ($query) $message = array('status' => true, 'message' => 'Berhasil memperbarui user');
		  else $message = array('status' => true, 'message' => 'Gagal memperbarui user');
  
		  // simpan message sebagai session
		  $this->session->set_flashdata('message', $message);
  
		  // refresh page
		  redirect('info_admin/edit/'.$id, 'refresh');
			  } 
	  }
	  
	  // Ambil data user dari database
	 // $user = $this->model_users->get_where(array('id' => $id))->row();
  
	  // Jika data user tidak ada maka show 404
	  //if (!$user) show_404();
  
	  // Data untuk page users/add
	  
	  $data  = $this->load->view('admin/info/edit', $datas);
  
	  // Jalankan view template/layout
	  $this->load->view('admin/info/edit', $data);
	}
}
