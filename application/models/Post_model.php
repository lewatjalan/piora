<?php
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

        function get_all_post(){
            $hsl=$this->db->query("SELECT artikel.*,DATE_FORMAT(create_at,'%d/%m/%Y')  FROM artikel ORDER BY id_artikel DESC");
            return $hsl;
        }
//funsi untuk meload halaman detail
        function get_detail ($table,$id,$val) {
        	return $this->db->get_where($table,array($id => $val ))->row(); //row itu hasilnya cuman 1 karena di detail yang ditampilin datanya cuman 1, tapi kalo result itu data yang ditampiln banyak.
        }

		public function get_posts($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('artikel.id_artikel', 'DESC');
				$query = $this->db->get('artikel');
				return $query->result_array();
			}
			$query = $this->db->get_where('artikel', array('slug' => $slug));
			return $query->row_array();
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

		public function update_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'category_id' => $this->input->post('category_id')
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);
		}

		public function get_categories(){
			$this->db->order_by('name');
			$query = $this->db->get('categories');
			return $query->result_array();
		}

		public function get_posts_by_category($category_id){
			$this->db->order_by('posts.id', 'DESC');
			$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get_where('posts', array('category_id' => $category_id));
			return $query->result_array();
		}
	}
