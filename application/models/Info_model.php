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
	}