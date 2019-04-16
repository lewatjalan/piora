<?php
class Artikel_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    /**
    * Get product by his is
    * @param int $product_id 
    * @return array
    */
    public function get_product_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->where('id_artikel', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }

 
}
?>	
