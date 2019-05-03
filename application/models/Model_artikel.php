<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_artikel extends CI_Model {
	
	
	function select_all($slug = FALSE){
		return $this->db->get('artikel');
	}
	
	public function get_post_slug($slug){
	  $query = $this->db->get_where('content',array('slug' => $slug));
	  return $query->result_array();
	}
	/*
	function select_all(){
        $hsl=$this->db->query("SELECT artikel.*,DATE_FORMAT(create_at,'%d/%m/%Y')  FROM artikel ORDER BY id_artikel DESC");
        return $hsl;
    }*/
}

?>