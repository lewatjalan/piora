<?php
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

        function get_all_post(){
            $hsl=$this->db->query("SELECT artikel.*,DATE_FORMAT(create_at,'%d/%m/%Y')  FROM artikel ORDER BY id_artikel DESC");
            return $hsl;
        }

		public function create_post($post_image){
			$slug = url_title($this->input->post('judul'));

			$data = array(
				'judul' => $this->input->post('judul'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'kategori' => $this->input->post('kategori'),
				'id_admin' => $this->session->userdata('user_id'),
				'gambar' => $post_image
			);

			return $this->db->insert('artikel', $data);
		}

		public function update_post(){
			$slug = url_title($this->input->post('judul'));

			$data = array(
				'judul' => $this->input->post('judul'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'kategori' => $this->input->post('kategori'),
				'id_admin' => $this->session->userdata('user_id'),
				//'gambar' => $post_image
			);

			$this->db->where('id_artikel', $this->input->post('id_artikel'));
			return $this->db->update('posts', $data);
		}

		public function delete_post($id){
			$image_file_name = $this->db->select('post_image')->get_where('posts', array('id' => $id))->row()->post_image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\posts\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('posts');
			return true;
		}
	}