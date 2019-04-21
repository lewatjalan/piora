<?php
	class Obat_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		function get_all_obat(){
            $hsl=$this->db->query("SELECT *FROM obat ");
            return $hsl;
				}

		function simpan_obat(){
			$slug = url_title($this->input->post('nama_generik'));

			$data = array(
				'id_admin' => $this->session->userdata('user_id'),
				'nama_generik' => $this->input->post('nama_generik'),
				'merek_dagang' => $this->input->post('merek_dagang'),
				'indikasi_obat' => $this->input->post('indikasi_obat'),
				'bentuk' => $this->input->post('bentuk'),
				'slug' => $slug,
				'reaksi_obatlain' => $this->input->post('reaksi_obatlain'),
				'reaksi_makanan' => $this->input->post('reaksi_makanan')
			);

			return $this->db->insert('obat', $data);
		}

		public function update_obat(){
			$slug = url_title($this->input->post('nama_generik'));

			$data = array(
				'id_admin' => $this->session->userdata('user_id'),
				'nama_generik' => $this->input->post('nama_generik'),
				'merek_dagang' => $this->input->post('merek_dagang'),
				'indikasi_obat' => $this->input->post('indikasi_obat'),
				'bentuk' => $this->input->post('bentuk'),
				'slug' => $slug,
				'reaksi_obatlain' => $this->input->post('reaksi_obatlain'),
				'reaksi_makanan' => $this->input->post('reaksi_makanan')
			);

			$this->db->where('id_obat', $this->input->post('id_obat'));
			return $this->db->update('obat', $data);
		}

		function edit_obat($id_obat)
		{
		  $this->db->where('id_obat', $id_obat); //Akan melakukan select terhadap row yang memiliki artikelId sesuai dengan artikelId yang telah dipilih
		  $this->db->select("*");
		  $this->db->from("obat");
	  
		  return $this->db->get();
		}
		
		function editobat_proses($data,$id_obat)
		{
			$this->db->where('id_obat', $id_obat);
				$this->db->update('obat', $data);
		}

		public function delete_obat($id_admin){
			//delete admin berdasarkan id
			$this->db->where('id_admin', $id_admin);
			$this->db->delete('obat');
		}
	}