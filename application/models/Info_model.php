<?php
	class Info_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

    function get_all_admin(){
            $hsl=$this->db->query("SELECT *FROM admin ");
            return $hsl;
				}
				
		function simpan_admin(){
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email')
			);

			return $this->db->insert('admin', $data);
		}

    function edit_admin($id_admin)
    {
      $this->db->where('id_admin', $id_admin); //Akan melakukan select terhadap row yang memiliki artikelId sesuai dengan artikelId yang telah dipilih
      $this->db->select("*");
      $this->db->from("admin");
  
      return $this->db->get();
    }
		
		public function update_admin(){
			$data = array(
				'id_admin' => $this->input->post('id_admin'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'email' => $this->input->post('email')
			);

			$this->db->where('id_admin', $this->input->post('id_admin'));
			return $this->db->update('admin', $data);
		}
	}