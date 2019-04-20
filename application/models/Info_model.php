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

		function get_admin_by_id($kode){
			$hsl=$this->db->query("SELECT * FROM admin where id_admin='$kode'");
			return $hsl;
		}
		
		function edit_data($where,$table){		
			return $this->db->get_where($table,$where);
		}

		public function get_where($where)
		{
		  // Jalankan query
		  $query = $this->db
			->where($where)
			->get($this->table);
	
		  // Return hasil query
		  return $query;
		}
		
		public function update($id, $data)
		{
		  // Jalankan query
		  $query = $this->db
			->where('id', $id)
			->update($this->table, $data);
		  
		  // Return hasil query
		  return $query;
		}
	}