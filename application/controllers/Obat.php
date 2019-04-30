<?php
	class Obat extends CI_Controller{
        public function __construct(){
        parent::__construct();
        $this->load->model('obat_model');
        $this->load->helper('url_helper');
        }

		public function index(){

		}

		public function view($slug = NULL){
			$data['obat'] = $this->obat_model->get_obat($slug);
			$id_obat = $data['obat']['id_obat'];

			if(empty($data['obat'])){
				show_404();
			}

			$data['title'] = $data['obat']['title'];

			$this->load->view('home/index', $data);
		}

		public function create(){

			if(!$this->session->userdata('status')){
							redirect('admin');
				}

			$this->form_validation->set_rules('nama_generik', 'Nama_generik', 'required');
			$this->form_validation->set_rules('indikasi_obat', 'Indikasi_obat', 'required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('admin/obat/add');

			} else {}
				// Set message
				$this->obat_model->simpan_obat();
				$this->session->set_flashdata('obat_created', 'Your akun has been created');
				redirect('admin/obat');
		}

		public function edit($id_obat)
		{
			$data['obatq'] = $this->obat_model->edit_obat($id_obat);
			$this->load->view('admin/obat/update',$data);
		}

        public function update(){

            $slug = url_title($this->input->post('nama_generik'));

			$data = array(
				'id_admin' => $this->session->userdata('user_id'),
				'nama_generik' => $this->input->post('nama_generik'),
				'merek_dagang' => $this->input->post('merek_dagang'),
				'indikasi_obat' => $this->input->post('indikasi_obat'),
				'bentuk' => $this->input->post('bentuk'),
				'reaksi_makanan' => $this->input->post('reaksi_makanan')
            );

            $condition['id_obat'] = $this->input->post('id_obat'); //Digunakan untuk melakukan validasi terhadap user mana yang akan diupdate nantinya

            $this->obat_model->editobat_proses($data, $this->input->post('id_obat')); //passing variable $data ke info_model

            $this->session->set_flashdata('message', 'edit');
            redirect('admin/obat'); //redirect page ke halaman info controller info_admin
        }

		public function delete($id_obat){

			$this->obat_model->delete_obat($id_obat);

			// Set message
			$this->session->set_flashdata('post_deleted', 'Your post has been deleted');

			redirect('admin/obat/list');
		}

	}
